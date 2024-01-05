<center><H1>Registration...</H1></center> 
<CENTER>
<form action="{{route('register-user')}}" method="post">    //222222222222222222222
    @if (Session::has('success'))                          //3333333333333
        {{Session::get('success')}}
    @endif
    @if (Session::has('fail'))
    {{Session::get('fail')}}
@endif
<br>
    @csrf
   full name <input type="text" name="name" value="{{old('name')}}"> <span>@error ('name') {{$message}} @enderror</span>  <br>
   
       email <input type="text" name="email" value="{{old('email')}}"> <span>@error ('email') {{$message}} @enderror</span>  <br>

    Password <input type="password" name="password" value=""><span>@error ('password') {{$message}} @enderror</span>  <br>
    <button> ENREGISTRER</button><br>
    <a href="login">login here</a>
</form>
</CENTER>