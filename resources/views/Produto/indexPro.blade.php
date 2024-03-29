<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function(){
            @if (session() -> get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            }
        </script>

    </head>
    <body>

        <a href="{{route('produtos.create')}}">Adicionar Produto</a>

        <table style="width: 50%;">
            <thead>
                <tr>
                    <td>Cod.</td>
                    <td>Nome.</td>
                    <td>Descrição.</td>
                    <td>Valor.</td>
                    <td>Cod. da Categoria</td>
                    
                    <td>Ação.</td>
                </tr> 
            </thead>

            <tbody>
                @foreach($produto as $c)
                <tr>
                    <td>{{$c->codpro}}</td>
                    <td>{{$c->nompro}}</td>
                    <td>{{$c->despro}}</td>
                    <td>{{$c->vlrpro}}</td>
                    <td>{{$c->codcat}}</td>
                    
                    <td>

                        <button onclick="location.href ='{{route('produtos.edit', $c->codpro)}}'" type="button">Editar</button>

                        <form action="{{route('produtos.destroy', $c->codpro)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>

                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </body>
</html>
