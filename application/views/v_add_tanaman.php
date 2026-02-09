
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Form Add Group</h1>
    <div class="card">
        <form action="<?php echo site_url('tanaman/add') ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputUsername">Nama Tanaman</label>
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputUsername" placeholder="Masukan Nama Tanaman" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Harga</label>
                    <input type="text" placeholder="Masukan Harga" class="form-control" id="exampleInputDescription" name="price" aria-describedby="passwordHelp">
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                                Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>