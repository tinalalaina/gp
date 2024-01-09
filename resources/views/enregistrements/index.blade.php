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
  <a href="/dashboard" class="btn btn-secondary"> <h1>GSPD</h1></a>
  <form action="{{ route('enregistrements.index') }}" method="GET">
    <label for="searchNom">Recherche:</label>
    <input type="text" name="searchNom" value="{{ request('searchNom') }}" placeholder="Nom ou Ville">
    <button type="submit">Rechercher</button>
</form>
        <a href="/" class="btn btn-secondary">Retour</a>
      </form>
    
  </nav>


  <div class="container">

  

     <center><h2>Produit1</h2></center><br> 

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



    <center><h2>Produit2</h2></center><br> 
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

    

    </div>
  </div>

<center>
  <a href="/" type="button" class="btn btn-outline-secondary">Retour</a>
</center>
 

  </div>

  @endsection
  