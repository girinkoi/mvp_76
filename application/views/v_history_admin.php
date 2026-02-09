

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama pembeli</th>
                                            <th>Tanaman</th>
                                            <th>Harga</th>
                                            <th>Alamat</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_data as $data) :?>
                                            <tr>
                                                <th><?php echo $data->buyer_name?></th>
                                                <th><?php echo $data->name?></th>
                                                <th><?php echo $data->price?></th>
                                                <th><?php echo $data->address?></th>
                                                <th><?php echo $data->payment_method?></th>
                                                <th>
                                                    <span class="btn btn-success btn-sm">
                                                        <?php echo $data->status?>
                                                    </span>
                                                </th>
                                            </tr>
                                        <?php endforeach; ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->