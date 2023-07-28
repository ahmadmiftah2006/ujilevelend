<link rel="stylesheet" href="../assets/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Geologica:wght@200&family=Kanit:wght@300&family=Roboto+Condensed&family=Roboto:wght@300&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<style>
  @keyframes move-up-down {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-50px);
      }
    }

    .text-animation {
      position: relative;
      animation: move-up-down 2s linear infinite;
    }
</style>
<!--Google-Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@200&family=Kanit:wght@300&family=Roboto+Condensed&family=Roboto:wght@300&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
<div class="parent clearfix">
    <div class="bg-illustration">
      <img src="../assets/imgproperty/logo.png" alt="logo" style="width: 150px" >

      <div class="burger-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>
    
    <div class="login">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
      <div class="container">
        <h1 class="text-animation" style="color: rgb(48, 85, 207); font-family: 'Anton', sans-serif;">LOGIN!!!</h1>
    
        <div class="login-form">
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"  placeholder="Masukan email">
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror
            </div>
            <div>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password">
            @error('password')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>    
        @enderror
        </div>
            <div class="remember-form">
              <input type="checkbox">
              <span>Ingatkan saya</span>
            </div>
            <div class="forget-pass">
              <a href="#">Forgot Password ?</a>
            </div>

            <button type="submit">LOGIN</button>

          </form>
        </div>
    
      </div>
      </div>
  </div>