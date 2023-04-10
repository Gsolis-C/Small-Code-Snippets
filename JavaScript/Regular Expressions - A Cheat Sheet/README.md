# Regular Expressions - A Cheat Sheet
*Some people, when confronted with a problem, think "I know, I'll use regular expressions." Now they have two problems. - Jamie Zawinski*

Ah Regular Expressions. Extremely useful. Insanely powerful. Unsurprisingly complex to use. RegEx are one of those things that people who learn well love and everyone else looks with sneer and distrust. This readme should help bridge the gap between these mindsets.

## Basic RegEx

In Javascript, Regular Expressions have to be defined between forward slash characters

`/(content of the regular expression goes here)/`

Additional modifiers have to be placed after the closing backslash without spaces.

`/(content of the regular expression goes here)/`

## RegEx pattern cheat sheet

`\w` - Find any word character (The entire alphabet in uppercase and lowercase, plus numbers from 0 to 9 and underscore `_`)

`\W` - Find any non-word character 

``

``

``

``
g 	Perform a global match (find all matches rather than stopping after the first match)
i 	Perform case-insensitive matching
m 	Perform multiline matching

[abc] 	Find any character between the brackets
[^abc] 	Find any character NOT between the brackets
[0-9] 	Find any character between the brackets (any digit)
[^0-9] 	Find any character NOT between the brackets (any non-digit)
(x|y) 	Find any of the alternatives specified

. 	Find a single character, except newline or line terminator
\w 	Find a word character
\W 	Find a non-word character
\d 	Find a digit
\D 	Find a non-digit character
\s 	Find a whitespace character
\S 	Find a non-whitespace character
\b 	Find a match at the beginning/end of a word, beginning like this: \bHI, end like this: HI\b
\B 	Find a match, but not at the beginning/end of a word

n+ 	Matches any string that contains at least one n
n* 	Matches any string that contains zero or more occurrences of n
n? 	Matches any string that contains zero or one occurrences of n

n$ 	Matches any string with n at the end of it
^n 	Matches any string with n at the beginning of it

`/(content of the regular expression goes here)/+`
## Check it before you use it
Fortunately, if you want to sanity check your RegEx before you put it into code, there's the excellent [RegExr](https://regexr.com/), where you can just put your prospective Expression and it will tell you if it'll do what you think it will.