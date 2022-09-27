# Basic Plugin Setup
## Add Stuff to your WordPress Site...and any Other WordPress Site

Adding customization to a child theme is fun enough. However, you have to accept the fact that someone, somewhere, maybe they're not using the same theme as you do. And they may not want to use the same theme as you do because they like the theme that they're using very much. So how do you customize things on other themes?

Plugins.

The WordPress ecosystem has an ocean of plugins. And much like the ocean, most of it is dark, weird, and you don't want it anywhere near your server. You may even be tempted to do a plugin yourself. 

## Okay, what do I need to do?

In order to make a plugin, you will have to do one of the most terrifying and delicate procedures in computing

 **YOU MUST CREATE A FOLDER!**
 
 Specifically, you have to create a folder on the plugin folder of your site. WordPress is really consistent about this, plugins live on *wp-content/plugins*. Make a folder there, making sure that the folder name doesn't have any spaces on it. If you are all about spaces, you-have-to-use-hyphens-to-separate-words.
 
 ## Comments Please
 
 With that done. It's time to actually create a plugin. For this example, we'll create the most basic plugin in the entire planet. A plugin whose only purpose is to show up on the sidebar, and display "Hello World!" when you open it. 
 
 I hear Google uses something quite similar on their job applications.
 
 Open the folder you just created and create a brand new .php file. It doesn't matter what you name it, but as you get to doing more complex stuff you'll begin to appreciate descriptive filenames. 
 
 Add the syntax to tell the computer where your PHP code starts and ends
 
 	<?php ?> 

Now you'll write some very specific comments. You know how you've been told that comments are for the benefit of programmers only and the computer doesn't read them. That's a lie. The computer reads them and ignores them, like every pamphlet about road safety you've ever received.  However, WordPress doesn't ignore a very specific set of comments that have to be on the top of what will become the "Main" file of the plugin. Here's how that comment looks:

	/**
	* Plugin Name: Name
	* Description: Project Description
	* Version: 0.0
	* Author: The Author
	*/

Why all of that? When you copy the folder to any WordPress install, Wordpress will look for this information to put it on the "Plugins" section of the manager, where you activate all plugins.

Congratulations! You have now successfully created a plugin!

## My plugin does nothing!

Ah. Yes. That is a concern. However, once you have that comment, you can begin to add any functionality you want the plugin to do as PHP code on this file, or split it into multiple files depending on what you need. I'll leave that to whomever is asking you to do this. For this example, let's just make it do two things.

 - Show up on the Admin sidebar
 - Have the plugin page say "Hello World!"
 
 To display on the sidebar you have to add an action. This will tell WordPress when exactly you want something to happen. Here is the action you have to add
 
 	add_action('admin_menu', 'sidebar_display');



Never seen that line before? That's okay, it's not a complex one. You're just telling WordPress that when it reaches the **`admin_menu`** bit of building a page it executes the function **`sidebar_display`**.

`admin_menu` needs to be written exactly as it is here. The function can be named whatever you want it to be, i named it `siebar_display` because the guide from where I learned this did so, and quite frankly it's impossible to make it more descriptive.

So we have told Wordpress to execute the function `sidebar_display`. It would probably be a good idea to create that

	function sidebar_display(){}

All we've done is create a function. One that is pretty useless without the necessary code to do both of the things we want it to do. All of it is on the following line.

	add_menu_page( 'Title Tag', 'Menu Title', 'manage_options', 'your-URL', 'display');

If you must, here's one of the most basic layouts for  a plugin file:

	<?php

	/**
	 * Plugin Name: Name
	 * Description: Project Description
	 * Version: 0.0
	 * Author: Your_name
	 */
	
	add_action('admin_menu', 'sidebar_display');
	function sidebar_display(){
	    add_menu_page( 'Title Tag', 'Menu Title', 'manage_options', 'your-URL', 'display' );
	}
	
	fuction display(){
		echo("<h1>Hello World!</h1>")
	}
	?>


---

## What the hell is that!?
















