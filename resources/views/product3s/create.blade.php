
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
            <div class="text">


                <h1>Product 3</h1>
                ***********************************************
<form method="post" action="{{route('product3.store')}}">
    @csrf 
    @method('post')
        <div>
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Qty</label>
            <input class="form-control"type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <label>Price</label>
            <input class="form-control" type="text" name="price" placeholder="Price" />
        </div>
        <div>
            <label>Description</label>
            <input class="form-control" type="text" name="description" placeholder="Description" />
        </div>
        <br>
        <div>
            <input type="submit" value="Save a New Product3" />
        </div>
    </form>
    <hr>
    <a href="/product3">lister les produits</a>
    
<br>
<a href="/dashboard">Home</a>
@endsection