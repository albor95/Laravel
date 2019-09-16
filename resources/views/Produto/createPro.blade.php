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
        <form action="{{route('produtos.store')}}" method="post">
            @csrf
            
            <fieldset id="produto">
                        <legend>Identificação do Produto</legend>
                        <p><label for="nompro">Nome:</label>
                        <input type="text" name="nompro" id="nomcli" size="20" maxlength="30" placeholder="Nome"></p>

                         <label for="despro">Descrição:</label><br>
            <input type="text" name="despro" id="cpfcli" size="20" maxlength="30" placeholder="descrição"/><br><br>
                        
                         <label for="vlrpro">Valor:</label><br>
                         <input type="text" name="vlrpro" id="telcli" size="20" maxlength="30" placeholder="Valor"/><br><br>
                         
                         <label for="codcat">Cod. da Categoria:</label><br>
                         <input type="text" name="codcat" id="telcli" size="20" maxlength="30" placeholder="Cod."/><br><br>
                    </fieldset>
            
            <button type="submit">Adicionar</button>
        </form>
       
    </body>
</html>
