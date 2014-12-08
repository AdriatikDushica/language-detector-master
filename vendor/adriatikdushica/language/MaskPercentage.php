<?php
/**
 * Created by PhpStorm.
 * User: adriatikdushica
 * Date: 08.12.14
 * Time: 10:27
 */

namespace Adriatikdushica\Language;


class MaskPercentage {

    private $text;
    public $mask = [];

    /**
     * @param $text
     */
    function __construct($text)
    {
        $this->text = $this->clean($text);

        $this->textToLower();

        $this->generate();

        $this->toPercentage();
    }

    /**
     * @param $text
     * @return mixed
     */
    private function clean($text)
    {
        return preg_replace('/[^\w]|[\d]/', '', $text);
    }

    /**
     *
     */
    public function generate()
    {
        for ($i = 0; $i < strlen($this->text); $i++) {
            if (array_key_exists($this->text[$i], $this->mask)) {
                $this->mask[$this->text[$i]]++;
            } else {
                $this->mask[$this->text[$i]] = 1;
            }
        }
    }

    /**
     *
     */
    public function toPercentage()
    {
        $totalCharachers = strlen($this->text);

        foreach($this->mask as $key => $percentage){
            $this->mask[$key] = $this->mask[$key] / $totalCharachers * 100;
        }
    }

    /**
     *
     */
    public function textToLower()
    {
        $this->text = strtolower($this->text);
    }

}