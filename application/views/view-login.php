<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        .goj{
            margin: 20px 0;
            margin-left: 20px;
            padding: 20px;
            width: 650px;
            background: white;
            color: #D2691E;
            border-radius: 20px;
            text-align: center;
            padding-bottom: 30px;
            float: left;

        }
        .rrr{
            margin: 20px auto;
            padding: 20px;
            width: 500px;
            background: white;
            color: #D2691E;
            border-radius: 20px;
            text-align: center;
            padding-bottom: 30px;
            float: left;
        }
        h1{
            text-align: center;
            color: #D2691E;
        }
        .eee{
            text-align: center;
            font-size: 30px;
        }
        body{
            background: #D2691E;
        }
        img{
            width: 200px;
            height: 200px;
        }
        .input{
            width : 100%;
            height: 40px;
            margin: 10px 0;
            border-radius: 40px;
            padding-left: 20px;
            box-sizing: border-box;
        }
        button{
            width : 100%;
            border-radius: 40px;
            margin: 10px 0;
            padding: 14px 0;
            font-size: 20px;
            background: #D2691E;
            color: white;
        }
        a{
            color: blue;
            text-decoration: none;
            font-size: 20px;
            padding: 10px 20px;
            color: white;
            border-radius: 20px;
            background: #D2691E;
        }
        img{
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
    <div class="rrr">
        <h1>Selamat Anda Berhasil Login !!</h1>
        <img src="<?= base_url('');?>/assets/Good team-pana.png" alt="">
        <a href="<?= base_url('Login'); ?>">Logout</a>
    </div>
    <div class="goj">
        <h2>Menu</h2>
        <table>
            <tr>
                <td>KdMenu</td>
                <td>:</td>
                <td align="left"><?= $kdmenu ?></td>
            </tr>
            <tr>
                <td>NmMenu</td>
                <td>:</td>
                <td align="left"><?= $nmmenu ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td align="left"><?= $harga ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><img src="<?= base_url('');?>/assets/<?= $file ?>" alt=""></td>
            </tr>
        </table>
    </div>
</body>
</html>