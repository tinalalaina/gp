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
        <a href="logout" class="btn btn-secondary">Déconnection</a>
      </form>
    
  </nav>

  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/product1">Produit1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/product2">Produit2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/product3">Produit3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="/product4">Produit4</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/product5">Produit5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/product6">Produit6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Product7">Produit7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/product8">Produit8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/product9">Produit9</a>
      </li>
  </ul>


  <div class="container">

  

     <center><h2>Produit1</h2></center>

    <table class="table table-bordered">
      <thead>
        <tr  class="table-primary">
          <th scope="col">Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product7s as $product7 )
        <tr>
            <td>{{$product7->name}}</td>
            <td>{{$product7->qty}}</td>
            <td>{{$product7->price}}</td>
            <td>{{$product7->description}}</td>
            <td>
                <a href="{{route('product7.edit', ['product7' => $product7])}}">Edit</a>
             </td>
             <td>
                 <form method="post" action="{{route('product7.destroy', ['product7' => $product7])}}">
                     @csrf 
                     @method('delete')
                     <input type="submit" value="Delete" />
                 </form>
             </td>
        </tr>
    @endforeach
      </tbody>
    </table>

  </div>

  @endsection
  