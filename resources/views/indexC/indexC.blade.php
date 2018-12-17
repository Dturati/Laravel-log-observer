<html>
    <head>
        <title>Observer</title>
    </head>
<body>
    <h1>Observer</h1>
    <form method="post" action="{{url('salvar')}}">
        {{csrf_field()}}
        <div>
            <label>Nome</label>
            <input name="nome" type="text">
            <label>Idade</label>
            <input name="idade" type="idade">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>