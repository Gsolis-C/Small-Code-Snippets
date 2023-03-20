# JavaScript `fetch` request

## Say Godbye to XML

When the first asynchronous requests started showing up on the internet, XML was the way to structure whatever data you got in return. Thus, the object to do AJAX (itself an acronym of _Asynchronous Javascript and XML_) request is still called `XMLHttpRequest`. Mind you, that was ever such a long time ago. Javascript has a much better way to do this now.

The fetch API was introduced in 2015 and is now supported by every browser worth its salt. The idea is to have a more robust and simple to use version of `XMLHttpRequest`. How simple? Well, here's an example to help you get started.

First of, we'll need a client and a server. 

```
page.html
script.js
|
\_ server.php
```
The HTML file is just a simple template with nothing more than a title, a button to trigger the fetch request and a container to display the results. As whenever you want to edit anything in the HTML DOM, save yourself a lot of trouble by giving elements unique ID's.

We'll be fetching a server file that creates a simple 3x3 grid with a bunch of numbers in them. And just to make sure that it works, we'll make them random numbers so the set is different every time you click the button.

NOTE: It bears repeating, **You can't call a specific funtion within your PHP file from your fetch request.** If you need to call a specific function in a document send a unique value in the header and use it to execute the function you want server-side.

The code for the fetch request is shown below.

```
fetch("server/server.php", {method:'GET'})
.then(response=>response.text())
.then(result => document.getElementById("aTable").innerHTML = result);
```

Let's go through it:

`fetch("server/server.php", {method:'GET'})` - The fetch request itself. The fetch request takes two arguments:

 - Destination Path: This is the file that we want to fetch. In this case, we want to get the `server.php` file
 - Request Options: technichally speaking this is optional, but with all of the options it has it's probably a good idea to specify a couple of things in this object. to keep this as simple as possible, I've just added a single parameter, `method`, to specify the HTTP Method that I want to use. A full list of parameters can be found [here](https://developer.mozilla.org/en-US/docs/Web/API/fetch)

`fetch` returns a promise. Don't worry too much about what a promise is, it just means that you will use `then` to manage the returned content. In this case, `.then(response=>response.text())` takes the result of the fetch request and defines what to do with it. A `then` call creates another promise as a result, thus you can chain as many of them as you need.
