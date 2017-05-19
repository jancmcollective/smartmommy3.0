<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?>

<?php 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$query = 'SELECT * FROM verhuurders WHERE id= '.$id;
	$result = mysqli_query($conn, $query);
	$verhuurder = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

		<div class="col-md-9">
			
			<div class="panel panel-default">
				
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title"><?php echo $verhuurder['achternaam']; ?></h3>
				</div>
					
					<div class="panel panel-default">
					
						<div class="panel-body">
						<table class="table">
							<tr>
								<th>Bedrijfsnaam</th>
								<th>Achternaam</th>
								<th>Voornaam</th>
								<th>Email</th>
								<th>Telefoonnummer</th>
							</tr>
							<tr>
								<td><?php echo $verhuurder['bedrijfsnaam']; ?></td>
								<td><?php echo $verhuurder['achternaam']; ?></td>
								<td><?php echo $verhuurder['voornaam']; ?></td>
								<td><?php echo $verhuurder['email']; ?></td>
								<td><?php echo $verhuurder['telefoonnummer']; ?></td>
							</tr>
						</table>
						<a href="verhuurders.php" class="btn btn-default">Terug</a>
						</div>
					
					</div>

				</div>

			</div>
	
</section>

<?php include('inc/footer.php'); ?>
