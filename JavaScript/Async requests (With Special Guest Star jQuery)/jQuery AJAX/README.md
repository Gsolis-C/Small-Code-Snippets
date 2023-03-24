# JQuery AJAX

You can also do an asynchronous request with jQuery If you don't want to use `fetch` or your project already has the library built into it, here's how to do it.

## What is jQuery

jQuery is a Javascript framework. Sometime in 2005, John Resig, Javascript programmer extraordinaire, started to think about a way to use CSS selectors to [bind Javascript functions to specific HTML objects](https://johnresig.com/blog/selectors-in-javascript/). After working some more on it he officially introduced it on BarCamp NYC on January 14th, 2006.

By now, this sub-300kb library is used on at least 77% of websites, all the while allowing front-end developers to use javascript more efficiently. This AJAX query may look a bit complex, but it's certainly easier to understand and use than `xmlhttprequest`. 

## How to do an AJAX Request

The most basic AJAX query looks a little bit like this:

```
let yourData = "Some Data I want to send";
$.ajax({
        type: "POST",
        url: "",
        headers: {
          "Content-Type": "application/json"
        },
        data:yourData,
        dataType: "JSON",
        success: function(){ window.location.href='';}
      });
```

Now let's go line by line and see what everything does.

- `$.ajax`    
    - `type`: This is the [HTTP Method](https://www.w3schools.com/tags/ref_httpmethods.asp) that you will use to send the request. The most common are GET and POST. 
    - `URL`: This is where you'll be sending the data in this request. think of it as the `href=""` for this request.
    - `headers`: Yup, we're getting brackets inside brackets for this one
        - `Content-Type`
    - `data`: This is where you put the data you want to send. Preferably you'll have done all of the client-side work before sending it here as a single variable.
    - `dataType`: This is where you specify the type of data you're sending. Most of the time it will be in JSON format.
    - `success`: If you've structured your request correctly, it will have to do something with it. This is where you define this. In this case, we've placed the entire function in there because it's simple. Anything more complex and perhaps you should do a function call to somewhere else instead.

## Can I call a specific function from a PHP file using this instead of `fetch`?

Nope. It has the same limitation as `fetch`. Send something in the request that you can use server-side to pick your function.

## Can you do the `fetch` example but Using jQuery?

Of course you can. if you haven't seen the `fetch` example, we created a 3x3 table which would be filled with random numbers between an upper and lower limit that we selected.

doing that request in jQuery looks a little bit like this:

``` 
$.ajax({
  type: "POST",
  url: "server/server.php",
  headers: {
      },
  data:{lowNumber:1,highNumber:100},
  success: function(result){
    $("#aTable").html(result);}
});
```
You can see that you can mix and match with the items of the AJAX request. This should be enough to get you started with them or to use as a base in case you need results right now.