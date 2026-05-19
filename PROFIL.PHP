<?php
session_start();

if(!isset($_SESSION['nama'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#f1f5f9;
        }

        /* SIDEBAR */

        .sidebar{
            position:fixed;
            width:250px;
            height:100%;
            background:#0f172a;
            padding-top:30px;
        }

        .sidebar h2{
            color:white;
            text-align:center;
            margin-bottom:40px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 30px;
            transition:0.3s;
        }

        .sidebar a:hover{
            background:#1e293b;
        }

        .sidebar i{
            margin-right:10px;
        }

        /* MAIN */

        .main{
            margin-left:250px;
            padding:40px;
        }

        .profile-card{
            background:white;
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        .profile-top{
            text-align:center;
        }

       
        .profile-top img{
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 6px solid #2563eb;
            object-fit: cover;
            display: block;
            margin: 0 auto 25px;
        }
        

        .profile-top h1{
            color:#0f172a;
            margin-bottom:10px;
        }

        .profile-top p{
            color:gray;
            margin-bottom:30px;
        }

        .info-box{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:20px;
            margin-top:30px;
        }

        .info{
            background:#f8fafc;
            padding:20px;
            border-radius:15px;
        }

        .info h3{
            margin-bottom:10px;
            color:#2563eb;
        }

        .info p{
            color:#333;
        }

        .btn{
            display:inline-block;
            margin-top:30px;
            padding:12px 25px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:10px;
        }

    </style>

</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <h2>MY DASHBOARD</h2>

    <a href="INDEX.PHP">
        <i class="fa fa-home"></i>
        Dashboard
    </a>

    <a href="PROFILE.PHP">
        <i class="fa fa-user"></i>
        Profile
    </a>

    <a href="DATA.PHP">
        <i class="fa fa-database"></i>
        Data
    </a>

    <a href="STATISTIK.PHP  ">
        <i class="fa fa-chart-line"></i>
        Statistik
    </a>

    <a href="LOGOUT.PHP">
        <i class="fa fa-sign-out-alt"></i>
        Logout
    </a>

</div>

<!-- MAIN -->

<div class="main">

    <div class="profile-top">

    <img src="foto.jpg">

    <h1>
        <?php echo $_SESSION['nama']; ?>
    </h1>

    <p>
        Web Developer & Administrator
    </p>

</div>

        <div class="info-box">

            <div class="info">
                <h3>Email</h3>
                <p>admin@gmail.com</p>
            </div>

            <div class="info">
                <h3>Status</h3>
                <p>Aktif</p>
            </div>

            <div class="info">
                <h3>Role</h3>
                <p>Administrator</p>
            </div>

            <div class="info">
                <h3>Alamat</h3>
                <p>Mataram, NTB</p>
            </div>

        </div>

        <a href="index.php" class="btn">
            Kembali ke Dashboard
        </a>

    </div>

</div>

</body>
</html>