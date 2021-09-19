<?php
Route::get('calculator', function(){
    $res = \Devmauro\Calculator\Facade\Calcola::add(10)->subtract(2)->getResult();
	echo 'Hello from the calculator package risultato:'.$res;
})->name('calculator.facade');
//Route::get('calculator', function(){
//	echo 'Hello from the calculator package!';
//});

Route::get('calculator/add/{a}/{b}', 'Devmauro\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Devmauro\Calculator\CalculatorController@subtract');