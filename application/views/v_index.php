<!DOCTYPE html>
<html lang="en">
<body>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
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
                <div class="card h-100">
                    <div class="badge <?= $badge_class?> text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= strtoupper($status) ?>
                    </div>
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">
                                <?php echo $tanaman->name ?>
                            </h5>
                            <span class="text-muted"><?php echo "Rp" . number_format($tanaman->price,0,',','.') ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
