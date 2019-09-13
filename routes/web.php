<?php


route::get('/home', 'IndexController@index');
route::get('/contato', 'ContatoController@index');
route::get('/produto', 'produtoController@produto');
route::get('/Institucional', 'InstitucionalController@Institucional');
route::get('/ClienteForm', 'ClienteFormController@ClienteForm');
route::get('/CategoriaForm', 'CategoriaFormController@CategoriaForm');
route::get('/ProdutoForm', 'ProdutoFormController@ProdutoForm');
route::resource('categoria','CategoriaController');
route::resource('cliente','ClienteController');
route::resource('produto','ClienteControlle');
