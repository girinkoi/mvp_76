<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Pemesanan</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/bootstrap/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/fontawesome-free/css/all.min.css') ?>">

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- SB Admin 2 CSS -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/css/sb-admin-2.min.css') ?>">
</head>

<body class="bg-light">

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="text-gray-800">Form Pemesanan</h3>
                <a href="<?= site_url('orders') ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>

            <div class="card shadow">
                <div class="card-body">
                    <form action="<?= site_url('orders/beli') ?>" method="post">
                        <input type="hidden" name="id_pesan" value="<?= $list_pesan->id; ?>">

                        <div class="form-group">
                            <label>Nama Pembeli</label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nama Anda"
                                   name="nama_pembeli"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Alamat Anda"
                                   name="alamat"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Metode Pembayaran</label>
                            <select class="form-control" name="payment_method" required>
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="transfer">Transfer</option>
                                <option value="cash">Cash</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i> Submit Pesanan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
