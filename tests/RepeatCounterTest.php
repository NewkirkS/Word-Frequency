<?php
    require_once __DIR__."/../src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testConstructor()
        {
            //Arrange
            $test_counter = new RepeatCounter("This", "That");
            //Assert
            $this->assertEquals("This", $test_counter->getSearchWord());
            $this->assertEquals("That", $test_counter->getSearchText());
        }

        function test_matchWord_noMatch()
        {
            //Arrange
            $test_counter = new RepeatCounter("This", "Banana");
            //Act
            $test_counter->matchWord($test_counter->getSearchWord(), $test_counter->getSearchText());
            //Assert
            $this->assertEquals(0, $test_counter->getMatches());
        }

        function test_matchWord_match()
        {
            //Arrange
            $test_counter = new RepeatCounter("This", "This");
            //Act
            $test_counter->matchWord($test_counter->getSearchWord(), $test_counter->getSearchText());
            //Assert
            $this->assertEquals(1, $test_counter->getMatches());
        }

        function test_matchWord_ignoreCase()
        {
            //Arrange
            $test_counter = new RepeatCounter("this", "This");
            //Act
            $test_counter->matchWord($test_counter->getSearchWord(), $test_counter->getSearchText());
            //Assert
            $this->assertEquals(1, $test_counter->getMatches());
        }

        function test_matchWord_ignorePunctuation()
        {
            //Arrange
            $test_counter = new RepeatCounter("this", "This!");
            //Act
            $test_counter->matchWord($test_counter->getSearchWord(), $test_counter->getSearchText());
            //Assert
            $this->assertEquals(1, $test_counter->getMatches());
        }

        function test_countRepeats()
        {
            //Arrange
            $test_counter = new RepeatCounter("this", "This is a test. I am testing this!");
            //Act
            $test_counter->countRepeats($test_counter->getSearchWord(), $test_counter->getSearchText());
            //Assert
            $this->assertEquals(2, $test_counter->getMatches());
        }
    }
 ?>
