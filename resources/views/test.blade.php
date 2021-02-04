<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>{{$name}}</h1> --}}
    {{-- http://127.0.0.1:8002/?name=<script>alert("hello");</script> --}}
    <h1>{{!! $name !!}}</h1>
</body>
</html>