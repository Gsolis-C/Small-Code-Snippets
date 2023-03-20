/*Add the button*/
const btn=document.getElementById('aButton');
btn.addEventListener('click', getTable);
/*Fetch Requests*/
function getTable(){
fetch("server/server.php", {method:'GET'})
.then(response=>response.text())
.then(result => document.getElementById("aTable").innerHTML = result);
}