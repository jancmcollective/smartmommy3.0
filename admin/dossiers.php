<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?> 

	<div class="col-md-9">
	
		<div class="panel panel-default">
			
			<div class="panel-heading main-color-bg">
			<h3 class="panel-title">10 nieuwste huurders</h3>
			</div>
			
				<div class="panel panel-default">
				<?php $query = 'SELECT * FROM huurders';
				$result = mysqli_query($conn, $query);
				$huurders = mysqli_fetch_all($result, MYSQLI_ASSOC);
				mysqli_free_result($result);
				mysqli_close($conn);
				?>
				
					<div class="panel-body">
					<table class="table">
						<tr>
							<th>Achternaam</th>
							<th>Voorletter(s)</th>
							<th>E-mail</th>
							<th>Telefoonnummer</th>
							<th>Zoekt in</th>
							<th>Zoekt een</th>
							<th>Tot maximaal</th>
						</tr>
							
						<?php foreach($huurders as $huurders): ?>
						<tr>
							<td><?php echo $huurder['achternaam']; ?></td>
							<td><?php echo $huurder['voorletter']; ?></td>
							<td><?php echo $huurder['email']; ?></td>
							<td><?php echo $huurder['telefoonnummer']; ?></td>
							<td><?php echo $huurder['woonwensen_plaats']; ?></td>
							<td><?php echo $huurder['woonwensen_type']; ?></td>
							<td><?php echo $huurder['woonwensen_huurprijs']; ?></td>
							<td><a href="huurder.php?id=<?php echo $huurder['id']; ?>" class="btn btn-default">Meer</a></td>
						</tr>
						<?php endforeach; ?>
										
					</table>
					</div>
				
				</div>
				
					<div class="panel panel-default">
					
						<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Huurder toevoegen</h3>
						</div>
							
							<div class="panel-body">
							<form method="post" action="add_huurder.php">
							
								<div class="form-group">
								<label for="Achternaam">Achternaam</label>
								<input type="text" class="form-control" id="Achternaam" placeholder="Achternaam" name="Achternaam">
								</div>

								<div class="form-group">
								<label for="Voorletter">Voorletter(s)</label>
								<input type="text" class="form-control" id="Voorletter" placeholder="Voorletter" name="Voorletter">
								</div>

								<div class="form-group">
								<label for="Telefoonnummer">Telefoonnummer</label>
								<input type="text" class="form-control" id="Telefoonnummer" placeholder="Telefoonnummer" name="Telefoonnummer">
								</div>

								<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
								</div>

								<div class="form-group">
								<label for="woonwensen_plaats">Zoekt in</label>
								<input type="text" class="form-control" id="woonwensen_plaats" placeholder="Plaats" name="woonwensen_plaats">
								</div>

								<div class="form-group">
								<label for="woonwensen_type">Zoekt een</label>
								<input type="text" class="form-control" id="woonwensen_type" placeholder="Type woning" name="woonwensen_type">
								</div>

								<div class="form-group">
								<label for="woonwensen_huurprijs">Tot maximaal</label>
								<input type="text" class="form-control" id="woonwensen_huurprijs" placeholder="Bedrag in Euro" name="woonwensen_huurprijs">
								</div>

								<button type="submit" class="btn btn-default">Toevoegen</button>
							
							</form>
							
							</div>
					</div>
					
				</div>
				
				</div>

		</div>
	
	</div>

</section>

<?php include('inc/footer.php'); ?>