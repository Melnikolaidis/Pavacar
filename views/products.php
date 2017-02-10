<main>
	<div class="row">
			
			<?php $this->load->view('layouts/includes/sidebar');?>
			
			<div class="col-md-9">
					<div class="row">
						<div class="col-md-9">
							<h3 class="text-xs-center m-b-3"><?php echo $title; ?></h3>
						</div>
						<!-- Limit results -->

						<div class="col-md-3">
							<form id="limitResults" action="<?php echo base_url() . $url; ?>">
							<span class="text-muted p-a-2">Προβολή</span>
							<select name="limit" id="limit">
							
							<?php foreach($limitValues as $value) : ?>
							
								<option value="<?php echo $value; ?>" <?php if($this->input->get('limit') == $value) echo 'selected' ?>><?php echo $value; ?></option>
								
							<?php endforeach; ?>
							
							</select>
							</form>
						</div>
				
					</div>
						
					<div class="row products">
					<?php if($products) : ?>
					
						<?php foreach($products as $product) : ?>
						
						<div class="col-md-4">
							<div class="card" style="height: 456px; min-height: 60%;">
								<div class="card-header" style="height: 112px">
									<h4 class="card-title text-xs-center"><?php echo $product->title; ?></h4>
									<h6 class="card-subtitle text-muted text-xs-center"><?php echo $product->description1.' '.$product->description2; ?></h6>
								</div>
									<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->product_image; ?>" class="w-100 p-a-2" height="180" alt="part-image">
								<div class="card-block text-xs-center">
									<p><strong>&euro; <?php echo price_with_tax($product->price); ?></strong></p>
									<a href="<?php echo base_url(); ?>products/details/<?php echo $product->product_id;?>" class="btn btn-primary">Λεπτομέρειες</a>
								</div>
							</div>
						</div>
						
						<?php endforeach; ?>
					<?php else : ?>
					
						<p class="text-center text-muted">Δεν υπάρχουν καταχωρημένα προϊόντα</p>

					<?php endif; ?>
					
					</div>
			</div>
	</div>
</main>