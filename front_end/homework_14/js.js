fetch('http://pokeapi.co/api/v2/pokemon/?limit=6')
    .then(function (response) {
        console.log(response); // application/json; charset=utf-8
        return response.json();
    })
    .then(function (user) {
        console.log(user); // iliakan
        renderPokemonList(user)
    })
    .catch(alert);

function getPokemonInfo(url) {

    fetch(url).then(function (response) {
        return response.json();
    }).then(function (data) {
        console.log(data)
        var html = '<div class="card" style="width: 100%; float: left">';
        html += '<img class="card-img-top" src="' + data.sprites.front_default + '" alt="Card image cap">' +
            '<div class="card-body">' +
            '<h4 class="card-title" style="text-transform: capitalize">' + data.name + '</h4>' +
            '</div>' +
            '<div class="card-body">' +
            '<ul class="list-group list-group-flush">' +
            '    <li class="list-group-item">Height: '+data.height+'</li>' +
            '    <li class="list-group-item">Weight: '+data.weight+'</li>' +
            '    <li class="list-group-item">others</li>' +
            '  </ul>' +
            '<button class="btn btn-more card-link" ' +
            'onclick="getPokemonInfo("'+'http://pokeapi.co/api/v2/pokemon/' + data.id + '")" ' +
            'style="cursor: pointer">Show more info</button>';
        html += "</div></div>";
        document.getElementById('content').innerHTML = html;
    }).catch(alert);

}

function renderPokemonList(list) {

    var array = list.results;


    for (var i = 0; i < array.length; i++) {
        fetch(array[i].url).then(function (response) {
            return response.json();
        }).then(function (data) {
            console.log(data)
            var html = '<div class="card" style="width: 200px; float: left">';
            html += '<img class="card-img-top" src="' + data.sprites.front_default + '" alt="Card image cap">' +
                '<div class="card-body">' +
                '<h4 class="card-title" style="text-transform: capitalize">' + data.name + '</h4>' +
                '</div>' +
                '<div class="card-body">' +
                '<button class="btn btn-more card-link" onclick="getPokemonInfo(\''+"http://pokeapi.co/api/v2/pokemon/"+ data.id + '\')" style="cursor: pointer">Show more info</button>';
            html += "</div></div>";
            document.getElementById('content').innerHTML += html;
        }).catch(alert);
    }


}


// <div class="card" style="width: 20rem;">
//     <img class="card-img-top" src="" alt="Card image cap">
//     <div class="card-body">
//     <h4 class="card-title">Card title</h4>
// </div>
// <div class="card-body">
//     <a href="#" class="card-link">Show more info</a>
// </div>
// </div>