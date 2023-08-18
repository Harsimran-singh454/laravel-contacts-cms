<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Favicon.png">
    <title>Contacts App</title>
</head>
<body>
    <header>
        <h1>Contacts Manager</h1>
        <a href="/">Home</a>
        @if (session('LoggedAdmin') || session('LoggedUser'))
            <a href="{{route('logout')}}">Logout</a>
        @endif
    </header>
