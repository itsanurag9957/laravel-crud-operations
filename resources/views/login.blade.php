{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>

    if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    endif

    <form method="POST" action="{{ route('admin.login') }}">
        csrf
        <label for="admin_name">Admin Name:</label>
        <input type="text" name="admin_name" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        mixin glassmorphism() {
     background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(255,255,255,0.2);
    border-left: 1px solid rgba(255,255,255,0.2);
    box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
}
html,
body {
  height: 100%;
}

.bg {
  position: absolute;
  z-index: -1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: 
    linear-gradient(to left, rgba(211, 211, 211, 0.616), rgba(169, 169, 169, 0.027));
}
body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
	width: 100%;
	max-width: 330px;
	margin: auto;
    padding: 15px 0px;
  
  include glassmorphism();
  border-radius: 10px;
  border:3px solid rgba(8, 8, 8, 0.199);
  box-shadow: 0px 0px 0px 0px;
  
  h1 {
    include glassmorphism();
    margin-top: 0px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
    color:black;
    padding:15px;
    text-align:center;
  }
  
  form {
    padding:15px;
    
    .btn {
      include glassmorphism;
      color:black;
      
      &:hover, &:focus {
        background: rgba(255,255,255,0.1);
        box-shadow:none;
      }
    }
    
    .form-control:focus {
      border-color:#ced4da;
      box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
    }
  }
  
   .copyright {
     text-align:center;
      color:rgba(255,255,255,0.65);
    }
  
  .form-control {
    background:rgba(255,255,255,0.9);
  }
  
  .form-check {
    display:flex;
    align-items:center;
     color:rgba(255,255,255,0.65);
    label {
      font-size:0.9em;
    }
    
    input {
      margin-right:0.5em;
      
      &:checked {
        background-color:#9ce060;
        border-color: #81c63f;
      }
    }
  }
  
	.form-floating {
		&:focus-within {
			z-index: 2;
		}
	}
  
	input[type="text"] {
		margin-bottom: -1px;
		border-radius: 5px;
	}
	input[type="password"] {
		margin-bottom: 10px;
		border-radius: 5px;
	}
    
}

    </style>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="bg">


</div>


  <main class="form-signin">
    
      <h1 class="h3">Admin Login</h1>
    
    <form method="POST" action="{{ route('admin.login') }}">

        @csrf
      <div class="form-floating mt-2 mb-2">
        <input name="admin_name" type="text" class="form-control" id="floatingInput" placeholder="John Doe" required>
        <label for="floatingInput">Admin Name</label>
      </div>
      <div class="form-floating mt-2 mb-2">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>
        
      </div>
      <button class="w-100 btn btn-lg" style="background-color:rgba(8, 8, 8, 0.199) " type="submit">Sign in</button>
    </form>
          <p class="copyright" style="color:black">&copy; 2025 AnuragS</p>
  </main>
</body>
</html>