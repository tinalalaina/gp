<center><H1>Login...</H1></center>
<CENTER>
    <form action="{{route('login-user')}}" method="post">  //44444444444444
        @if (Session::has('success'))
        {{Session::get('success')}}
    @endif
    @if (Session::has('fail'))
    {{Session::get('fail')}}
@endif
         <br>
        @csrf
           email <input type="text" name="email" value=""><span>@error ('email') {{$message}} @enderror</span>  <br>
    
        Password <input type="password" name="password" value=""><span>@error ('password') {{$message}} @enderror</span>   <br>
        <button> Login</button><br>
        <a href="registration">new user</a>
    </form>
    </CENTER>