

  <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Katalog Polo</h2>
                    </div>
                </div>
            </div>

            <div class="container">			
		
		<?php foreach($listpolo->result_object() as $data) : ?>
		<!-- akhir jumbotron -->
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
            <img src="<?= base_url('assets_web/') ?>img/21.jpg" alt="">
				<div class="caption">
					<h3>Kode product 0921</h3>
					<p>Harga <?= $data->harga ?></p>
					<p>Ready Stok <?= $data->stok; ?></p>
					<p><a href="<?= base_url(); ?>Home/detail" class="btn btn-primary" role="button">Lihat</a></p>
				</div>
			</div>
		</div>
			<?php endforeach; ?>
        
	</div>
    </div>