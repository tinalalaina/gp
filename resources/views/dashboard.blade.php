@extends('layouts.layout') 

@section('title', 'Accueil')

@section('content')
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

        <nav class="navbar navbar-light bg-light">
    
          <div class="container-fluid">
                <a class="navbar-brand btn-outline-primary "href="/dashboard"> <h1>GSPD</h1></a>
                <form class="d-flex">
                  <p class="btn btn-outline-success " type="submit"> {{$data->name}}</p>
                </form>
                <form class="d-flex">
                  <a href="logout" class="btn btn-secondary">Déconnection</a>
                </form>
              </div>
            </nav>
            <br><br>
        <center>
      <!-- !PAGE CONTENT! -->

      <div class="w3-content" style="max-width:1500px">
        <a href="enregistrements" type="button" class="btn btn-info">Listes des produit enregistrer</a>
            <img class="im" src="{{asset('images/panier1.PNG')}}" alt="Me" style="width:100%">
            <div class="text"> 
             

              <div class="container overflow-hidden">
                
                <div class="row gy-5">
                  <div class="col-6">
                    <a  href="/product1"class="p-3 border bg-light">Product 1</a>
                  </div>
                  
                  <div class="col-6">
                    <a  href="/product2"class="p-3 border bg-light">Product 2</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product3"class="p-3 border bg-light">Product 3</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product4"class="p-3 border bg-light">Product 4</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product5"class="p-3 border bg-light">Product 5</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product6"class="p-3 border bg-light">Product 6</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product7"class="p-3 border bg-light">Product 7</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product8"class="p-3 border bg-light">Product 8</a>
                  </div>
                  <div class="col-6">
                    <a  href="/product9"class="p-3 border bg-light">Product 9</a>
                  </div>

                </div>
              </div>




        </div>
        
      <!-- End Page Content -->


      




      </div>
      
    </center>
      </body>
      
      
    

@endsection