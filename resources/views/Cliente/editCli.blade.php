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
        <h3>Editando o cliente: {{$cliente->nomcli}}</h3>
        <form action="{{route('cliente.update',$cliente->codcli)}}" method="post">
            @csrf
            @method('patch')
            
              <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="nomcli">Nome:</label>
                        <input type="text" name="nomcli" id="nomcli" size="20" maxlength="30" placeholder="Nome Completo" value="{{$cliente->nomcli}}"></p>

                         <label for="cpfcli">CPF:</label><br>
            <input type="text" name="cpfcli" id="cpfcli" size="20" maxlength="30" placeholder="CPF" value="{{$cliente->cpfcli}}"/><br><br>
                        
                         <label for="telcli">Telefone:</label><br>
                         <input type="text" name="telcli" id="telcli" size="20" maxlength="30" placeholder="Telefone" value="{{$cliente->telcli}}"/><br><br>
                    </fieldset>
            
            
            <fieldset id="endereco">
                        <legend>Endereço do Usuário</legend>

                        <p><label for="endcli">Endereço:</label><input type="text" name="endcli" id="endcli" size="13" maxlength="80" placeholder="Rua,av,travesia..." value="{{$cliente->endcli}}"></p>

                        <p><label>Número:<input type="number" name="numcli" id="numcli" min="0" max="99999" value="{{$cliente->numcli}}"></label></p>

                        <p><label for="ufcli">Estado:</label><select name="ufcli" id="ufcli" value="{{$cliente->ufcli}}">

                            <optgroup label="Região Sudeste">
                                <option >Rio de Janeiro</option>
                                <option>São Paulo</option>
                                <option>Minas Gerais</option>
                            </optgroup>

                            <optgroup label="Região Nordeste">                      
                                <option>Paraná</option>
                                <option>Santa Catarina</option>
                            </select></p>
                            </optgroup>

                            <p><label for="cidcli">Cidade: <input type="text" name="cidcli" id="cidcli" maxlength="40" size="20" placeholder="Sua Cidade" value="{{$cliente->cidcli}}"></label></p>
                       <label for="baicli">Bairro</label><br>
            <input type="text" name="baicli" id="baicli" maxlength="40" size="20" placeholder="Seu Bairro" value="{{$cliente->baicli}}"/><br><br>

                    </fieldset>
           
            <button type="submit">Editar</button>
        </form>
       
    </body>
</html>

