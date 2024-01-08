
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
      <center>
    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1500px">
    
      <br><br>
    
      <!-- Photo Grid -->
      <div class="w3-row">
          <img class="im" src="{{asset('images/IMG_20240108_165237.jpg')}}" alt="Me" style="width:100%">
          <div class="text">
            <H1>Registration</H1>
 *******************************
<form  class="form-inline" action="{{route('register-user')}}" method="post">   
    @if (Session::has('success'))                       
        {{Session::get('success')}}
    @endif
    @if (Session::has('fail'))
    {{Session::get('fail')}}
@endif
<br>
    @csrf
    <label for="email">Nom</label>
     <input class="form-control"  type="text" name="name" value="{{old('name')}}"> <span>@error ('name') {{$message}} @enderror</span>  <br>
   
     <label for="email">Email address:</label>
      <input class="form-control"  type="text" name="email" value="{{old('email')}}"> <span>@error ('email') {{$message}} @enderror</span>  <br>

      <label for="pwd">Password:</label>
      <input class="form-control"  type="password" name="password" value=""><span>@error ('password') {{$message}} @enderror</span>  <br>
      <button class="btn btn-primary">ENREGISTRER</button><br>
    <a href="login">login here</a>
</form>
<br>
    <a href="/">Retour</a>

</center>
</body>




@endsection
    