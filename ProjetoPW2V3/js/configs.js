var btnContato = document.querySelector("#btnContato");
var btnFilmes = document.querySelector("#btnFilmes");

var contato_js = document.querySelector("#contato_js");
var filmes_js = document.querySelector("#filmes_js");

btnContato.addEventListener('click', function () {

    if (contato_js.style.display === 'block') {
        contato_js.style.display = 'none';
    } else {
        contato_js.style.display = 'block';
        filmes_js.style.display = 'none';
    }
});

btnFilmes.addEventListener('click', function () {

    if (filmes_js.style.display === 'block') {
        filmes_js.style.display = 'none';
    } else {
        filmes_js.style.display = 'block';
        contato_js.style.display = 'none';
    }
});