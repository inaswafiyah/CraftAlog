<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register CraftAlog</title>
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
      animation: fadeIn 1.5s ease-out;
    }

    .hero-text {
      max-width: 50%;
      padding-left: 30px;
      margin-left: 20px;
      text-align: left;
      opacity: 0;
      animation: slideUp 1.5s ease-out forwards;
    }

    @keyframes slideUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
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
      animation: slideRight 1.5s ease-out forwards;
    }

    @keyframes slideRight {
      0% {
        opacity: 0;
        transform: translateX(-20px);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
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
      background-color: #ff007a;
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

    .form-container {
  padding: 10px; /* Padding tetap kecil */
  max-width: 280px; /* Lebar maksimal tetap kecil */
}

.form-container h2 {
  font-size: 24px; /* Perbesar ukuran judul */
  color: #ff4081; /* Warna pink */
  text-align: center; /* Pusatkan teks judul */
  margin-bottom: 15px; /* Tambahkan jarak bawah */
}

.form-control {
  height: 30px; /* Ukuran input tetap kecil */
  font-size: 12px; /* Ukuran font tetap kecil */
  padding: 3px 8px; /* Padding dalam input tetap kecil */
}

.btn-primary {
  height: 35px; /* Tinggi tombol tetap kecil */
  font-size: 12px; /* Ukuran font tombol tetap kecil */
  padding: 5px 10px; /* Padding tombol tetap kecil */
}

.form-container .mb-3 {
  margin-bottom: 10px; /* Jarak antar input tetap kecil */
}

.kaler {
  color: #ff4081; /* Warna pink untuk label */
}

    
  </style>
</head>

<body>

  <div class="hero-container">

    <div class="hero-text">
      <h1>Welcome!<br>Join Us Today</h1>
      <p>Register to see the tutorial</p>
    </div>

    <div class="form-container">
      <h2 class="text-center mb-4">Register</h2>
      <form id="registerForm" action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label kaler">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="Nama Lengkap" value="{{ old('name')}}">
        </div>
        @error('name')
        <span class="invalid-feedback">
          {{ $message}}
        </span>
        @enderror
        <div class="mb-3">
          <label for="name" class="form-label kaler">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" required name="username" placeholder="username" value="{{ old('username')}}">
        </div>
        @error('username')
        <span class="invalid-feedback">
          {{ $message}}
        </span>
        @enderror
        <div class="mb-3">
          <label for="phone" class="form-label kaler">Phone</label>
          <input type="tel"
            class="form-control @error('phone') is-invalid @enderror"
            required
            name="phone"
            placeholder="Nomor Telepon"
            value="{{ old('phone') }}">
        </div>
        @error('phone')
        <span class="invalid-feedback">
          {{ $message }}
        </span>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label kaler">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" placeholder="Email Anda" value="{{ old('email')}}">
        </div>
        @error('email')
        <span class="invalid-feedback">
          {{ $message}}
        </span>
        @enderror
        <div class="mb-3">
          <label for="password" class="form-label kaler">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password" placeholder="Password Anda" value="{{ old('password')}}">
        </div>
        @error('password')
        <span class="invalid-feedback">
          {{ $message}}
        </span>
        @enderror

        <button type="submit" class="btn btn-primary w-100">Register</button>
        <p class="text-center mt-3 kaler">Already have an account? <a href="{{ route('login')}}" class="text-primary">Login</a></p>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>