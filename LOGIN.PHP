<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    $query = mysqli_query($conn,
    "SELECT * FROM userrr
    WHERE email='$email'
    AND pasword='$pasword'");

    $data = mysqli_fetch_assoc($query);

    if($data){

        $_SESSION['nama'] = $data['nama'];

        echo "
        <script>
            alert('Login berhasil');
            window.location='INDEX.PHP';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Email atau Pasword salah');
        </script>
        ";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body{
            background: #0f172a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box{
            background: white;
            width: 350px;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .login-box h2{
            text-align: center;
            margin-bottom: 30px;
            color: #0f172a;
        }

        .input-box{
            margin-bottom: 20px;
        }

        .input-box label{
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .input-box input{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
        }

        .input-box input:focus{
            border-color: #2563eb;
        }

        .btn-login{
            width: 100%;
            padding: 12px;
            background: #2563eb;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover{
            background: #1d4ed8;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h2>LOGIN</h2>

    <form method="POST">

        <div class="input-box">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>

        <div class="input-box">
            <label>Pasword</label>
            <input type="password" name="pasword" required>
        </div>

        <button type="submit" name="login" class="btn-login">
            Login
        </button>

    </form>

</div>

</body>
</html>