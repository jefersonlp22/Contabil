<?php
Route::get('/', function () {
    return view('torres/welcome');
});
Route::get('/home', function () {
    return view('torres/welcome');
});
Route::get('/partners', function(){
	return view('torres/parceiros');
});
Route::get('/whoWeAre', function(){
	return view('torres/quemSomos');
});
Route::get('/services', function(){
	return view('torres/services');
});
Route::get('/pageServices', function(){
	return view('torres/pageServices');
});
	Route::get('/proposalCreate', function(){
		return view('proposal/proposalCreate');
});
		Route::get('/interessedCreate', function(){
		return view('interessed/create');
});

	Route::get('/slids', function(){
		return view('/slids');
	});
	Route::get('/proposta', function(){
		return view('interessed/proposta');
	});
	Route::get('/obrigado', function(){
		return view('home');
	});
Route::controller('user/', 'UserController' );
Route::resource('user', 'UserController' );
Route::resource('interessed', 'InteressedController');
Route::resource('proposal', 'ProposalController');
Route::controller('/interessed', 'InteressedController');
Route::controller('/proposal', 'ProposalController');

