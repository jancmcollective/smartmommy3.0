<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>


		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title">Website overview</h3>
				</div>
					<div class="panel-body">
						<div class="col-md-3">
							<div class="well dash-box">
							<h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 203</h2>
							<h4> Objecten</h4>
							</div>
						</div>
							<div class="col-md-3">
								<div class="well dash-box">
								<h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 203</h2>
								<h4> Verhuurders</h4>
								</div>
							</div>
								<div class="col-md-3">
									<div class="well dash-box">
									<h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 203</h2>
									<h4> Huurders</h4>
									</div>
								</div>
									<div class="col-md-3">
										<div class="well dash-box">
										<h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 203</h2>
										<h4> Dossiers</h4>
										</div>
									</div>
								</div>
							</div>
								<div class="panel panel-default">
									<div class="panel-heading">
									<h3 class="panel-title">Nieuwste objecten</h3>
									</div>
										<div class="panel-body">
											<table class="table table-striped table-hover">
												<tr>
													<th>Adres</th>
													<th>Huurprijs</th>
													<th>Type</th>
												</tr>
												<tr>
													<th>Nieuwstraat 15</th>
													<th>1000</th>
													<th>Appartement</th>
												</tr>
												<tr>
													<th>Hoofdstaat 19B</th>
													<th>1200</th>
													<th>Villa</th>
												</tr>
											</table>
										</div>
								</div>

						<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">Nieuwste huurders</h3>
						</div>
							<div class="panel-body">
							 <table class="table table-striped table-hover">
								<tr>
									<th>Adres</th>
									<th>Huurprijs</th>
									<th>Type</th>
								</tr>
								<tr>
									<th>Nieuwstraat 15</th>
									<th>1000</th>
									<th>Appartement</th>
								</tr>
								<tr>
									<th>Hoofdstaat 19B</th>
									<th>1200</th>
									<th>Villa</th>
								</tr>
							</table>




							</div>
						</div>

						<div class="panel panel-default">
						<div class="panel-heading">
						<h3 class="panel-title">Nieuwste dossiers</h3>
						</div>
							<div class="panel-body">
							 <table class="table table-striped table-hover">
								<tr>
									<th>Adres</th>
									<th>Huurprijs</th>
									<th>Type</th>
								</tr>
								<tr>
									<th>Nieuwstraat 15</th>
									<th>1000</th>
									<th>Appartement</th>
								</tr>
								<tr>
									<th>Hoofdstaat 19B</th>
									<th>1200</th>
									<th>Villa</th>
								</tr>
							</table>




							</div>
						</div>


				</div>
			
			</div>

		</div>

	</section>


		<footer id="footer">

			<p>Copyright</p>
		</footer>



	<!-- Modals -->

	<!-- Object toevoegen -->

<div class="modal fade" id="addobject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Object toevoegen</h4>
      </div>
      <div class="modal-body">
        
							<div class="form-group">
								<label for="exampleInputEmail1">Adres</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Huisnummer</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="exampleInputEmail1">Postcode</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							  </div>
							  <div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							  </div>
							  <div class="checkbox">
								<label>
								  <input type="checkbox"> Check me out
								</label>
							  </div>
					


      </div>
      
	
	
	<?php include('inc/footer.php'); ?>
    
  
