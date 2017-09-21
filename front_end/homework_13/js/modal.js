
function showInfo() {
    var modal = document.getElementById("modal");
    modal.style.display = "block";
    var arrToPrint = getChildTag(document.body);
    var contentM = document.getElementsByClassName("contentM")[0];

    var close = document.getElementById('close');
    for(var i = 0; arrToPrint.length > i; i++){
        contentM.innerHTML += "<p>"+arrToPrint[i][0]+" - "+arrToPrint[i][1]+"</p>";
    }

    close.onclick = function () {
        modal.style.display = "none";
    };

}



function getChildTag(element) {

    var elements = element.getElementsByTagName("*");
    var collection = {};

    for (var key in elements) {
        if (elements[key].tagName in collection)
            collection[elements[key].tagName]++;
        else
            collection[elements[key].tagName] = 1;
    }

    var sorted = [];

    for (var key in collection) {
        sorted.push([key, collection[key]]);
    }

    sorted.sort(function (a, b) {
        return b[1] - a[1];
    });

    return sorted;
}