<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terimakasih Sudah Belanja</title>
</head>
<body>
    <fieldset>
        <legend>Struk Pembelian</legend>
        <pre>---------------------------------------</pre>
        <h4>*****Toko Cat Guna Bangun Jaya*****</h4>
        <pre>---------------------------------------</pre>
        <pre>Nama Customer : <?php echo $_POST['nama'];?></pre>
        <pre>Alamat        : <?php echo $_POST['alamat']; ?></pre>
        <pre>Jenis Cat     : <?php echo $_POST['jenis']; ?></pre>
        <pre>Warna         : <?php echo $_POST['warna'];?></pre>
        <pre>Harga         : <?php $harga = $_POST['jenis'];
        if($_POST['jenis'] == "Bituminous Paint"){
            echo $harga = 20000;
        }elseif($_POST['jenis'] == "Chlorinated Rubber"){
            echo $harga = 30000;
        }elseif($_POST['jenis'] == "Vinyl"){
            echo $harga = 40000;
        }else{
            echo "Silahkan pilih jenis cat dan warna terlebih dahulu";
        }
        ?></pre>
        <pre>Jumlah Beli   : <?php echo $_POST['jumlah_beli']?></pre>
        <pre>---------------------------------------</pre>
        <pre>Total Harga   : <?php $total;
        echo $total = $harga * $_POST['jumlah_beli'];?></pre>
        <pre>Diskon        : <?php $diskon = $_POST['jumlah_beli'];
        if($_POST['jumlah_beli'] >= 5 && $_POST['jumlah_beli'] < 10){
            echo $diskon = $harga * $_POST['jumlah_beli'] * 5 /100;
        }elseif($_POST['jumlah_beli'] >= 10){
            echo $diskon = $harga * $_POST['jumlah_beli'] * 10 /100;
        }else{
            echo $diskon = 0;
        }
        ?></pre>
        <pre>---------------------------------------</pre>
        <pre>Total Bayar   : <?php $bayar;
        echo $bayar = $total - $diskon;
        ?></pre>
        <pre>---------------------------------------</pre>
    </fieldset>

</body>
</html>