# _Word Frequency_

#### _9-16-16_

#### By _**Stephen Newkirk**_

## Description

_This site allows users to enter a search word and a sentence or text in which to search for the word. The site returns the frequency of the word in the sentence._

## Specifications

| Behavior      | Input       |Output|
| ------------- |-------------| -----|
| Spec 1: If no words in the sentence match the input, the program returns no results. This is the simplest default behavior and requires the least amount of code to implement. The behavior will be tested by returning a result of 0 if there is no match. | Search Word: "This" / String: "Banana" | 0 Matches |
| Spec 2: If the search word matches a single word string, the program will return "true" This is the next simplest behavior because the strings can be compared easily without any search methods needing to be used to manipulate the text. | Search Word: "This" / String: "This" | true |
| Spec 3: The program will return true on word matches regardless of character case. This is relatively easy to implement by applying a standard format to both inputs. | Search Word: "this" / String: "This" | true |
| Spec 4: The program will ignore common punctuation when determining a match. This is slightly more difficult because unlike upper or lower case, the text to search could include any number or combination of different punctuation marks.| Search Word: "this" / String: "This!" | true |
| Spec 5: The program keep track of how many words in a multi-word sentence match the search term. This is the most complex behavior as it necessitates the text being comprehensively searched and non-matches ignored while also keeping track of the total number of matches. | Search Word: "this" / String: "This is a test. I am testing this!" | 2 |


## Setup/Installation Requirements

_In Terminal:_

`git clone 'URL'`

`$ cd 'directory name'`

`$ composer install`

`$ cd web`

`$ php -S localhost:8000`

_In Browser:_

`localhost:8000`

## Known Bugs

_None yet_

## Support and contact details

_Stephen Newkirk: newkirk771@gmail.com_

## Technologies Used

_HTML,
CSS,
PHP,
Silex,
Twig_

### License

*This webpage is licensed under the MIT license.*

Copyright (c) 2016 **_Stephen Newkirk_**
