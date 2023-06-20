# `wp_enqueue` 

Welp, it finally happened. You need to add some javascript to the company's website. WordPress is not going to allow you to just wrap the entire thing in `<script>` tags and go to town. I mean, it will, but that's not how you're supposed to do it. Fortunately, the way to do it isn't particularly difficult.

```
function addScript() {
        wp_enqueue_script('js', get_template_directory_uri().'/js/javascript.js');
    }
    add_action('wp_enqueue_scripts', 'addScript');

```

I said it wasn't difficult, not that it didn't involve a couple of new things. Declaring a function shouldn't be new (if it is, you may need an additional resource or two before reading anything on this repository), so let's go straight to the new bits.

## `wp_enqueue_script`

Instead of just trying to add the script inside the `header.php` file or using inline `script` tags, WordPress provides a function that will register and enqueue a script. It takes several arguments, two of which are being used here.

- `'js'` : This is just the name of the script, it can be anything you want so long as it is unique. if you are making something that will be used on a lot of wordpress sites, it pays to be creative.
- `get_template_directory_uri()` : The thing about creating things for widespread use is, you can never be completely sure how it's going to be used, or where. In this case, you can't be completely sure of where your template folder is going to be. So hardcoding is really not a good idea. Not unless you enjoy the hell out of support calls where you have to explain to people how to fiddle with code. 

To save you the trouble, you can just use `get_template_directory_uri()`, which will do exactly what it says. Then you can concatenate the items using `.`.

That's all you need in the function. But functions don't execute by themselves. You need to tell WordPress that the function is there and when to execute it. that's where `add_action` comes in.

## `add_action`?

`add_action` is a wordpress function to allow you to tell WordPress to do certain functions on specific points during execution. 

It takes two arguments:

- `wp_enqueue_script` : This is the hook where you want to add your script. WordPress offers a [selection of hooks](https://developer.wordpress.org/reference/hooks/) depending on your needs, but `wp_enqueue_script` is the preferred one to enqueue both Javascript and CSS, which we'll come to in a bit.
- `addScript`: this is just the name of the function we made with `wp_enqueue_script`.

## What about CSS

In case your source of panic isn't having to add a .css file instead of JavaScript, the process is almost exactly the same, the only difference is to replace `wp_enqueue_script` with `wp_enqueue_style`:

```
function addStyle() {
        wp_enqueue_style('css', get_template_directory_uri().'/css/css.css');
    }
    add_action('wp_head', 'addStyle');
```

In this example, just to demonstrate, I've changed the hook in `add_action` to `wp_head`, which would fire when the `<head>` tag is created. This would work. That typed, `wp_enqueue_script` is the preferred hook to enqueue CSS and JavaScript.

In this one, the `addScript` function is added on the `wp_enqueue_scripts` hook. This is specificially designed as the hook to use when enqueing both styles and scripts. The `addScript` function is basically the same as `wp_enqueue_style`, with a required unique name and the path to the document itself.


