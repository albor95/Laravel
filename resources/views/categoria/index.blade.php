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
        
        <script>
        function eliminarCategoria(idForm,destino){
            confirma=confirm("keh memu faze sapoha ai?");
            
         dadosForm=$('#'+idForm).serialize();
         if(confirma){
         $.ajax({
             method:'post',
             url:destino,
             data: dadosForm,
             dataType:'html',
             success:function (data){
                 //Aahhhhhh
                 if(data=='true'){
                     //$('#linha'+idForm).remove();
                     $('#linha'+idForm).fadeOut(1000);
                 }else {
                     alert('deu coco');
                 }
                
             },
             error: function(argument){
                 //fdhgfdshfsdfjkdkfskdj
                 alert('cago o bagulho');
             }

         }); 
        }
         return false;
        }
        var situacao=false;
        function mostrarEsconderTitulo(){
                $('#titulo').toggle(400);
        }
        </script>
        
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a>
        <br>
        <button id="btn"onclick="mostrarEsconderTitulo()">Mostrar/Esconder titulo</button>
        <br/>
        <h2 id="titulo" hidden>Listagem do bagulho</h2>
        <table style="width: 50%;">
            <thead>
                <tr>
                    <td>Cod.</td>
                    <td>Nome.</td>
                    <td>Ação.</td>
                </tr> 
            </thead>
            
            <tbody>
                @foreach($categoria as $c)
                <tr id="linhadel{{$c->codcat}}">
                    <td>{{$c->codcat}}</td>
                      <td>{{$c->nomcat}}</td>
                        <td>
                            
                            <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                        
                            <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        
        <script>
        window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }});
        </script>
        
    </body>
</html>
