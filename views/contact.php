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

<?php if($this->session->flashdata('mail_sent')) : ?>
	<div class="alert alert-success alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<?php echo $this->session->flashdata('mail_sent'); ?>
	</div>
<?php endif; ?>

<main>
	<div class="contact-form">
		<div class="row">
				<p>Αν θέλετε να έρθετε σε επικοινωνία μαζί μας, παρακαλούμε συμπληρώστε την παρακάτω φόρμα:</p>
				<form method="POST" action="<?php echo base_url(); ?>users/contact_mail">
					<div class="form-group">
						<label for="name">Επωνυμία *</label>
						<input type="text" class="form-control" name="name" placeholder="Επωνυμία">
					</div>
					<div class="form-group">
						<label for="email">Διεύθυνση E-mail *</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="subject">Θέμα</label>
						<input type="text" class="form-control" name="subject" placeholder="Θέμα">
					</div>
					<div class="form-group">
						<label for="text-input">Σχόλια *</label>
						<textarea class="form-control" name="comments" rows="5"></textarea>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="newsletter" value="sign_up"> Επιθυμώ να λαμβάνω ειδοποιήσεις για προσφορές</label>
					</div>
						<button type="submit" name="submit" class="btn btn-primary">Αποστολή</button>
				</form>
		</div>
	</div>
</main>