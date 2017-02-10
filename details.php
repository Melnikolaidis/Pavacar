<main>
			<div class="row">
				
				<?php $this->load->view('layouts/includes/sidebar'); ?>
				
				<div class="col-md-9 details mb-1">
					<h6 class="text-xs-center title m-b-1"><?php echo $product->title; ?></h6>
					<div class="col-md-8">
						<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->product_image; ?>" class="w-100 p-a-3 m-b-1" alt="Part image">
						<div class="description m-b-1">
							<h6 class="text-xs-center">Πληροφορίες</h6>
							<p><?php echo $product->text; ?></p>
							<h6 class="text-xs-center">Τεχνικά Χαρακτηριστικά</h6>
							<ul class="list-group">
								<li class="list-group-item m-b-2">Κωδικός: <span class="text-muted"><?php echo $product->product_id; ?></span></li>
								<li class="list-group-item m-b-2">Εφαρμογή: <span class="text-muted"><?php echo $product->description1.' '.$product->description2; ?></span></li>
								<li class="list-group-item m-b-2">Κατασκευαστής: <span class="text-muted"><?php echo $product->brand_name; ?></span></li>
								<li class="list-group-item m-b-2">Χώρα Παραγωγής: <span class="text-muted"><?php echo $product->brand_country; ?></span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 m-b-1">
						<div class="brand-image">
							<img src="<?php echo base_url(); ?>assets/images/brands/<?php echo $product->brand_image; ?>" class="w-100 p-a-1 hidden-sm-down" alt="Part image">
						</div>
						<div class="price">
							<h6 class="text-xs-center m-b-2">Τιμή</h6>
							<p class="text-xs-center m-b-3"><strong>&euro; <?php echo price_with_tax($product->price); ?></strong></p>
						</div>
						<div>
							<h6 class="text-xs-center m-b-2">Τηλέφωνα Παραγγελίας</h6>
							<p class="text-xs-center m-b-3">210 4208074 - 210 4174033</p>
						</div>
					</div>
				</div>
			</div>
		</main>