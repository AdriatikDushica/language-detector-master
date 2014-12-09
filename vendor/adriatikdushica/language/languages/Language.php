<?php namespace AdriatikDushica\Language\Languages;


class Language {
    private $description;
    private $frequencies;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getFrequencies()
    {
        return $this->frequencies;
    }

    /**
     * @param mixed $frequencies
     */
    public function setFrequencies($frequencies)
    {
        $this->frequencies = $frequencies;
    }

}