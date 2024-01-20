

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
      
        <br><br>
      
        <!-- Photo Grid -->
        <div class="w3-row">
            <img class="im" src="{{asset('images/IMG_20240108_165237.jpg')}}" alt="Me" style="width:100%">
            <div class="text">
<body>
    <h1>Modification produit3</h1>
   ******************************************************
   
    <form method="post" action="{{route('product3.update', ['product3' => $product3])}}">
        @csrf 
        @method('put')
        <div>
            <label>Name</label>
            <input class="form-control"type="text" name="name" placeholder="Name" value="{{$product3->name}}" />
        </div>
        <div>
            <label>Qty</label>
            <input class="form-control" type="text" name="qty" placeholder="Qty" value="{{$product3->qty}}" />
        </div>
        <div>
            <label>Price</label>
            <input class="form-control"type="text" name="price" placeholder="Price" value="{{$product3->price}}" />
        </div>
        <div>
            <label>Description</label>
            <input class="form-control"type="text" name="description" placeholder="Description" value="{{$product3->description}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
    
<br>
<a href="/dashboard">Home</a>
</body>
</html>
@endsection