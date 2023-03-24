/*Add the button*/
const btn=document.getElementById('aButton');
btn.addEventListener('click', getTable);
/*Fetch Request*/
function getTable(){
fetch("server/server.php", {
    method:'POST', 
    headers: {
        'Content-Type': 'application/json'
    }, 
    /*Send Data */
    body:JSON.stringify({
        lowNumber:1,highNumber:100
    })
})
/*Capture the Response */
.then(response=>response.text())
/*Use the Response to create the table */
.then(result => document.getElementById("aTable").innerHTML = result);
}