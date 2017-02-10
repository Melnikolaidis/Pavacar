</div>
	<footer>
		<div class="block footer app-block-footer">
			<div class="container">
			<div class="row">
				<div class="col-sm-4 m-b">
					<h6 class="text-uppercase">Στοιχεία επικοινωνίας</h6>
					<hr>
					<p>Διεύθυνση: <strong>Δηλαβέρη 11, Πειραιάς</strong></p>
					<p>Τηλέφωνο: <strong>210 4208074, 210 4174033</strong></p>
					<p>Fax: <strong>210 4133912</strong></p>
					<p>Ε-Mail: <strong>pavacarparts@yahoo.gr</strong></p>
				</div>
				<div class="col-sm-4">
				 <div id="map"></div>
				<script>
					function initMap() {
						var pavacar = {lat: 37.955348, lng: 23.649881};
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 16,
							center: pavacar,
							scrollwheel: false,
							draggable: false
						});
						var marker = new google.maps.Marker({
							position: pavacar,
							map: map
						});
					}
				</script>
				<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzg0cdEVAVX-Xn3eDC6gwrVUX1wSDJlWw&callback=initMap">
				</script>
				</div>
				<div class="col-sm-4">
					<h6 class="text-uppercase">Ωράριο λειτουργίας</h6>
					<hr>
					<p>Δευτέρα - Παρασκευή: <strong>08:00 - 17:00</strong></p>
					<p>Σάββατο: <strong>09:00 - 13:00</strong></p>
				</div>
			</div>
			</div>
		</div>
		<p class="text-xs-center align-baseline copyright">Copyright PaVacar &copy; <?php echo date('Y'); ?> designed with <a href="https://themes.getbootstrap.com/">Bootstrap Themes</a></p>
	</footer>
	
	<script src="<?php echo base_url(); ?>assets/js/toolkit.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/application.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/_main.js" type="text/javascript"></script>
	
</body>
</html>