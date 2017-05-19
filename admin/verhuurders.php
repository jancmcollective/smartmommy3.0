<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?> 

	<div class="col-md-9">
	
		<div class="panel panel-default">
			
			<div class="panel-heading main-color-bg">
			<h3 class="panel-title">10 nieuwste verhuurders</h3>
			</div>
			
				<div class="panel panel-default">
				<?php $query = 'SELECT * FROM verhuurders';
				$result = mysqli_query($conn, $query);
				$verhuurders = mysqli_fetch_all($result, MYSQLI_ASSOC);
				mysqli_free_result($result);
				mysqli_close($conn);
				?>
				
					<div class="panel-body">
					<table class="table">
						<tr>
							<th>Bedrijfsnaam</th>
							<th>Achternaam</th>
							<th>Voornaam</th>
							<th>Email</th>
							<th>Telefoonnummer</th>
							<th>Meer</th>
						</tr>
							
						<?php foreach($verhuurders as $verhuurder): ?>
						<tr>
							<td><?php echo $verhuurder['bedrijfsnaam']; ?></td>
							<td><?php echo $verhuurder['achternaam']; ?></td>
							<td><?php echo $verhuurder['voornaam']; ?></td>
							<td><?php echo $verhuurder['email']; ?></td>
							<td><?php echo $verhuurder['telefoonnummer']; ?></td>
							<td><a href="verhuurder.php?id=<?php echo $verhuurder['id']; ?>" class="btn btn-default">Meer</a></td>
						</tr>
						<?php endforeach; ?>
										
					</table>
					</div>
				
				</div>
				
					<div class="panel panel-default">
					
						<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Verhuurder toevoegen</h3>
						</div>
							
							<div class="panel-body">
							<form method="post" action="add_verhuurder.php">
							
								<div class="form-group">
								<label for="bedrijfsnaam">Bedrijfsnaam</label>
								<input type="text" class="form-control" id="bedrijfsnaam" placeholder="Bedrijfsnaam" name="bedrijfsnaam">
								</div>

								<div class="form-group">
								<label for="voorletters">Voorletters</label>
								<input type="text" class="form-control" id="voorletters" placeholder="Voorletters" name="voorletters">
								</div>

								<div class="form-group">
								<label for="achternaam">Achternaam</label>
								<input type="text" class="form-control" id="achternaam" placeholder="Achternaam" name="achternaam">
								</div>

								<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
								</div>

								<div class="form-group">
								<label for="telefoonnummer">Telefoonnummer</label>
								<input type="text" class="form-control" id="telefoonnummer" placeholder="Telefoonnummer" c>
								</div>
								
								<div class="checkbox">
								<label for="nieuwsbrief	">
								<input type="checkbox" name="nieuwsbrief" value="1"> Nieuwsbrief aan
								</label>
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