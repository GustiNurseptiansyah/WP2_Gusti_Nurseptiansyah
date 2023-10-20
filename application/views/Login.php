<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
        .rrr{
            margin: 20px auto;
            padding: 20px;
            width: 500px;
            background: white;
            color: #D2691E;
            border-radius: 20px;
            text-align: center;
        }
        h1{
            text-align: center;
            font-size: 50px;
            color: white;
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
        }
        hr{
            color: #D2691E;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <div class="rrr">
        <form action="<?= base_url('Login/cetak'); ?>" method="post">
        <h2 class="eee">Masuk Menu</h2>
        <div><?= form_error('kdmenu'); ?></div>
        <input type='text' class='input' name='kdmenu' placeholder='Masukan Kode Menu ...'>
        <div><?= form_error('nmmenu'); ?></div>
        <input type='text' class='input' name='nmmenu' placeholder='Masukan Nama Menu ...'>
        <div><?= form_error('harga'); ?></div>
        <input type='number' class='input' name='harga' placeholder='Masukan Harga ...'>
        <div><?= form_error('file'); ?></div>
        <input type='file' class='input' name='file' placeholder='Masukan File ...'>
        <button>Masuk</button>
        </form>
    </div>
</body>
</html>