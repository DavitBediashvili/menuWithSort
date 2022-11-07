<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$full_list[0]['type']}}</h1>
    @foreach($full_list as $each)
        <h3>{{$each['order']}} {{$each['name']}}</h3>
    @endforeach
</body>
</html>