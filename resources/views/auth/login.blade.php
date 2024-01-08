<!--

-->

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





               <H1>Login</H1>
            ************************************
                    <form class="form-inline" action="{{route('login-user')}}" method="post">  
                  
                      @if (Session::has('success'))
                        {{Session::get('success')}}
                    @endif
                    @if (Session::has('fail'))
                    {{Session::get('fail')}}
                @endif
                        <br>
                        @csrf
                        <div class="mx-auto">
                        <label for="email">Email address:</label>
                         <input class="form-control" type="text" name="email" value=""><span>@error ('email') {{$message}} @enderror</span>  
                    
                         <label for="pwd">Password:</label>
                          <input  class="form-control" type="password" name="password" value=""><span>@error ('password') {{$message}} @enderror</span>  <br>
                        <button class="btn btn-primary"> Login</button><br>
                        ******************************* <br>
                        <a href="registration">new user</a>
                        </div>
                    </form>
                   

    <a href="/enregistrements"> Retour</a>







            </div>




      </div>
      
    </center>
      </body>
      
      
    

@endsection