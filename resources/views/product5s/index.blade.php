@extends('layouts.layout') 

@section('title', 'Accueil')

@section('content')
<!--
<H1>Hello Every BODY</H1>
<a href="/login">Login</a>
<br>
<a href="/registration">register</a>
-->
<nav class="navbar navbar-light bg-light">
    
<div class="container-fluid">
      <a class="navbar-brand "> <h1>GSPD</h1></a>
      <h1>GESTION DE PRODUIT <h1>
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
      <a class="nav-link " href="/product5">Produit4</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/product5">Produit5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/product6">Produit6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="/product7">Produit7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/product8">Produit8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/product9">Produit9</a>
      </li>
  </ul>


  <div class="container">

  

     <center><h2>Produit1</h2></center><br> <a type="button" class="btn btn-outline-primary" href="/product5/create">Ajouter un produit</a><br><br>

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
        
        @foreach($product5s as $product5 )
        <tr>
            <td>{{$product5->name}}</td>
            <td>{{$product5->qty}}</td>
            <td>{{$product5->price}}</td>
            <td>{{$product5->description}}</td>
            <td>
                <a href="{{route('product5.edit', ['product5' => $product5])}}">Edit</a>
             </td>
             <td>
                 <form method="post" action="{{route('product5.destroy', ['product5' => $product5])}}">
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
  