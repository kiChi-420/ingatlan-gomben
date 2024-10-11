<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section('navbar')
@include('navbar')
@show
    <!-- http://127.0.0.1:8000/request-test?title=<script>alert("Boom!");</script>
    Nem szabad ezt a kettő $title kiírást használni, mivel így egy támadó könnyen lefuttathat JS kódot
    <?= $title; ?>
    {!! $title !!} -->

    <h1>{{ $title }}</h1>
</body>
</html>