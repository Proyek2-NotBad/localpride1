

  <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Katalog Sepatu</h2>
                    </div>
                </div>
            </div>

            <div class="container">			

		<?php foreach($listsepatu->result_object() as $data) : ?>
		<!-- akhir jumbotron -->
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
            <img src="<?= base_url('foto/user/'.$data->foto) ?>" alt="">
				<div class="caption">
					<h3>Kode product 0331</h3>
					<p>Harga <?= $data->harga ?></p>
					<p>Ready Stok <?= $data->stok; ?></p>
					<p><a href="<?= base_url(); ?>Home/detail" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>
			<?php endforeach; ?>
	</div>
    </div>
