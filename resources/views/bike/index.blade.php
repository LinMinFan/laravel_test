<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello index blade:))</h1>

    <button onclick="location.href='./bikes/create'">create button</button>
    <button onclick="location.href='<?=route('bikes.create');?>'">bikes.create</button>
    <button onclick="location.href='{{route('bikes.create')}}'">blade.bikes.create</button>
    <br>
    <br>
    <button onclick="location.href='<?=route('bikes.edit',['bike'=>1]);?>'">bikes.edit</button>
</body>
</html>