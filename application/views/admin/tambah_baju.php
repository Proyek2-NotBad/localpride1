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
                            <label for="id_kota">Kode Baju</label>
                            <input class="form-control" type="text"  name="nama_penginapan" placeholder="masukkan kode baju">
                        </div>

                        <div class="form-group">
                            <label for="nama_penginapan">Stok</label>
                            <input class="form-control" type="text"  name="nama_penginapan" placeholder="Masukkan stok baju">   
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

                                    if(kode == "" && stok == "" && Harga == ""){
                                        alert("Data Baju Harus di Isi");
                                        return false;
                                    }
                                    if (kode == "") {
                                        alert("Kode Baju Harus di Isi");
                                        return false;
                                    }else if (stok == ""){
                                        alert("Stok Harus di Isi");
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
                    <h3 class="box-title">List Penginapan</h3>
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
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Menu</th>
                        </tr>
                        
						<?php
                        foreach ($baju->result_array() as $baju):?>

                        <p><?= $this->db->select('id_baju, kode_baju,stok, harga, foto'); ?></p>
						
							?>
							<tr>
							<td><?php echo $nomor; ?></td>
								<td>
									<p><?= $baju['id_baju'] ?></p>
								</td>
								<td>
									<p><?= $baju['kode_baju'] ?></p>
								</td>
								<td>
									<p><?= $baju['stok'] ?></p>
								</td>							<td>
                                <p>Rp. <?= number_format($baju['harga']) ?></p>
								</td>

								<td>
                                <img src="<?php echo base_url('foto/admin/tambah/'.$baju['foto']) ?>" width="64" />
								</td>
                                <td>
                                    <?php  echo anchor('Admin/bajudelete/'.$baju['id_baju'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                                </td>
							</tr>
						<?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
