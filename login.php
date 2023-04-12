<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Halaman Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background-color: #f4f4f4;
        }
        .box{
            width: 500px;
            height: 400px;
            border-radius: 5px;
            margin: 200px auto 0;
            background-color: #ffffff27;
            border-radius: 10px;
            position: relative;
        }
        .box::after {
            content: '';
            position: absolute;
            width: calc(100% + 30px);
            height: calc(100% + 30px);
            z-index: -1;
            background: linear-gradient(to right bottom, #4CC9F0, #4361EE, #3A0CA3);
            top: -15px;
            left: -15px;
            border-radius: 10px
        }
        .box h1 {
            font-size: 3em;
            text-align: center;
            padding: 15px 0 10px;
            color: #fff;
        }
        .box input{
            width: calc(100% - 50px);
            height: 60px;
            padding: 20px;
            margin: 30px auto 20px;
            font-size: 18px;
            display: block;
            outline: none;
            border: none;
            background-color: #ffffff27;
            border: 2px solid #ffffff85;
            color: #fff;
            border-radius: 50px;
        }
        .box input:focus {
            box-shadow: 0 0 5px 5px #ffffff35;
        }
        .box input::placeholder{
            color: #fff;
        }
        .box button {
            width: calc(100% - 50px);
            height: 55px;
            margin: 30px auto 0;
            font-size: 18px;
            display: block;
            background-color: #ffffff37;
            border: 2px solid #ffffff85;
            color: #fff;
            border-radius: 50px;
            cursor: pointer;
        }
        </style>
</head>
<body>
    <div class="box">
        <h1>Login</h1>
        <form action="proses_login.php" method="post">
            <input type="text" name="username" placeholder="Masukkan Username">
            <input type="password" name="password" placeholder="Masukkan Password">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>