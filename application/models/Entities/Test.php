<?php

namespace Entities;

/**
 * Test
 */
class Test
{
    /**
     * @var integer
     */
    private $id_test;

    /**
     * @var string
     */
    private $test_text;


    /**
     * Get idTest
     *
     * @return integer
     */
    public function getIdTest()
    {
        return $this->id_test;
    }

    /**
     * Set testText
     *
     * @param string $testText
     *
     * @return Test
     */
    public function setTestText($testText)
    {
        $this->test_text = $testText;

        return $this;
    }

    /**
     * Get testText
     *
     * @return string
     */
    public function getTestText()
    {
        return $this->test_text;
    }
}

