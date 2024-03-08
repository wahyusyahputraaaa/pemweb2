<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <form method="POST">
                    <h2>Belanja Online</h2>
                    <hr>
                    <div class="form-group row">
                        <label for="customer" class="col-2 col-form-label mt-5 ml-2">Customer</label> 
                        <div class="col-4 mt-5">
                            <input id="customer" name="customer" placeholder="Nama customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2 ml-3">Pilih Produk</label> 
                        <div class="col-5">
                            <div class='custom-control custom-radio custom-control-inline'>
                                <input name='produk' id='radio_1' type="radio" class='custom-control-input' value='remot'>
                                <label for="radio_1" class='custom-control-label'>Remot</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="shampo"> 
                                <label for="radio_2" class="custom-control-label">Shampo</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_3" type="radio" class="custom-control-input" value="sabun"> 
                                <label for="radio_3" class="custom-control-label">Sabun</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-2 col-form-label ml-2">Jumlah</label> 
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-2 col-2">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 mt-5">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Daftar Harga
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">Remot : 200.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Shampo : 10.000</button>
                    <button type="button" class="list-group-item list-group-item-action">Sabun : 30.000</button>
                    <button type="button" class="list-group-item list-group-item-action active " aria-current="true">Harga Dapat Berubah Setiap Saat</button>
                </div>
            </div>
        </div>
        <hr>
        <div class='container-fluid'>
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $customer = $_POST['customer'];
                        $pilih_produk = isset($_POST['produk']) ? $_POST['produk'] : '';
                        $jumlah_produk = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

                        $totalbelanja = 0;

                        if ($pilih_produk == 'remot') {
                            $totalbelanja = 200000 * $jumlah_produk;
                        } elseif ($pilih_produk == 'shampo') {
                            $totalbelanja = 10000 * $jumlah_produk;
                        } elseif ($pilih_produk == 'sabun') {
                            $totalbelanja = 30000 * $jumlah_produk;
                        }

                        echo "<ul class='list-group'>";
                        echo "<li class='list-group-item active' aria-current='true'>Struk Belanja</li>";
                        echo "<li class='list-group-item'>Nama Customer : " . $customer . "</li>";
                        echo "<li class='list-group-item'>Produk Pilihan : " . $pilih_produk . "</li>";
                        echo "<li class='list-group-item'>Jumlah Beli : " . $jumlah_produk . "</li>";
                        echo "<li class='list-group-item'>Total Harga : Rp." . number_format($totalbelanja, 0, '.', '.') . "</li>";
                        echo "</ul>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>