<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  
  <script src="{{url('/')}}/js/categoria.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="formAdd" onsubmit=" return adicionarCategoria('{{route('categoria.store')}}')" action=""  >
            @csrf
            <label for="nomcat">Nome da categoria</label><br>
            <input type=""text name="nomcat" id="nomcat"/><br><br>
            <button type="submit">Adicionar</button>
        </form>
       
        <p id="p1" hidden="">Categoria adicionada com sucesso!</p>
        <p id="p2" hidden="">deu merda</p>
        <p id="p3" hidden="">cago o bagulho</p>
        <p id="p4" hidden="">campo n tem porra nenhuma,otario</p>
        
        
    </body>
</html>
