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

    <!-- DataTables CSS (kalau memang dipakai) -->
    <link rel="stylesheet" href="<?= base_url('main_assets/assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>">
</head>

<body id="page-top" class="bg-light">

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a class="btn btn-danger" href="<?= site_url('login/logout') ?>">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <a class="btn btn-danger" href="<?= site_url('history/user') ?>">
                <i class=""></i> history
            </a>
        </div>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($list_tanaman as $tanaman): ?>
            <?php
                $status = $tanaman->status;
                $badge_class = 'bg-secondary';

                if ($status == 'ready') {
                    $badge_class = 'bg-success';
                } elseif ($status == 'pending') {
                    $badge_class = 'bg-warning';
                } elseif ($status == 'sold') {
                    $badge_class = 'bg-danger';
                }
            ?>
            <div class="col mb-5">
                <div class="card h-100 shadow-sm">
                    <div class="badge <?= $badge_class ?> text-white position-absolute"
                         style="top: 0.5rem; right: 0.5rem">
                        <?= strtoupper($status) ?>
                    </div>

                    <img class="card-img-top"
                         src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                         alt="...">

                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">
                                <?= $tanaman->name ?>
                            </h5>
                            <p class="text-muted mb-1">Tanaman Hias</p>
                            <span class="font-weight-bold text-success">
                                Rp<?= number_format($tanaman->price,0,',','.') ?>
                            </span>
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-primary mt-auto"
                               href="<?= site_url('orders/pesan/' . $tanaman->id); ?>">
                                <i class="fas fa-shopping-cart"></i> Add to cart
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</body>
</html>
