@extends('layouts.utilities')

@section('gate')

{{-- ISI --}}

<!-- <div class="left">
    <div class="container">
        <div class="image">
            <img src="/img/With-Name.png" alt="">
        </div>

          @if(session()->has('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{ session('success'); }}</strong>
              </button>
            </div>
          @endif

        <form action="/login" method="post">
            
        @csrf

            <div class="field">
                <i class='bx bxs-user bx-sm'></i>
                    <span class="tooltip is-invalid"></span>
                <input type="text" placeholder="Username" name="username" autofocus require>
            <div class="line"></div>
            </div>

            <div class="field">
                <i class='bx bxs-lock-alt bx-sm' ></i>
                    <span class="tooltip"></span>
                <input type="password" placeholder="Password" name="password" require>
            <div class="line"></div>

            <div class="rememberme">
                <input type="checkbox">
                <a href="">Remember Me</a>
            </div>
    
            <div class="lupaPass">
                <a href="/emergency">Let's sign up?</a>
            </div>
    
            <button type="submit">Login</button>  

            {{-- <div class="register">e
                <p>Don't have an account? <a href="">Sign Up</a></p>
            </div> --}}
        </form>
    </div>
</div> -->

<div class="main">
    <p class="sign" align="center">Login</p>
    <form action="/login" method="post">
        @csrf
      
        {{-- <input class="un" type="text" align="center" name="username" placeholder="username"> --}}
        <input class="un" type="text" name="username" id="username" placeholder="username">

        <input class="pass" type="password" name="password" id="password" placeholder="password">

      
      {{-- <input class="pass" type="password" align="center" name="password" placeholder="password"> --}}

      <button class="submit" type="submit" align="center">Login</button>  
 
      {{-- <a class="submit" type="submit" align="center">Sign in</a> --}}
      <p class="forgot" align="center"><a href="/register">Daftar Akun?</p>
    
      </form>     
                
    </div>
     


@endsection