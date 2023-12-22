<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500&family=Plus+Jakarta+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        .register-form {
            text-align: center;
        }

        .btn-primary {
            margin: auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="admin">
            <h1> Admin </h1>
        </div>
        <div class="form-container">
            <form class="register-form" action="{{ route('login.authenticate') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" placeholder="email" class="form-control" id="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control" id="password">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <div class="button">
                    <button type="submit" class="login-button">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>