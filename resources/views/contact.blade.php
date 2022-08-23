@extends('layouts.app')
@section('content')
<div class="container my-3">    
    <h2>Contact Me</h2>
    <div class="row justify-content-center">
        <div class="card col-6 p-3 m-2" style="width:25rem">
            <div class="d-flex align-items-center ps-4">
                <i class="fab fa-whatsapp fa-2xl text-primary text-opacity-75"></i>
                <div class="ms-3">
                    <h6>Phone / WhatsApp</h6>
                    <a href="wa.me/6282257229963">+62 822-5722-9963</a>
                </div>
            </div>            
        </div>        
        <div class="card col-6 p-3 m-2" style="width:25rem">
            <div class="d-flex align-items-center ps-4">
                <i class="far fa-envelope fa-2xl text-primary text-opacity-75"></i>
                <div class="ms-3">
                    <h6>Email</h6>
                    <a href="mailto:nargyanti@gmail.com">nargyanti@gmail.com</a>
                </div>
            </div>                
        </div>   
        <div class="card col-6 p-3 m-2" style="width:25rem">
            <div class="d-flex align-items-center ps-4">
                <i class="fab fa-linkedin fa-2xl text-primary text-opacity-75"></i>
                <div class="ms-3">
                    <h6>LinkedIn</h6>
                    <a href="https://www.linkedin.com/in/nargyanti/">Nabilah Argyanti Ardyningrum</a>
                </div>
            </div>                
        </div>                
        <div class="card col-6 p-3 m-2" style="width:25rem">
            <div class="d-flex align-items-center ps-4">
                <i class="fab fa-github fa-2xl text-primary text-opacity-75"></i>
                <div class="ms-3">
                    <h6>GitHub</h6>
                    <a href="https://github.com/nargyanti">Nabilah Argyanti (nargyanti)</a>
                </div>
            </div>                
        </div>        
    </div>
</div>
@endsection