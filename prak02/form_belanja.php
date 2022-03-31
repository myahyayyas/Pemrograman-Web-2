<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Belanja Online</h3>

    <div class="form-section">
        <form class="form-belanja" method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        <aside>
            <div class="daftar-harga">
                <p class="harga-barang ket">Daftar Harga</p>
                <p class="harga-barang">TV : Rp 4.200.000</p>
                <p class="harga-barang">Kulkas : Rp 2.100.000</p>
                <p class="harga-barang">Mesin Cuci : Rp 3.800.000</p>
                <p class="harga-barang ket">Harga dapat berubah setiap saat</p>
            </div>
        </aside>
    </div>

    <?php
        $proses = $_POST['submit'];
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if($produk == 'TV') {
            $hargaProduk = 4200000;
        } elseif ($produk == 'KULKAS') {
            $hargaProduk = 2100000;
        } elseif ($produk == 'MESIN CUCI') {
            $hargaProduk = 3800000;
        }

        $total = intval($jumlah)* $hargaProduk;
        
        echo '<ul>';
        echo '<li>Nama Customer : '. $customer. '</li>';
        echo '<li>Produk Pilihan : '. $produk. '</li>';
        echo '<li>Harga Barang: Rp '. number_format($hargaProduk,2,',','.'). '</li>';
        echo '<li>Jumlah Beli : '. $jumlah . '</li>';
        echo '<li>Total Harga : Rp '. number_format($total,2,',','.'). '</li>';
        echo '</ul>';

    ?>
</body>
</html>