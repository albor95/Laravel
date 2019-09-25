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
        <h3>Editando a categoria: {{$categoria->nomcat}}</h3>
        <form id="formAdd" onsubmit=" return EditarCategoria('{{route('categoria.update',$categoria->codcat)}}')">
            @csrf
            @method('patch')
            <label for="nomcat">Nome da categoria</label><br>
            <input type="text" name="nomcat" id="nomcat" value="{{$categoria->nomcat}}"/><br><br>
            <button id="btnSalvar" type="submit">Editar</button>
        </form>
        
        <div id="status"></div>
        
       
    </body>
</html>

