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

    public $currentLanguage;
    public $currentDistance = 100;

    private $languages = [
        'IT' => [
            'description' => 'italiano',
            'frequencies' => [
                'a' => 11.745,
                'b' => 0.927,
                'c' => 4.501,
                'd' => 3.736,
                'e' => 11.792,
                'f' => 1.153,
                'g' => 1.644,
                'h' => 0.636,
                'i' => 10.143,
                'j' => 0.011,
                'k' => 0.009,
                'l' => 6.510,
                'm' => 2.512,
                'n' => 6.883,
                'o' => 9.832,
                'p' => 3.056,
                'q' => 0.505,
                'r' => 6.367,
                's' => 4.981,
                't' => 5.623,
                'u' => 3.011,
                'v' => 2.097,
                'w' => 0.033,
                'x' => 0.003,
                'y' => 0.020,
                'z' => 1.181,
            ]
        ],
        'EN' => [
            'description' => 'english',
            'frequencies' => [
                'a' => 8.167,
                'b' => 1.492,
                'c' => 2.782,
                'd' => 4.253,
                'e' => 12.702,
                'f' => 2.228,
                'g' => 2.015,
                'h' => 6.094,
                'i' => 6.966,
                'j' => 0.153,
                'k' => 0.772,
                'l' => 4.025,
                'm' => 2.406,
                'n' => 6.749,
                'o' => 7.507,
                'p' => 1.929,
                'q' => 0.095,
                'r' => 5.987,
                's' => 6.327,
                't' => 9.056,
                'u' => 2.758,
                'v' => 0.978,
                'w' => 2.360,
                'x' => 0.150,
                'y' => 1.974,
                'z' => 0.074,
            ]
        ]
    ];

    /**
     * @param $text
     */
    function __construct($text)
    {
        $this->text = $this->clean($text);

        $this->textToLower();

        $this->generate();

        $this->toPercentage();

        $this->detectLanguage();
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

    /**
     *
     */
    public function detectLanguage()
    {
        foreach($this->languages as $language)
        {
            $distance = $this->distanceInPercentage($language);

            if($distance < $this->currentDistance)
            {
                $this->currentDistance = $distance;
                $this->currentLanguage = $language['description'];
            }
        }
    }

    /**
     * @param $language
     * @param $distance
     * @return number
     */
    public function distanceInPercentage($language)
    {
        $distance = 0;

        foreach ($language['frequencies'] as $character => $percentage) {
            if (array_key_exists($character, $this->mask)) {
                $distance += abs($this->mask[$character] - $percentage);
            } else {
                $distance += abs($percentage);
            }
        }

        return $distance;
    }

}