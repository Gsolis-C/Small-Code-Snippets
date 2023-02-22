# Basic Plugin Setup
## Add Stuff to your WordPress Site...and any Other WordPress Site

Adding customization to a child theme is fun enough. However, you have to accept the fact that someone, somewhere, maybe they're not using your theme. And they may not want to switch because they like the theme that they're using very much. So how do you customize things on other themes?

Plugins.

The WordPress ecosystem has an ocean of plugins. And much like the ocean, most of it is dark, weird, and you don't want it anywhere near your server. You may even be tempted to do a plugin yourself. 

## Okay, what do I need to do?

In order to make a plugin, you will have to do one of the most terrifying and delicate procedures in computing

 **YOU MUST CREATE A FOLDER!**
 
Specifically, you have to create a folder on the plugin folder of your site. WordPress is really consistent about this, plugins live on *wp-content/plugins*. Make a folder there, making sure that the folder name doesn't have any spaces on it. If you are all about spaces, you-have-to-use-hyphens-to-separate-words.
 
 ## Comments Please
 
With that done. It's time to actually create a plugin. For this example, we'll create the most basic plugin in the entire planet. A plugin whose only purpose is to show up on the sidebar and display "Hello World!" when you open it. 
 
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

Why all of that? When you copy the folder to any WordPress install, Wordpress will look for this information to put it on the "Plugins" section of the Admin pages.

Congratulations! You have now successfully created a plugin!

## My plugin does nothing!

Ah. Yes. That is a concern. However, once you have that comment, you can begin to add any functionality you want the plugin to do as PHP code on this file, or split it into multiple files depending on what you need. I'll leave that to whomever is asking you to do this. As typed a couple of paragraphs above, this plugin will do two things.

 - Show up on the Admin sidebar
 - Have the plugin page say "Hello World!"
 
 To display on the sidebar you have to add an action. This will tell WordPress when exactly you want something to happen. Here is the action you have to add
 
 	add_action('admin_menu', 'sidebar_display');



Never seen that line before? That's okay, it's not a complex one. You're just telling WordPress that when it reaches the **`admin_menu`** bit of building a page it executes the function **`sidebar_display`**.

you can read more about add_action [here](https://developer.wordpress.org/reference/functions/add_action/), when you have a bit of time.

`admin_menu` needs to be written exactly as it is here. The function can be named whatever you want it to be, i named it `siebar_display` because the guide from where I learned this did so, and quite frankly it's impossible to make it more descriptive.

So we have told Wordpress to execute the function `sidebar_display`. It would probably be a good idea to create that

	function sidebar_display(){}

All we've done is create a function. One that is pretty useless without the necessary code to do both of the things we want it to do. To put it on the sidebar, you need to add the following function call inside `sidebar_display`.

	add_menu_page( 'Title Tag', 'Menu Title', 'manage_options', 'your-URL', 'display');



`add_menu_page` does exactly what it says on the tin. Here's an explanation of the parameters on the function

- `'Title Tag'`: This controls what you will see on the title tag of the page.
 - `'Menu Title'`: This is the name it will display on the Admin Menu Sidebar. You may want to pick something distinctive.
 - `'manage_options'`: the minimum capabilities a user needs to have to see this menu item. In this case, we're using manage_options to restrict it to Admin and Super Admin roles. You can read more about them [here](https://wordpress.org/documentation/article/roles-and-capabilities/)
 - `'your-URL'`: the url of the plugin menu page. For a start you will want to use something like "Test" or "development". Maybe not keep those for production use
 - `'display'`:The name of the function you want to run immediately upon clicking the menu page.
 
Oh right, we should probably create that one.

	function display(){
		echo("<h1>Hello World!</h1>")
	}




I don't think I need to explain that one.


If you must, here it is completed. The most basic layout for a plugin file:


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



















