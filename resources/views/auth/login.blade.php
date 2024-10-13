<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminL Login</title>

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('Admin/plugins/bootstrap/css/bootstrap.min.css') }}">

  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      font-family: 'Open Sans', sans-serif;
      background: url('images/back.jpeg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .mask {
      position: absolute;
      height: 100%;
      width: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .modal {
      width: 300px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      position: relative;
      overflow: hidden;
    }

    .circle {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin: 0 auto 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
      overflow: hidden;
    }

    .circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    h1 {
      margin: 0 0 20px;
      color: #fff;
      text-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

    input {
      width: calc(100% - 20px);
      margin: 10px 0;
      padding: 10px;
      background: rgba(255, 255, 255, 0.2);
      border: none;
      border-radius: 5px;
      color: #fff;
      transition: box-shadow 0.3s ease;
      outline: none;
    }

    input:focus {
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    button {
      background: #007bff;
      border: none;
      padding: 10px;
      border-radius: 20px;
      color: #fff;
      width: 100%;
      transition: background 0.3s, transform 0.3s;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
      transform: translateY(-2px);
    }

    .error-message {
      color: #ff4d4d; /* Red color for errors */
      background: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
      padding: 10px;
      margin-top: 10px;
      text-align: left;
      font-size: 14px;
    }

    #copy {
      position: absolute;
      bottom: 10px;
      width: 100%;
      text-align: center;
      font-size: 10px;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="mask">
    <div class="modal">
      <div class="circle">
        <img src="images/mic.jpg" alt="mic"> <!-- Add your logo image here -->
      </div>
      <h1>Login</h1>

      @if(session()->has('Message'))
        <div class="alert alert-success">
          {{ session()->get('Message') }}
        </div>
      @endif

      <form action="{{ route('postlogin') }}" method="post">
        @csrf
        @if(session('error'))
          <div class="error-message">{{ session('error') }}</div>
        @endif
        <input type="email" name="email" placeholder="Email" required>
        @error('email')
          <div class="error-message">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="Password" required>
        @error('password')
          <div class="error-message">{{ $message }}</div>
        @enderror
        <button type="submit">Log in.</button>
      </form>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
