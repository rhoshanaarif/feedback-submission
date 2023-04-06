<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <section class="form-section">
        <form action="/login" method=POST class="login-grp">
            @csrf

            <div class="logo-grp">
                <img class="logo" src="{{ asset('images/akshaya.jpeg') }}" alt="">
            </div>
            <div class="field-grp">
                <label class="head-title" for="registernumber">Register Number</label>
                <input class="input-field" type="text" name="registernumber">
            </div>
            <div class="field-grp">
                <label class="head-title" for="password">Password</label>
                <input class="input-field" type="text" name="password"><br>
            </div>
            <input type="submit" class="submit-field">
        </form>
    </section>



    
</body>
</html>