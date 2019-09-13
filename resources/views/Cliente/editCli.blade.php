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
            
             <label for="nomcli">Nome do cliente</label><br>
            <input type="text" name="nomcli" id="nomcli"  value="{{$cliente->nomcli}}"/><br><br>
            
             <label for="cpfcli">CPF do cliente</label><br>
            <input type="text" name="cpfcli" id="cpfcli"  value="{{$cliente->cpfcli}}"/><br><br>
            
            <label for="endcli">Endereço do cliente</label><br>
            <input type="text" name="endcli" id="endcli"  value="{{$cliente->endcli}}"/><br><br>
            
            <label for="numcli">Número do cliente</label><br>
            <input type="text" name="numcli" id="numcli"  value="{{$cliente->numcli}}"/><br><br>
            
            <label for="baicli">Bairro do cliente</label><br>
            <input type="text" name="baicli" id="baicli"  value="{{$cliente->baicli}}"/><br><br>
            
            <label for="ufcli">uf do cliente</label><br>
            <input type="text" name="ufcli" id="ufcli"  value="{{$cliente->ufcli}}"/><br><br>
            
            <label for="telcli">Telefone do cliente</label><br>
            <input type="text" name="telcli" id="telcli"  value="{{$cliente->telcli}}"/><br><br>
            
            
            <button type="submit">Editar</button>
        </form>
       
    </body>
</html>

