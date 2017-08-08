/**
 * Created by eugen on 23.07.2017.
 */
var str = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. " +
    "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, " +
    "when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

console.log("У нас есть текст:\n" + str);


// Разделил текст на массив предложений
var array = str.split(".");


var aa = [];
//Создал массив с массивом из слов для каждого предложения
for (var i = 0; i < array.length; i++) {
    aa.push(array[i].split(" "));
}

// Произвожу сортировку без учета запятых
for (var i = 0; i < aa.length; i++) {
    var tempAr = aa[i];
    for (var j = tempAr.length - 1; j >= 0; j--) {
        for (var jj = 0; jj < j; jj++) {
            if (tempAr.length > 1) {
                if (tempAr[jj].slice(-1) === ",") {
                    tempAr[jj] = tempAr[jj].substr(0, tempAr[jj].length - 1);
                    var t = tempAr[jj];
                    if (tempAr[jj].length < tempAr[jj + 1].length) {
                        var temp = tempAr[jj];
                        tempAr[jj] = tempAr[jj + 1];
                        tempAr[jj + 1] = (temp);
                    }
                    if (t === tempAr[jj]) {
                        tempAr[jj] += ",";
                    } else {
                        tempAr[jj + 1] += ",";
                    }

                } else {
                    if (tempAr[jj].length < tempAr[jj + 1].length) {
                        var temp = tempAr[jj];
                        tempAr[jj] = tempAr[jj + 1];
                        tempAr[jj + 1] = temp;
                    }
                }
            }
        }
    }
    if (tempAr[tempAr.length - 1] === "") tempAr.pop();
}


//Собираю новую строку
var newText = "";

for (var i = 0; i < aa.length; i++) {
    if (aa[i].length <= 1) continue;

    newText += aa[i].join(" ") + ". ";
}


console.log(newText);