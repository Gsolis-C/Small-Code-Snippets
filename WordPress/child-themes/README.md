# Child Themes - Like Parent, Unlike Child

One of the best things about WordPress is that it's fantastically easy to convert something which started life as a relatively simple blog CMS, and you can then edit it into essentially anything we need. Sure, in a worst-case scenario the end result will be a bloaty mess that will need every speedup trick in the book to function at anything resembling acceptable speed. You may want to consider how you're doing the things you are at that point. But yeah: download a theme from the internet, customize it to your hearts' content and your formerly blank canvas is something you can really be proud of.

That is, until the people who actually created the theme that you have been working on decides to drop an update, and it overrides everything you have been working on. This is where child themes come in.

## What is a Child Theme?

A child theme is a theme which, in itself, contains nothing but modifications for the parent theme. Think of it as a layer of abstraction between someone else's theme and your modifications to it. They get to update their theme without a million complaints about breaking things, you get to keep all of your modifications in one place and not having them overwritten every time the developer needs to patch something. Everyone wins.

## Okay, how do I do it?

It's quite simple actually. I expect that you've already selected a parent theme. If you haven't this next bit is going to be rather difficult. For this example, we're going to use the `twentytwentythree` theme, as it's the present year and it comes with any new WP install anyway.

To create a child theme, simply create a folder named after the parent theme with `-child` appended to it like so:
```
wp-content
└── themes
    ├── twentytwentythree
    └── twentytwentythree-child
```
## If you actually need a blank canvas...

Now, if you just want to set up your own theme from scratch, there's a couple of themes that you can simply download or fork and make your own without the need for a child theme 