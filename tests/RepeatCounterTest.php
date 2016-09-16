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
            $test_counter->matchWord();
            //Assert
            $this->assertEquals(0, $test_counter->getMatches;
        }

        function test_matchWord_match()
        {
            //Arrange
            $test_counter = new RepeatCounter("This", "This");
            //Act
            $test_counter->matchWord();
            //Assert
            $this->assertEquals(true, $test_counter->getMatches());
        }
    }
 ?>
