<html>
    <body>
        <h1>Uebermittelten Daten</h1>
        @foreach ($data as $key => $param)
            <div>{{$key}} : {{$param}}</div>
        @endforeach
    </body>
</html>
