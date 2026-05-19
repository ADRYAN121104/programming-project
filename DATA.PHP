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
    <title>Data</title>

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

        .topbar{
            background:white;
            padding:20px;
            border-radius:15px;
            margin-bottom:30px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        .topbar h1{
            color:#0f172a;
        }

        /* FORM */

        .form-box{
            background:white;
            padding:30px;
            border-radius:15px;
            margin-bottom:30px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        .form-box h2{
            margin-bottom:20px;
            color:#2563eb;
        }

        .input-box{
            margin-bottom:20px;
        }

        .input-box label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        .input-box input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:10px;
        }

        .btn{
            background:#2563eb;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:10px;
            cursor:pointer;
        }

        /* TABLE */

        .table-box{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table th{
            background:#2563eb;
            color:white;
            padding:14px;
        }

        table td{
            padding:14px;
            border-bottom:1px solid #ddd;
        }

        .edit{
            background:orange;
            color:white;
            padding:8px 14px;
            border-radius:8px;
            text-decoration:none;
        }

        .hapus{
            background:red;
            color:white;
            padding:8px 14px;
            border-radius:8px;
            text-decoration:none;
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

    <a href="STATISTIK.PHP">
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

    <div class="topbar">
        <h1>Data Management</h1>
    </div>

    <!-- FORM -->

    <div class="form-box">

        <h2>Tambah Data</h2>

        <form>

            <div class="input-box">
                <label>Nama</label>
                <input type="text" placeholder="Masukkan nama">
            </div>

            <div class="input-box">
                <label>Email</label>
                <input type="text" placeholder="Masukkan email">
            </div>

            <div class="input-box">
                <label>Status</label>
                <input type="text" placeholder="Masukkan status">
            </div>

            <button class="btn">
                Simpan Data
            </button>

        </form>

    </div>

    <!-- TABLE -->

    <div class="table-box">

        <h2>Data User</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Ryan</td>
                <td>ryan@gmail.com</td>
                <td>Aktif</td>
                <td>
                    <a href="#" class="edit">
                        Edit
                    </a>

                    <a href="#" class="hapus">
                        Hapus
                    </a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Admin</td>
                <td>admin@gmail.com</td>
                <td>Aktif</td>
                <td>
                    <a href="#" class="edit">
                        Edit
                    </a>

                    <a href="#" class="hapus">
                        Hapus
                    </a>
                </td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>