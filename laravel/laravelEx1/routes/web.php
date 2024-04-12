<?php

use Illuminate\Support\Facades\Route;
Route::get('/{str}',function($str){
    return "Je suis la page $str.";
});

Route::get('/toto',function(){
    return "Je suis la page super page de toto !";
});
Route::get('/toto', function () {
    return view('welcome');
});

Route::view('/', 'welcome');


Route::get('/salutation', function () {
    return "Salut ! Bienvenue sur ce site !";
});


Route::get('article/{numero}', function($numero)
{
    return "Le numéro de l'article est $numero.";
})->whereNumber('numero');


Route::get('article/{numero}/{allee}', function($numero, $allee)
{
    return "Le numéro de l'article est $numero et il est rangé dans l'allée n°$allee.";
})->whereNumber('numero')->whereAlphaNumeric('allee');


Route::get('/json', function(){
    return ["foo"=>"bar"];
});

Route::get('/google',function(){
    return redirect('https://www.google.com');
});



/* Route::get('article/{numero}', function($numero)
{
    return "Le numéro de l'article est $numero";
});


Route::get('article/{numero}/{allee}', function($numero, $allee)
{
    return "Le numéro de l'article est $numero et il est rangé dans l'allée n°$allee.";
});*/
