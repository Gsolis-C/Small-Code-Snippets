# Shortcodes - Keep your PHP off of the editor.

Shortcodes allow you to call PHP functions from within the wordpress editor without having to do all of that potentially site-breaking *"dumping a PHP call in the middle of your post"* business.

So instead of


```
*Some Text*
<?php
    function roundabout_print(){
        return('Hello World');
    }
    roundabout_print();
?>
*Some More Text*
```

or, if you had almost but not quite enough prescience,

~~~
*Some Text*
<?php
    roundabout_print();
?>
*Some More Text*
~~~

All you need to do is 

```
*Some Text*
[roundabout-print]
*Some More Text*
```
## Create the Shortcode

You need to have two items to create a shortcode
- The `add_shortcode` function call (to register the shortcode).
- The function associated with the shortcode (this is what the shortcode will actually do)

The entire thing looks something like this.

```
add_shortcode("shortcode-name", function_name);
function function_name(){
    /*the contents of the function*/
}
```
It seems self-explanatory...and it is, but let's explain it anyway.

- `add_shortcode`: The function that actually creates your shortcode, it takes two parameters
    - `"shortcode-name"`: The name that you will use on the WordPress editor to use the shortcode.
    - `function_name`: The name of the function that has all the content that the function should do.
In this case, all you need to do is make a function `function_name(){}` and just have it do whatever, returning whatever you need when it's done.
- `function function_name(){}`: that function you just called. The code you want to do goes here.

For this example, we've decided to take complete leave of our senses and, instead of just typing "Hello World" on every page, we're creating a shortcode to use it everywhere.

Maybe we have a lot of places where we want to print Hello World.
```
add_shortcode("roundabout-print", "roundabout_print");
function roundabout_print(){
        return('Hello World');
}
```
***Important:*** Wordpress expects the shortcode to `return` something. No matter what you want to do on the shortcode, make sure you `return` it instead of using `echo` or `sprintf`. 

Otherwise you get the fun experience of trying to figure out what WordPress's `invalid JSON response` means for you (Please don't think redoing your permalink structure should be option #1)
## Add it to Wordpress

To use the shortcode, you'll need to add it to the theme you're using. go to `wp-content/themes/your-theme` and look for a file called `functions.php`

It's not there? you can just create it and add the basic php structure:

```
<?php
    /*code goes here*/
?>
```
No need to link it anywhere else. WordPress knows to look for it.

***Important:*** It's often repeated but it bears mentioning again: **Keep backups**. If the theme you're tinkering with is not yours and you're not using a [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/), an update can overwrite your `functions.php` file. if you didn't keep a copy, good luck recreating all of your shortcodes from memory.


Okay, so we've made a shortcode, how do we use it? Well, all you need to do is add the name of the shortcode in the wordpress editor between `[]` brackets. 

`[roundabout-print]`

If you're already using the block editor, there's also a dedicated [shortcode block](https://wordpress.com/support/wordpress-editor/blocks/shortcode-block/).

## But what if I want to have the function in the `add_shortcocde` itself?

You can do this too if you don't want to keep track of two separate statements for each shortcode. Our hello world example would look a little bit like this.

```
add_shortcode("another-roundabout-print", function(){
        return('This is the text you will return');
    });
```

This should work exactly the same as the previous example.

## But what if I want it to use variables?

Let's say, just to keep our existing code and example, that you now want to still display a hello, but a specific one for each page. Well, you're in luck, as you can send attributes to the shortcode. it looks a little bit like this

`[roundabout-print attribute="you" anotherAttribute='five']`

you can send any number of attributes to a shortcode. they all get bundled into a nice associated array and sent to the shortcode function looking a little like this:

`{“attribute”:”word”,”anotherattribute”:”five”} `

on the function side, you only need to do a couple of small changes. You'll need to add an argument to your shortcode function for it to accept the attributes. Wordpress documentation and boilerplate functions like to use `$atts` for this. We'll use it here as well.

```
add_shortcode("roundabout-print", "roundabout_print");
function roundabout_print($atts){
		$string =
        return('Hello '.$atts['attribute']);
}
```



*Note*: The interpreter for shortcodes is a bit like the security guard at your average stadium and will let everything through. You'll note I sent it two arguments and only used one. This will happen without any warnings. You can also send it no attributes and it will still run provided the function itself does not throw any errors. Be mindful of this. Also try and have defaults ready in case you or someone else forgets their attributes.

## Can I just get the code to copy please?
Sure, [click here](shortcode_example.php), but don't say I didn't try and help you. 