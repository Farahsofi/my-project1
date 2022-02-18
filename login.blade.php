<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Page</title>
        <link rel="stylesheet" href="{{asset('css/login.css')}}"> 
    </head>
    <body>
        <div class="login-page">
            <div class="form"> 
              <!-- <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
              </form> -->
              @if(session()->has('pesan'))
                <div class="alert alert-success">
              {{ session()->get('pesan') }}</div>
              @endif
              <form action="{{ route('login_admin') }}" method="post" class="login-form">
                @csrf
                @method('post')
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="username" required>
                @error('username')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="password" required>
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                <button type="submit">login</button>
                <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
              </form>
            </div>
          </div>
    </body>
    <script src="js/login.js"></script>
</html>