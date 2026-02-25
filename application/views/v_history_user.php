<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/bootstrap/css/bootstrap.min.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/fontawesome-free/css/all.min.css') ?>">

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <!-- SB Admin 2 CSS -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/css/sb-admin-2.min.css') ?>">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>">
</head>

<body id="page-top" class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-success" href="<?= site_url('orders') ?>">
            <i class="fas fa-leaf"></i> Mvp76
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('history/user') ?>">
                        <i class="fas fa-history"></i> History
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            <div class="mb-3">
                <a href="<?= site_url('orders') ?>" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to Produk
                </a>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        History Pembelian
                    </h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama Pembeli</th>
                                    <th>Tanaman</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_data as $data) :?>
                                    <tr>
                                        <td><?= $data->buyer_name ?></td>
                                        <td><?= $data->name ?></td>
                                        <td class="text-right">
                                            Rp<?= number_format($data->price,0,',','.') ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>    
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>

</body>
</html>
