<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esercizio sul CRUD</title>
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Icon Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <x-navbar />

    {{ $slot }}

    {{-- My JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>