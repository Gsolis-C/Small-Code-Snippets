# Child Themes - Like Parent, Unlike Child

One of the best things about WordPress is that it's fantastically easy to take something that started life as a relatively simple blog [CMS](https://en.wikipedia.org/wiki/Content_management_system) and then edit it into anything you need. Sure, worst-case scenario the end result will be a bloaty mess that will need every speedup trick in the book. If you get a chance to see your loading animation is not quite aligned, you've seen it for too long. But yeah: download a theme from the internet, customize it to your hearts' content and your formerly blank canvas is something you can really be proud of.

That is, until the people who actually created the theme that you have been working on decides to drop an update, and it overrides everything you have been working on. This is where child themes come in.

## What is a Child Theme?

A child theme is a theme which, in itself, contains nothing but modifications for the parent theme. Think of it as a layer of abstraction between the theme and your mods. Theme developers get to update without a million complaints about breaking things. Users get to keep all their modifications in one place and keep them from being overwritten every time they update. Everyone wins.

## Okay, how do I do it?

First, you'll need a parent theme. If you haven't this next bit is going to be rather difficult. For this example, we're going to use the `twentytwentythree` theme, as it comes with any new WP install anyway.

To create a child theme, simply create a folder named after the parent theme with `-child` appended to it like so:
```
wp-content
└── themes
    ├── twentytwentythree
    └── twentytwentythree-child
```

This doesn't actually associate the parent and child themes, but it's the standard naming convention for these sorts of things. It makes it easier to remember which of the themes is your child theme and what it's the child of.

To associate the parent and child you need to create a `style.css` file. This is the only file that you absolutely need to add to your child and where you associate the your child theme with its parent. Much like when creating a normal theme, this is done through comments. At a minumum, the file needs to contain the following comment.

```
/*
    Theme Name: Twenty Twenty-Three-child
    Template: twentytwentythree
*/
```

Yes, WordPress actually reads the CSS comments in your files and uses it to get relevant data. In this case, the `Template` line is what associates the child theme with its parent. From then on, you add a `Theme Name` and anything else you need to edit the parent theme.

## If you actually need a blank canvas...

Now, if you just want to set up your own theme from scratch, there's a couple of themes that you can simply download or fork and make your own without the need for a child theme. The most common one mentioned is [Underscores](https://underscores.me/) (stylized as __s_), and it's related, slightly more updated partner [wdunderscores](https://github.com/WebDevStudios/wd_s) (_wd\_s_). The idea with these is that they don't have anything apart from the bare minimum to be a workable theme, saving you the trouble of having to make most of the code legwork yourself and letting you customize them to your heart's delight.