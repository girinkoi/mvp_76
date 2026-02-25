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
</head>

<body id="page-top" class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand font-weight-bold text-success">
            <i class="fas fa-leaf"></i> Mvp76
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('history/user') ?>">
                        <i class="fas fa-history"></i> History
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-danger btn-sm"
                       href="<?= site_url('login/logout') ?>">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<section class="py-5">
    <div class="container">

        <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4">

            <?php foreach ($list_tanaman as $tanaman): ?>
            <?php
                $status = $tanaman->status;
                $badge_class = 'secondary';

                if ($status == 'ready') {
                    $badge_class = 'success';
                } elseif ($status == 'pending') {
                    $badge_class = 'warning';
                } elseif ($status == 'sold') {
                    $badge_class = 'danger';
                }
            ?>

            <div class="col mb-4">
                <div class="card h-100 shadow-sm">
                    <span class="badge badge-<?= $badge_class ?> position-absolute m-2">
                        <?= strtoupper($status) ?>
                    </span>
                    <img class="card-img-top"
                         src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                         alt="<?= $tanaman->name ?>">

                    <div class="card-body text-center">
                        <h6 class="font-weight-bold mb-1">
                            <?= $tanaman->name ?>
                        </h6>
                        <p class="text-muted small mb-2">
                            Tanaman Hias
                        </p>
                        <h5 class="text-success font-weight-bold mb-0">
                            Rp<?= number_format($tanaman->price,0,',','.') ?>
                        </h5>
                    </div>

                    <div class="card-footer bg-white border-0 text-center">
                        <a class="btn btn-outline-primary mt-auto"
                           href="<?= site_url('orders/pesan/' . $tanaman->id); ?>">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </a>
                    </div>

                </div>
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('main_assets/assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('main_assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>
</html>
