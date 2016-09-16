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

        function matchWord($word, $text_word)
        {
            $word = strtolower($word);
            $text_word = strtolower($text_word);
            $word = trim($word, " .,:;/'\+=_-!'%*)()*#@");
            $text_word = trim($text_word, " .,:;/'\+=_-!'%*)()*#@");
            if ($word == $text_word) {
                $this->addMatch();
            }
        }

        function CountRepeats($word, $text)
        {

        }
    }
 ?>
