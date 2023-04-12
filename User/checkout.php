<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Checkout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .box {
            width: 500px;
            border-radius: 5px;
            margin: 100px auto;
            background-color: #ffffff27;
            border-radius: 10px;
            padding: 5px 0;
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

        .box h2 {
            font-size: 3em;
            text-align: center;
            padding: 20px 0 30px;
            color: #fff;
        }

        .box label {
            font-size: 18px;
            color: #fff;
            padding: 0 0 10px 25px;
        }

        .box input {
            width: calc(100% - 50px);
            height: 60px;
            padding: 20px;
            margin: 10px auto 0;
            font-size: 18px;
            display: block;
            outline: none;
            border: none;
            background-color: #ffffff27;
            border: 2px solid #ffffff85;
            color: #fff;
            border-radius: 50px;
        }

        .box input::placeholder {
            color: #fff;
        }

        .box button {
            width: calc(100% - 50px);
            height: 55px;
            margin: 10px auto 20px;
            font-size: 18px;
            display: block;
            border-radius: 50px;
            background-color: #ffffff37;
            border: 2px solid #ffffff85;
            color: #fff;
            cursor: pointer;
        }

        .box hr {
            width: calc(100% - 50px);
            border: 1px solid #fff;
            margin: 30px auto;
        }
        .gambar{
            width: calc(100% - 100px);
            height: 300px;
            margin: 0 auto 20px;
            display: grid;
            place-items: center;
            border-radius: 5px;
            background-color: #ffffff55;
        }
        .gambar img{
            width: 350px;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Checkout</h2>
        <label for="">Tanggal Transaksi</label><br>
        <input type="date" name="tgl_transaksi" disabled value="<?= date('Y-m-d'); ?>">
        <hr>
        <?php foreach ($_SESSION["cart"] as $product_id => $kuantitas) : ?>
            <?php
            $data = query("SELECT * FROM barang WHERE id_barang = '$product_id'")[0];
            $subTotal = $data['harga_satuan'] * $kuantitas;
            ?>
            <div class="gambar">
                <img src="../images/<?= $data['foto']; ?>" alt="">
            </div>
            <form action="proses_checkout.php" method="post">
                <input type="hidden" name="tgl_transaksi" value="<?= date('Y-m-d'); ?>">
                <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                <input type="hidden" name="id_barang" value="<?= $product_id; ?>">

                <label for="">Merk Barang</label><br>
                <input type="text" name="jenis_barang" value="<?= $data['jenis_barang']; ?>" disabled><br>

                <label for="">Harga Satuan</label><br>
                <input type="number" name="harga_satuan" value="<?= $data['harga_satuan']; ?>" disabled><br>

                <label for="">Jumlah Barang</label><br>
                <input type="number" value="<?= $kuantitas; ?>" disabled><br>
                <input type="hidden" name="jmlh_barang" value="<?= $kuantitas; ?>">

                <label for="">Total Harga</label><br>
                <input type="number" name="total_harga" value="<?= $subTotal; ?>" disabled>
                <hr>
            <?php endforeach;  ?>
            <button type="submit" name="checkout">Checkout</button>
            </form>
    </div>
</body>

</html>