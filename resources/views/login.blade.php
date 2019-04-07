<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <form method="POST" class="form-signin">
            {{ csrf_field() }}

            <h2 class="form-signin-heading">Please Sign In</h2>
            <label for="inputEmail" class="sr-only">Email Address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </form>
    </div>
</body>
</html>
