<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>

<body>
    <h1>Form Registrasi Pengguna</h1>
    <form action="submit_get.php".method="GET">
        <div>
            <label.for="nama_lengkap">Nama.lengkap</label>
            <input.type="text" name="nama_lengkap" id="nama_lengkap"required>
        </div><br>
        <div>
            <label.for="username">Username</label>
            <input.type="text" name="username"id="username"required>
        </div><br>
        <div>
            <label.for="password">Password</label>
            <input.type="password" name="password"id="password"required>
        </div><br>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>

</html>