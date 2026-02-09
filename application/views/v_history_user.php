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

<!-- Begin Page Content -->
<div class="container-fluid min-vh-100 d-flex align-items-start justify-content-center pt-5">

    <div class="row w-100 justify-content-center">
        <div class="col-lg-8 col-md-10">

            <div class="mb-3 d-flex justify-content-between">
                <a href="<?= site_url('orders') ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">
                        History Pembelian
                    </h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama pembeli</th>
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
<!-- /.container-fluid -->

<!-- jQuery -->
<script src="<?= base_url('main_assets/assets/vendor/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap JS -->
<script src="<?= base_url('main_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- SB Admin 2 JS -->
<script src="<?= base_url('main_assets/assets/js/sb-admin-2.min.js') ?>"></script>

<!-- DataTables JS -->
<script src="<?= base_url('main_assets/assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('main_assets/assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>

</body>
</html>
