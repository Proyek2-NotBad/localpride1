<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Baju</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url(). 'Admin/bajuadd'; ?>" name="form"  onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">


                        <div class="form-group">
                            <label for="kode">Kode Baju</label>
                            <input class="form-control" type="text"  name="kode" placeholder="masukkan kode baju">
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input class="form-control" type="text"  name="stok" placeholder="Masukkan stok baju">   
                        </div>

                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input class="form-control" type="text"  name="ukuran" placeholder="Masukkan stok baju">   
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <script>
                                function validateForm() {
                                var kode = document.forms["form"]["kode_baju"].value;
                                var harga = document.forms["form"]["harga"].value;
                                var stok = document.forms["form"]["stok"].value;
                                var ukuran = document.forms["form"]["ukuran"].value;

                                    if(kode == "" && stok == "" && Harga == "" && ukuran == ""){
                                        alert("Data Baju Harus di Isi");
                                        return false;
                                    }
                                    if (kode == "") {
                                        alert("Kode Baju Harus di Isi");
                                        return false;
                                    }else if (stok == ""){
                                        alert("Stok Harus di Isi");
                                        return false;
                                    }else if (ukuran == ""){
                                        alert("Ukuran Harus di Isi");
                                        return false;
                                    }else if (harga == ""){
                                        alert("Harga Harus di Isi");
                                        return false;
                                    }
                                }
                        </script>
                        
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
                    <h3 class="box-title">List Data Baju</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-hover">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ID </th>
                            <th>Kode Baju</th>
                            <th>Stok</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Menu</th>
                        </tr>
                        
						
                        <?php $nomor = 1;
                            foreach ($baju as $data) :?>
							<tr>
                            
                            
                            <td><?= $nomor++; ?></td>
								<td>
									<p><?=  $data['id_baju']; ?></p>
								</td>
								<td>
									<p><?=  $data['kode_baju'];?></p>
								</td>
								<td>
									<p><?= $data['stok'] ?></p>
								</td>
                                <td>
									<p><?= $data['ukuran'] ?></p>
								</td>								<td>
                                <p>Rp. <?= number_format($data['harga']) ?></p>
								</td>

								<td>
                                <img src="<?php echo base_url('foto/admin/baju/'.$data['foto']) ?>" width="64" />
								</td>
                                <td>
                                    <?php  echo anchor('Admin/bajudelete/'.$data['id_baju'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                            </td><?php endforeach;?>
							</tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
