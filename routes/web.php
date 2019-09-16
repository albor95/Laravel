<?php


route::get('/home', 'IndexController@index');
route::get('/contato', 'ContatoController@index');
route::get('/produto', 'produtoController@produto');
route::get('/Institucional', 'InstitucionalController@Institucional');
route::resource('categoria','CategoriaController');
route::resource('cliente','ClienteController');
route::resource('produtos','ProdutoFormController');
