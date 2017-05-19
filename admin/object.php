<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?>

<?php 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$query = 'SELECT * FROM objecten WHERE id= '.$id;
	$result = mysqli_query($conn, $query);
	$object = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

		<div class="col-md-9">
			
			<div class="panel panel-default">
				
				<div class="panel-heading main-color-bg">
				<h3 class="panel-title"><?php echo $object['straatnaam']; ?> <?php echo $object['huisnummer']; ?></h3>
				</div>
					
					<div class="panel panel-default">
					
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
							<tr>
								<td><?php echo $object['straatnaam']; ?></td>
								<td><?php echo $object['huisnummer']; ?></td>
								<td><?php echo $object['plaats']; ?></td>
								<td><?php echo $object['type']; ?></td>
								<td><?php echo $object['slaapkamers']; ?></td>
								<td><?php echo $object['huurprijs']; ?></td>
							</tr>
						</table>
						<a href="objecten.php" class="btn btn-default">Terug</a>
						</div>
					
					</div>

				</div>

			</div>
	
</section>

<?php include('inc/footer.php'); ?>
