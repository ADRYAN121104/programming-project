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
    <title>Dashboard</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body{
            background: #f1f5f9;
        }

        /* SIDEBAR */

        .sidebar{
            position: fixed;
            width: 250px;
            height: 100%;
            background: #0f172a;
            padding-top: 30px;
        }

        .sidebar h2{
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar a{
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            transition: 0.3s;
        }

        .sidebar a:hover{
            background: #1e293b;
        }

        .sidebar i{
            margin-right: 10px;
        }

        /* MAIN */

        .main{
            margin-left: 250px;
            padding: 30px;
        }

        .topbar{
            background: white;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .topbar h1{
            color: #0f172a;
        }

        .user{
            font-weight: bold;
            color: #2563eb;
        }

        /* CARD */

        .cards{
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
            gap: 20px;
        }

        .card{
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-5px);
        }

        .card i{
            font-size: 35px;
            margin-bottom: 15px;
            color: #2563eb;
        }

        .card h2{
            margin-bottom: 10px;
            color: #0f172a;
        }

        .card p{
            color: gray;
        }

        /* TABLE */

        .table-box{
            margin-top: 40px;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th{
            background: #2563eb;
            color: white;
            padding: 12px;
        }

        table td{
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .logout{
            background: red;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
        }

    </style>

</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <h2>MY DASHBOARD</h2>

    <a href="#">
        <i class="fa fa-home"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="fa fa-user"></i>
        Profile
    </a>

    <a href="#">
        <i class="fa fa-database"></i>
        Data
    </a>

    <a href="#">
        <i class="fa fa-chart-line"></i>
        Statistik
    </a>

    <a href="logout.php">
        <i class="fa fa-sign-out-alt"></i>
        Logout
    </a>

</div>

<!-- MAIN -->

<div class="main">

    <!-- TOPBAR -->

    <div class="topbar">

        <h1>Dashboard</h1>

        <div class="user">
            Halo, <?php echo $_SESSION['nama']; ?>
        </div>

    </div>

    <!-- CARD -->

    <div class="cards">

        <div class="card">
            <i class="fa fa-users"></i>
            <h2>120</h2>
            <p>Total User</p>
        </div>

        <div class="card">
            <i class="fa fa-folder"></i>
            <h2>85</h2>
            <p>Total Data</p>
        </div>

        <div class="card">
            <i class="fa fa-chart-bar"></i>
            <h2>95%</h2>
            <p>Progress</p>
        </div>

        <div class="card">
            <i class="fa fa-message"></i>
            <h2>40</h2>
            <p>Pesan Baru</p>
        </div>

    </div>

    <!-- TABLE -->

    <div class="table-box">

        <h2>Data Terbaru</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Malya</td>
                <td>Aktif</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Admin</td>
                <td>Aktif</td>
            </tr>

            <tr>
                <td>3</td>
                <td>User</td>
                <td>Aktif</td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>