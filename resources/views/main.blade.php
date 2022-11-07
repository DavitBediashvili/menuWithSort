<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($send as $main)
        <h1>{{$main[0]['type']}}</h1>
        @foreach($main as $part)
            <h3>{{$part['order']}} {{$part['name']}}</h3>
        @endforeach
        <form   method="POST">
        @csrf
        <button name="go" value="{{$part['type']}}">See Full List</button>
        </form>
    @endforeach

    <br><br>
    <form  action="/admin" method="post">
    @csrf
    <button name="admin" >Go to Admin</button>
    </form>

</body>
</html>