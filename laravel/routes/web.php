<?php

Route::any('/busca', 'Painel\AlunoController@busca');
Route::resource('/', 'Painel\AlunoController');


