<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #23252a;
        }

        .box {
            position: relative;
            width: 100%;
            max-width: 400px;
            background: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
            padding: 15px;
        }

        .box::before,
        .box::after,
        .borderLine::before,
        .borderLine::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 400px;
            height: 440px;
            background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
            z-index: 0;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        .box::after {
            animation-delay: -3s;
        }

        .borderLine::before {
            background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
            animation-delay: -1.5s;
        }

        .borderLine::after {
            background: linear-gradient(0deg, transparent, transparent, #ff2770, #ff2770, #ff2770);
            animation-delay: -4.5s;
        }

        @keyframes animate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .box form {
            position: relative;
            background: #222;
            padding: 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        .box form h2 {
            color: #fff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
            margin-bottom: 1.5rem;
        }

        .box form .inputBox {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .box form .inputBox input {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: none;
            border-bottom: 2px solid #8f8f8f;
            outline: none;
            color: #fff;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .box form .inputBox input:focus,
        .box form .inputBox input:valid {
            border-color: #45f3ff;
        }

        .box form .inputBox label {
            color: #8f8f8f;
            font-size: 0.9em;
            margin-bottom: 0.5rem;
            display: block;
        }

        .box form .inputBox input::placeholder {
            color: #8f8f8f;
            opacity: 0.7;
        }

        .box form .btn {
            background: #45f3ff;
            color: #1c1c1c;
            font-weight: 600;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .box form .btn:hover {
            background: #ff2770;
        }

        .box form .invalid-feedback {
            color: #ff2770;
            font-size: 0.8em;
            margin-top: 0.5rem;
            display: block;
        }
    </style>
</head>
<body>
    <div class="box">
        <span class="borderLine"></span>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Sign In</h2>
            <div class="inputBox">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="inputBox">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                       name="password" placeholder="Enter your password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>