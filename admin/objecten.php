<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?> 

	<div class="col-md-9">
	
		<div class="panel panel-default">
			
			<div class="panel-heading main-color-bg">
			<h3 class="panel-title">10 nieuwste objecten</h3>
			</div>
			
				<div class="panel panel-default">
				<?php $query = 'SELECT * FROM objecten';
				$result = mysqli_query($conn, $query);
				$objecten = mysqli_fetch_all($result, MYSQLI_ASSOC);
				mysqli_free_result($result);

				$query_dropdown = "SELECT * FROM type";

				$result_dropdown = mysqli_query($conn, $query_dropdown);


				mysqli_close($conn);
				?>
				
					<div class="panel-body">
					<table class="table">
						<tr>
							<th>Straatnaam</th>
							<th>Huisnummer</th>
							<th>Plaats</th>
							<th>Type</th>
							<th>Aantal slaapkamers</th>
							<th>Huurprijs</th>
						</tr>
							
						<?php foreach($objecten as $object): ?>
						<tr>
							<td><?php echo $object['straatnaam']; ?></td>
							<td><?php echo $object['huisnummer']; ?></td>
							<td><?php echo $object['plaats']; ?></td>
							<td><?php echo $object['type']; ?></td>
							<td><?php echo $object['huurprijs']; ?></td>
							<td><a href="object.php?id=<?php echo $object['id']; ?>" class="btn btn-default">Meer</a></td>
						</tr>
						<?php endforeach; ?>
										
					</table>
					</div>
				
				</div>
				
					<div class="panel panel-default">
					
						<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Object toevoegen</h3>
						</div>
							
							<div class="panel-body">
							<form method="post" action="add_object.php">
							
								<div class="form-group">
								<label for="straatnaam">Straatnaam</label>
								<input type="text" class="form-control" id="straatnaam" placeholder="Straatnaam" name="straatnaam">
								</div>

								<div class="form-group">
								<label for="huisnummer">Huisnummer</label>
								<input type="text" class="form-control" id="huisnummer" placeholder="Huisnummer" name="huisnummer">
								</div>

								<div class="form-group">
								<label for="toevoeging">Toevoeging</label>
								<input type="text" class="form-control" id="toevoeging" placeholder="Toevoeging" name="toevoeging">
								</div>

								<div class="form-group">
								<label for="postcode">Postcode</label>
								<input type="text" class="form-control" id="postcode" placeholder="Postcode" name="postcode">
								</div>

								<div class="form-group">
								<label for="plaats">Plaats</label>
								<input type="text" class="form-control" id="plaats" placeholder="Plaats" name="plaats">
								</div>
								
								<div class="form-group">
								<label for="type">Type</label>
								<select type="radio" class="form-control" id="type" placeholder="type" name="type">
								<?php while($row1 = mysqli_fetch_array($result_dropdown)):;?>
								<option><?php echo $row1[1]; ?></option>
								<?php endwhile; ?>
								</select>
								</div>
								

								<div class="form-group">
								<label for="oppervlakte">Oppervlakte in m2</label>
								<input type="text" class="form-control" id="oppervlakte" placeholder="Oppervlakte in m2" name="oppervlakte">
								</div>

								<div class="form-group">
								<label for="slaapkamers">Aantal slaapkamers</label>
								<input type="text" class="form-control" id="slaapkamers" placeholder="Slaapkamers" name="slaapkamers">
								</div>
								<div class="form-group">
								<label for="huurprijs">Huurprijs</label>
								<input type="text" class="form-control" id="huurprijs" placeholder="Huurprijs" name="huurprijs">
								</div>
								<div class="form-group">
								<label for="servicekosten">Servicekosten</label>
								<input type="text" class="form-control" id="servicekosten" placeholder="Servicekosten" name="servicekosten">
								</div>
								<div class="form-group">
								<label for="borg">Borg</label>
								<input type="text" class="form-control" id="borg" placeholder="Borg" name="borg">
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