<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('crud-asset') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('crud-asset') }}/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('all.student')}}" class="nav-link">All Student</a></li>
            <li><a href="{{route('category')}}" class="nav-link">Create Category</a></li>
            <li><a href="{{route('all.category')}}" class="nav-link">All Category</a></li>
            <li><a href="{{route('brand')}}" class="nav-link">Brand</a></li>
            <li><a href="{{route('all.brand')}}" class="nav-link">All Brand</a></li>
            <li><a href="{{route('products.index')}}" class="nav-link">Product</a></li>

        </ul>
    </div>
</nav>
