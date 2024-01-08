@extends('layouts.layout') 

@section('title', 'Accueil')

@section('content')
<!--
<H1>Hello Every BODY</H1>
<a href="/login">Login</a>
<br>
<a href="/registration">register</a>

  <img class="w3-image" src="{{asset('images/panier1.PNG')}}" alt="Me">
    -->
    <style>
      body {font-family: "Raleway", Arial, sans-serif}
      .w3-row img {margin-bottom: -8px}
      .im{
        filter: blur(5px)
      }
      .text{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: rgb(24, 39, 41);
        font-size: 30px;
      
      }
      </style>
      <body>
        <center>
      <!-- !PAGE CONTENT! -->
      <div class="w3-content" style="max-width:1500px">
      
        <!-- Header -->
        <header class="w3-container w3-xlarge w3-padding-24">
        <br><br>
          
        </header>
      
        <!-- Photo Grid -->
        <div class="w3-row">
            <img class="im" src="{{asset('images/panier1.PNG')}}" alt="Me" style="width:100%">
            <div class="text">Optimisez votre espace avec nos solution de stockage innovantes <br>pour organiser votre vie quotidienne
              <br>
              <div class="d-grid gap-2 col-6 mx-auto">
                <br><br>
                <a href="/enregistrements" class="btn btn-success">Visitez</a>
                <br><br>
                <a href="/login" class="btn btn-primary">Connectez</a>
               
            </div>
        </div>
        
      <!-- End Page Content -->
      </div>
      
    </center>
      </body>
      
      
    

@endsection