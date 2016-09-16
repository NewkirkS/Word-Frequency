<?php
    require_once __DIR__."/../src/WordFrequency.php";

    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function testConstructor()
        {
            //Arrange
            $test_frequency = new WordFrequency("This", "That");
            //Assert
            $this->assertEquals("This", $test_frequency->getSearchWord());
            $this->assertEquals("That", $test_frequency->getSearchText());
        }
    }
 ?>
