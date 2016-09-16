<?php
    class RepeatCounter
    {
        private $search_word;
        private $search_text;
        private $text_array;
        private $matches;

        function __construct($word_input, $text_input)
        {
            $this->search_word = (string) $word_input;
            $this->search_text = (string) $text_input;
            $this->text_array = array();
            $this->matches = 0;
        }

        function getSearchWord()
        {
            return $this->search_word;
        }

        function getSearchText()
        {
            return $this->search_text;
        }

        function getMatches()
        {
            return $this->matches;
        }

        function addMatch()
        {
            $this->matches += 1;
        }

        function matchWord()
        {
            // if ($this->search_word == $this->search_text) {
            //     return true;
            // } else {
            //     return false;
            // }
            return false;
        }

        function CountRepeats($word, $text)
        {

        }
    }
 ?>
