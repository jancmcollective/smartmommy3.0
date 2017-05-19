<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?>

<?php 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$query = 'SELECT * FROM huurders WHERE id= '.$id;
	$result = mysqli_query($conn, $query);
	$huurder = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

		<div class="col-md-9">
			
			<div class="panel panel-default">
				
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title"><?php echo $huurder['achternaam']; ?>, <?php echo $huurder['voorletter']; ?></h3>
				</div>
					
					<div class="panel panel-default">
					
						<div class="panel-body">
						<table class="table">
							<tr>
								<th>Achternaam</th>
								<th>Voorletter(s)</th>
								<th>Telefoonnummer</th>
								<th>Email</th>
								<th>Zoekt in</th>
								<th>Zoekt een</th>
								<th>Tot maximaal</th>
							</tr>
							<tr>
								<td><?php echo $huurder['achternaam']; ?></td>
								<td><?php echo $huurder['voorletter']; ?></td>
								<td><?php echo $huurder['telefoonnummer']; ?></td>
								<td><?php echo $huurder['email']; ?></td>
								<td><?php echo $huurder['woonwensen_plaats']; ?></td>
								<td><?php echo $huurder['woonwensen_type']; ?></td>
								<td><?php echo $huurder['woonwensen_huurprijs']; ?></td>
							</tr>
						</table>
						<a href="huurders.php" class="btn btn-default">Terug</a>
						</div>
					
					</div>

				</div>

			</div>
	
</section>

<?php include('inc/footer.php'); ?>
