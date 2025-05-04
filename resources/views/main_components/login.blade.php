<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/svg+xml" href="images/logo.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-image: url('https://i.postimg.cc/HkNLH9ts/feature.jpg');
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            width: 340px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.97);
            border-radius: 6px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.25);
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px solid rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(1px);
        }

        h2 {
            margin: 0 0 12px 0;
            color: #333;
            font-size: 1.3em;
            line-height: 1.2;
            font-weight: 600;
        }

        label {
            display: block;
            text-align: left;
            margin: 0 0 5px 3px;
            color: #555;
            font-weight: bold;
            font-size: 0.82em;
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 13px;
            box-sizing: border-box;
            transition: all 0.2s ease;
        }

        input:focus {
            border-color: #4A90E2;
            box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
            outline: none;
        }

        button {
            background-color: #4A90E2;
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
            padding: 9px;
            margin-top: 8px;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #357ABD;
        }

        a {
            color: #4A90E2;
            text-decoration: none;
            margin-top: 12px;
            display: inline-block;
            font-size: 0.8em;
            transition: color 0.2s ease;
        }

        a:hover {
            color: #357ABD;
            text-decoration: underline;
        }

        .footer {
            margin-top: 10px;
            font-size: 0.7em;
            color: #777;
            line-height: 1.3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login to Your Account</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="footer">
            <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#4A90E2'
            });
        </script>
    @endif

</body>
</html>
