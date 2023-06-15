<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
@extends('layouts.app')
@section('content')
<div class="container-sm my-5">
<form action="{{ route('employees.update', ['employee' =>
$employee->id]) }}" method="POST">
@csrf
@method('put')
<div class="row justify-content-center">
{{-- Dan Seterusnya --}}
</div>
</form>
</div>
@endsection
</body>
</html>