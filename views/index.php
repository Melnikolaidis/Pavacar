	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	
	<?php if($this->session->flashdata('newsletter_success')) : ?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo $this->session->flashdata('newsletter_success'); ?>
		</div>
	<?php endif; ?>
	
	<?php if($this->session->flashdata('newsletter_fail')) : ?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<?php echo $this->session->flashdata('newsletter_fail'); ?>
		</div>
	<?php endif; ?>	
	
	<div id="main-slider">
		<div class="main-slider">
			<ul>
				<li><img src="<?php echo base_url(); ?>assets/images/slider/bmw-engine2.jpg"></li>
				<li><img src="<?php echo base_url(); ?>assets/images/slider/bmw-engine.jpg"></li>
				<li><img src="<?php echo base_url(); ?>assets/images/slider/bmw-m-perfomance.jpg"></li>
				<li><img src="<?php echo base_url(); ?>assets/images/slider/bmw-brakes.jpg"></li>
				<li><img src="<?php echo base_url(); ?>assets/images/slider/bmw-image.jpg"></li>
			</ul>
		</div>
	</div>
	
	<main>
		<div class="block block-bordered-lg">
			<div class="container app-translate-15" data-transition="entrance">
				<blockquote class="pull-quote">
					<img class="img-circle" src="<?php echo base_url(); ?>assets/images/brands/bmw-logo.png">
					<p>
					Στο κατάστημά μας θα βρείτε γνήσια ανταλλακτικά <strong>BMW</strong> και <strong>Mini</strong>, <br> αλλά και ανταλλακτικά για όλα τα ευρωπαϊκά και ασιατικά αυτοκίνητα
					</p>
				</blockquote>
			</div>
		</div>
		<div class="block block-bordered-lg text-center">
			<div class="container-fluid">
				<p class="lead m-b-md">
					Αν θέλετε να λαμβάνετε ειδοποιήσεις για τις <strong>προσφορές μας</strong> <br>
					συμπληρώστε το e-mail σας στην παρακάτω φόρμα.
				</p>
				<form class="form-inline" method="post" action="<?php echo base_url(); ?>users/newsletter_sign_up">
					<input class="form-control m-b" name="email" type="email" placeholder="Ε-Mail">
					<button class="btn btn-primary m-b" type="submit">Αποστολή</button>
				</form>
				<small class="text-muted">
					Δηλώνω οτι συμφωνώ με τους <a href="<?php echo base_url(); ?>terms.html" target="_blank">όρους χρήσης</a> του ιστότοπου.
				</small>
			</div>
		</div>
	</main>