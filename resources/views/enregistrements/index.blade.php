@extends('layouts.layout') 

@section('title', 'Accueil')

@section('content')
<!--
<H1>Hello Every BODY</H1>
<a href="/login">Login</a>
<br>
<a href="/registration">register</a>
-->
<nav class="navbar navbar-light bg-dark">
    
<div class="container-fluid">
      <a class="navbar-brand "> <h1>GSPD</h1></a>
      <form class="d-flex">
        <input class="form-control me-2 bg-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form>
      <form class="d-flex">
        <a href="/" class="btn btn-secondary">Retour</a>
      </form>
    
  </nav>


  <div class="container">

  

     <center><h2>Produit1</h2></center>

    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product1s as $product1 )
        <tr>
            <td>{{$product1->name}}</td>
            <td>{{$product1->qty}}</td>
            <td>{{$product1->price}}</td>
            <td>{{$product1->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>



    <center><h2>Produit2</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
            <th scope="col">Name</th>
            <th scope="col">Qty</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($product2s as $product2 )
          <tr>
              <td>{{$product2->name}}</td>
              <td>{{$product2->qty}}</td>
              <td>{{$product2->price}}</td>
              <td>{{$product2->description}}</td>
              
          </tr>
      @endforeach
        </tbody>
      </table>

      <center><h2>Produit3</h2></center>
      <table class="table table-bordered">
        <thead>
          <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product3s as $product3 )
        <tr>
            <td>{{$product3->name}}</td>
            <td>{{$product3->qty}}</td>
            <td>{{$product3->price}}</td>
            <td>{{$product3->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>

    <center><h2>Produit4</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
        <th scope="col">Name</th>
        <th scope="col">Qty</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($product4s as $product4 )
      <tr>
          <td>{{$product4->name}}</td>
          <td>{{$product4->qty}}</td>
          <td>{{$product4->price}}</td>
          <td>{{$product4->description}}</td>
          
      </tr>
  @endforeach
    </tbody>
  </table>

  <center><h2>Produit5</h2></center>
  <table class="table table-bordered">
    <thead>
      <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product5s as $product5 )
        <tr>
            <td>{{$product5->name}}</td>
            <td>{{$product5->qty}}</td>
            <td>{{$product5->price}}</td>
            <td>{{$product5->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>

    <center><h2>Produit6</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product6s as $product6 )
        <tr>
            <td>{{$product6->name}}</td>
            <td>{{$product6->qty}}</td>
            <td>{{$product6->price}}</td>
            <td>{{$product6->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>  

    <center><h2>Produit7</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product7s as $product7 )
        <tr>
            <td>{{$product7->name}}</td>
            <td>{{$product7->qty}}</td>
            <td>{{$product7->price}}</td>
            <td>{{$product7->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>

    <center><h2>Produit8</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product8s as $product8 )
        <tr>
            <td>{{$product8->name}}</td>
            <td>{{$product8->qty}}</td>
            <td>{{$product8->price}}</td>
            <td>{{$product8->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>
    <center><h2>Produit9</h2></center>
    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product9s as $product9 )
        <tr>
            <td>{{$product9->name}}</td>
            <td>{{$product9->qty}}</td>
            <td>{{$product9->price}}</td>
            <td>{{$product9->description}}</td>
            
        </tr>
    @endforeach
      </tbody>
    </table>

    </div>
  </div>

<center>
  <a href="/" type="button" class="btn btn-outline-secondary">Retour</a>
</center>
 

  </div>

  @endsection
  