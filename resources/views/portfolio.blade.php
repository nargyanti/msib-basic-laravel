@extends('layouts.app', ['title' => config('app.name') . 'Portfolio'])
@section('content')
<div class="container my-3">
    <div class="card-group">
        <div class="card m-3 rounded shadow shadow-sm">
            <img class="card-img-top w-100 border border-secondary" src={{ asset('assets/img/anti-mandec.png') }}>
            <div class="card-body">
                <h4 class="card-title text-center">ANTI ManDec</h4>
                <p class="px-3" style="text-align:justify">ANTI ManDec (Aplikasi Informasi Manifest dan Gendec) is an application used by TPI Ngurah Rai airline to report the arrival and departure of its transportation means by uploading flight data (Manifest and Gendec) without having to come to the TPI Division so that the obligations are carried out on time.</p>
            </div>
        </div>
        <div class="card m-3 rounded shadow shadow-sm">
            <img class="card-img-top w-100 border border-secondary" src={{ asset('assets/img/mentoring-qlp.jpg') }}>
            <div class="card-body">
                <h4 class="card-title text-center">Mentoring QLP</h4>
                <p class="px-3" style="text-align:justify">Mentoring QLP is a website-based project for the Quarter Life Projects platform that makes it easy for users to book mentoring sessions for mentees, where mentees can choose a mentor that fits the topic to be discussed in the mentoring session.</p>
            </div>
        </div>
        <div class="card m-3 rounded shadow shadow-sm">
            <img class="card-img-top w-100 border border-secondary" src={{ asset('assets/img/papa-catering.png') }}>
            <div class="card-body">
                <h4 class="card-title text-center">Pap'a Catering</h4>
                <p class="px-3" style="text-align:justify">Pap'a Catering website is a website that is used to manage transactions for catering orders for Pap'a Catering located at the Panti Asuhan Putri Aisyiyah Malang. Users can manage orders, products, print order notes, and manage sales expenses and income. The Pap'a Catering website was created as a society dedication for Panti Asuhan Aisyiyah Putri Malang.</p>
            </div>
        </div>        
    </div>
</div>
@endsection