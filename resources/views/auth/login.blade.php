<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CraftAlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('landing/assets/icongunting.png')}}">
    <style>
        body {
            background: linear-gradient(135deg, rgb(237, 141, 157), #523e70, #ff005a);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            animation: fadeIn 1.5s ease-in-out; 
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .hero-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 20px;
            gap: 50px;
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }

        .hero-text {
            max-width: 50%;
            padding-left: 30px;
            margin-left: 20px;
            text-align: left;
            opacity: 0; 
            animation: fadeInText 1s ease-in-out forwards 0.5s; 
        }

        @keyframes fadeInText {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 350px;
            margin-right: 100px;
            box-shadow: 0px 5px 100px rgba(0, 0, 0, 0.2);
            opacity: 0; 
            animation: fadeInForm 1s ease-in-out forwards 1s; 
        }

        @keyframes fadeInForm {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .form-container h2 {
            color: #ff4081;
        }

        .kaler {
            color: #ff4081;
        }

        .form-control:focus {
            border-color: #ff4081;
            box-shadow: 0 0 5px rgba(255, 64, 129, 0.5);
        }

        .btn-primary {
            background-color: #ff4081;
            border: none;
            transition: background-color 0.3s ease; 
        }

        .btn-primary:hover {
            background-color: #ff69b4;
        }

        @media (max-width: 768px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                max-width: 100%;
                padding-left: 0;
                margin-left: 0;
                margin-bottom: 20px;
            }

            .form-container {
                margin-right: 0;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="hero-container">

        <div class="hero-text">
            <h1>Welcome Back!<br>Login to Continue</h1>
            <p>Please log in to access your account</p>
        </div>

        <!-- Form Login -->
        <div class="form-container">
            <h2 class="text-center mb-4">Login</h2>
            <form id="loginForm" action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label kaler">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="mb-3">
                    <label for="password" class="form-label kaler">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" value="{{ old('password') }}" required>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3 kaler">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
