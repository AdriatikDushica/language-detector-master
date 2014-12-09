<?php namespace AdriatikDushica\Language\Languages;

class LanguageItalian implements Language{
    private $description = 'italiano';
    private $frequencies = [
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
    ];

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function getFrequencies()
    {
        return $this->frequencies;
    }

    /**
     * @param array $frequencies
     */
    public function setFrequencies($frequencies)
    {
        $this->frequencies = $frequencies;
    }

} 