<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Tambah Baju</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->


                <!-- /.box-header -->
                <!-- form start -->
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_penginapan">Kode Baju</label>
                            <input type="text" class="form-control" name="nama_penginapan" placeholder="Masukkan Kode">
                        </div>

                        <div class="form-group">
                            <label for="jumlah_tamu">Stok</label>
                            <input type="text" class="form-control" name="jumlah_tamu" placeholder="Stok Ready">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Baju</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ID </th>
                            <th>Kode Baju</th>
                            <th>Stok Barang</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Hapus</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>