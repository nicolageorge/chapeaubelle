<?php include( __ROOT__ . '/views/partials/header.php' );?>
<?php include( __ROOT__ . '/views/partials/sidebar.php' );?>


<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Adauga Client</h1>
		</div>
	<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	<div class="row">
		<form role="form" method="POST" enctype="multipart/form-data" action="<?php echo $GLOBALS['config']['base_url'];?>/clients/add">
			<div class="form-group">
				<label for="client_name_input">Nume :</label>
				<input type="text" class="form-control" id="client_name_input" name="client_name">
			</div>

			<div class="form-group">
				<label for="client_cui_input">CUI :</label>
				<input type="text" class="form-control" id="client_cui_input" name="client_cui">
			</div>

			<div class="form-group">
				<label for="client_address_input">Adresa :</label>
				<textarea class="form-control" id="client_address_input" name="client_address" ></textarea>
			</div>

			<div class="form-group">
				<label for="client_contact_person_input">Persoana Contact :</label>
				<input type="text" class="form-control" id="client_contact_person_input" name="client_contact_person">
			</div>

			<div class="form-group">
				<label for="client_phone_input">Telefon :</label>
				<input type="text" class="form-control" id="client_phone_input" name="client_phone">
			</div>

			<div class="form-group">
				<label for="client_mail_input">E-Mail :</label>
				<input type="text" class="form-control" id="client_mail_input" name="client_mail">
			</div>

			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->

<?php include( __ROOT__ . '/views/partials/footer.php' ); ?>
