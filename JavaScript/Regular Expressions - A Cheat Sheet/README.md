# Regular Expressions - A Cheat Sheet
*Some people, when confronted with a problem, think "I know, I'll use regular expressions." Now they have two problems. - Jamie Zawinski*

Ah Regular Expressions. Extremely useful. Insanely powerful. Unsurprisingly complex to use. RegEx are one of those things for which love comes with knowledge, either that or sheer contempt. This Readme should help bridge the gap between these mindsets.

## Basic RegEx

In Javascript, Regular Expressions have to be defined between forward slash characters

`/(content of the regular expression goes here)/`

Flags have to be placed after the closing backslash without spaces.

`/(content of the regular expression goes here)/i`

## Find Letters and Numbers

To find a specific character, simply add it between the backslashes. For example, if you want to find the letter `a`, you would write:

`/a/`

And to find `potato` you'd do

`/potato/`

Same thing for numbers. 

`/42/`

You can also search for specific ranges using regular expressions, these are presented inside brackets. if you want to find any number, the regular expression looks like this:

`/[0-9]/`

Same thing for letters. This would find all lowercase letters from `a` to `n`

`/[a-n]/`

On the other hand, if you want to find anything that _doesn't_ match the specified pattern, all you need to do is add a caret (`^`) as the first item inside of the brackets. The following expression will find anything letter not between `a` and `n`

`/[^a-n]/`


***Important:*** This only works if you use `^` *inside* of brackets, `^` does something else if you use it outside brackets, we'll get to that in a moment.

In case you want to find any one of a list of elements, you can use the vertical line `|` to list all the possible matches

`/potato|salad|dressing/`


## Expression Flags

The examples above will only find the first example of the pattern most of the phrase `This potato is the best potato to ever potato` will be gleefully ignored because you found what you needed right at the start. if you want to find all of them, you'll have to use the global expression flag `g`, outside of the backslash

`/potato/g`

Now it'll search for all instances of the word `potato`, but it won't find `POTATO` or `Potato`. By default, searches are case sensitive. To get around this, you have to add expression flag `i`

`/potato/gi`


## RegEx pattern cheat sheet

Regular expressions generally aren't made to find a specific item, but anything that matches a certain pattern. Presented below is a list of special expressions designed to  help you with that
+ `\w` - Find any word character (The entire alphabet in uppercase and lowercase, plus numbers from 0 to 9 and underscore `_`)
+ `\W` - Find any non-word character 
+ `\d` - Find any digit (0-9)
+ `\D` - Find anything that isn't a digit
+  `.` - Find a character, any character.
+ `\s` 	Find a whitespace character (yes, there's more than one kind)
+ `\S` 	Find a non-whitespace character

The following ones will be using the letter `L` as an example on how to use them. Their use is not limited to word characters.

+ `\bL` - Matches any string that starts with `L`
+ `L\b` - Matches any string that ends with `L`
+ `^L` - Matches any string with `L` at the beginning of it (this is what it does when it's not inside brackets)
+ `L$` - Matches any string with `L` at the end of it
+ `L+` - Matches any string that contains one or more `L`
+ `L*` - Matches any string that contains zero or more `L`
+ `L?` - Matches any string that contains zero or one `L`

## Methods to use Regex

Now that you have a list of most of the things you need to use regular expressions (consult with your local tech priest if you need to match a unicode character for some reason), how do you use them? Well, there's a couple of functions. as an example, let's create a regular expression to find all instances of the word `potato`

`const example = /potato/gi;`

**match** : if you want to see how many times the match exists, you can do so using the match method. it's used a little bit something like this:

```
let testPhrase = `This potato is the best potato to ever potato`;
let result = testPhrase.match(example);

```

if you run this, `result` will be `potato,potato,potato`

**test** : A better use for this, especially if you want things to happen depending on whether something matches your regex or not is test. the function will simply return true if it finds a match and false if it doesn't.

this is how it would look

```
let testPhrase = `This potato is the best potato to ever potato`;
example.text(testPhrase)

```

If you run this, the result will be `true.`

## Always Check your RegEx

Fortunately, if you want to sanity check your RegEx before you put it into code, there's the excellent [RegExr](https://regexr.com/), where you can just put your prospective Expression and it will tell you if it'll do what you think it will. If it doesn't, tweak it until it does.