<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <h3>Editando o produto: {{$produto->nompro}}</h3>
        <form action="{{route('produtos.update',$produto->codpro)}}" method="post">
            @csrf
            @method('patch')
            
              <fieldset id="produto">
                        <legend>Identificação do Produto</legend>
                        <p><label for="nompro">Nome:</label>
                        <input type="text" name="nompro" id="nomcli" size="20" maxlength="30" placeholder="Nome" value="{{$produto->nompro}}"></p>

                         <label for="despro">Descrição:</label><br>
            <input type="text" name="despro" id="cpfcli" size="20" maxlength="30" placeholder="descrição" value="{{$produto->despro}}"/><br><br>
                        
                         <label for="vlrpro">Valor:</label><br>
                         <input type="text" name="vlrpro" id="telcli" size="20" maxlength="30" placeholder="Valor" value="{{$produto->vlrpro}}"/><br><br>
                         
                         <label for="codcat">Cod. da Categoria:</label><br>
                         <input type="text" name="codcat" id="telcli" size="20" maxlength="30" placeholder="Cod." value="{{$produto->codcat}}"/><br><br>
                    </fieldset>
            
            <button type="submit">Editar</button>
        </form>
       
    </body>
</html>

