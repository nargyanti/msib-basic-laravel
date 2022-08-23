@extends('layouts.app')
@section('content')
<header class="text-center text-white bg-primary bg-opacity-75 p-5">
    <div class="container">
        <h1 class="mb-3">Nabilah Argyanti A.</h1>        
        <img class="d-block mx-auto mb-3 border rounded-circle" src="{{ asset('assets/img/nabilah-argyanti.jpg') }}" width="200px" height="200px">
        <p class="lead text-center">I am a student of State Polytechnic of Malang in Informatics Engineering study program. I am very passionate about IT and programming. I like to learn something new, especially about web development.<br></p>
    </div>
</header>

<div class="container py-4">
    <div class="row mb-5">
        <div class="text-center mx-auto">
            <h2>Technical Skills</h2>            
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-center d-flex flex-column align-items-center">
                <i class="fab fa-2xl fa-php text-primary text-opacity-75"></i>
                <h4 class="py-4">PHP</h4>                
            </div>
        </div>
        <div class="col">
            <div class="text-center d-flex flex-column align-items-center">
                <i class="fab fa-2xl fa-laravel text-primary text-opacity-75"></i>
                <h4 class="py-4">Laravel</h4>                
            </div>
        </div>
        <div class="col">
            <div class="text-center d-flex flex-column align-items-center">
                <i class="fab fa-2xl fa-bootstrap text-primary text-opacity-75"></i>
                <h4 class="py-4">Bootstrap</h4>                
            </div>
        </div>
    </div>
</div>    
@endsection