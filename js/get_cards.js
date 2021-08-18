fetch('/MockData/cards.json')
.then(function (response) {
    return response.json();
})
.then(function (data) {
    appendData(data);
})
.catch(function (err) {
    console.log('error: ' + err);
});
function appendData(data) {
    console.log(data);
var mainContainer = document.getElementById("cards");

for (var i = 0; i < data.length; i++) {
    var div = document.createElement("div");
    div.className=""
    div.innerHTML = 'title: ' + data[i].title + ' ' + data[i].description + ' ' + data[i].image;
    mainContainer.appendChild(div);
}
}