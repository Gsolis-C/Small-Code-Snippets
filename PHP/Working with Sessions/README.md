# Sessions - A Solution for the rest of us

Look, sometimes dealing with AJAX is a pain in the neck; or you actually want a page refresh, or you don't want to deal with using jQuery. For these cases, or to guarantee at least some level of functionality in case your user decides that they don't like JavaScript very much, you can use PHP sessions. 

It's slightly more difficult to keep track of things, but quite useful in a pinch.

## Creating a session

Doing things with sessions is easy. First, naturally, you will have to create a session. And a safe way to do so is with the following code.

```
if(!session_id())
  {
    session_start();
  }
```
Oh yeah, sure, you could just do `session_start`, but that would mean that when you open any other page where you also just wrote `session-start`, it will destroy your session and replace it with a new one. This would rather defeat the purpose of using a session in the first place. Instead, you're checking if there's a session there already. And if it isn't, you start it and the associated session variable.

## That's nice, what is a session variable and what do I do with it?

In this case, the session variable is an array called `$_SESSION`. Yes, write it in caps. Yes, keep the underscore. You can store anything you need within `$_SESSION` and it will be available across the site. A session variable has a unique ID that's both stored in the server and saved on a cookie on the user's device. So long as you don't close the tab or leave the site, that session will remain. Servers do clear PHP sessions after some period of inactivity. Generally 30 minutes.

While working with `$_SESSION`, you may forget what you have in it or just want to check the status of the contents stored in it. You can do that as you would on any other array.

```
var_dump($_SESSION);
```

## That's great, but I'm done with this session now. 

It's bad form to leave things just lying about when you're done with them and counting that someone else, like the server, will deal with it for you. When you're done with the session, all you need to do is add the following line and the `$_SESSION` variable and everything in it will be removed

```
session_destroy();
```

Needless to say, make sure that you've done everything that you wanted to do with the session variable before using this, otherwise you get to do that fun kind of debugging where everything is working like it's supposed to.