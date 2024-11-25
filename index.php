<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1>login</h1>
    <div class="login-box">
        <p style="text-align: center; font-size: 16px; line-height: 1.3;">Silahkan masukan email dan password anda yang sudah terdaftar</p>
        <form action="./backend/login.php" method="post">
            <input type="email" name="email" placeholder="masukkan email anda">
            <input type="password" name="password" placeholder="masukkan password anda">
            <input type="submit" value="login" name="submit">
        </form>
    </div>
</body>
</html>