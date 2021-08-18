// Fetches the local JSON file 
fetch('/MockData/cards.json')
.then(function (response) {
    // Returns the response data in json format
    return response.json();
})
.then(function (data) {
    // Calls the appendData Function below
    appendData(data);
})
// Catches any errors fetching the JSON data
.catch(function (err) {
    console.log('error: ' + err);
});

// Takes the data fetched as an argument
// Loops through by length destructuring elements off the array
// Creates a div per element and then appends the same element with each element
function appendData(data) {
    //console.log(data);
var mainContainer = document.getElementById("cards");

for (var i = 0; i < data.length; i++) {
    var div = document.createElement("div");
    div.className=""
    div.innerHTML = 'title: ' + data[i].title + ' ' + data[i].description + ' ' + data[i].image;
    mainContainer.appendChild(div);
}
}