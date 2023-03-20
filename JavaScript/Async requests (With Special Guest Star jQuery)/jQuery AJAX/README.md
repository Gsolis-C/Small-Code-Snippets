# AJAX Queries (With Special Guest Star jQuery)

It used to be simple...and a bit wasteful. You sent a server request and the server would get that page back to you. Good if you're using your website as a glorified filing cabinet. Not so good as websites became more interactive and having to resend an entire page for every minor change was causing quite a lot of bandwith waste (for everyone).

If only there was a way to only update the bit of the page you need?

## Enter AJAX

To make a long story...medium-length, AJAX allows you to create com Asynchronous Jacascript and XML. No, don't worry, you won't actually need to use XML, but when Asynchronous request started becoming a thing XML was the language of choice for structued data transfers. There's a chance 

## What is jQuery

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

explanation

- `$.ajax`    
    - `type`: This is the [HTTP Method](https://www.w3schools.com/tags/ref_httpmethods.asp) that you will use to send the request. The most common are GET and POST. 
    - `URL`: This is where you'll be sending the data in this request. think of it as the `href=""` for this request.
    - `headers`: Yup, we're getting brackets inside brackets for this one
        - `Content-Type`
    - `data`: This is where you put the data you want to send. Preferably you'll have done all of the client-side work before sending it here as a single variable.
    - `dataType`: This is where you specify the type of data you're sending. Most of the time it will be in JSON format.
    - `success`: If you've structured your request correctly, it will have to do something with it. This is where you define this. In this case, we've placed the entire function in there because it's simple. Anything more complex and perhaps you should do a function call to somewhere else instead.

## What if I want to call a specific function from the PHP file?

You can't do that, not on the AJAX request at least. you're requesting the entire document from the server, not just a 