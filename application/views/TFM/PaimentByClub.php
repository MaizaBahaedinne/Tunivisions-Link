<div class="row">
	

	<div class="card col-md-4">
		<div class="card">
			<form action="" method="">
			<div class="card-header">
				<h5>Liste des membre participant au TFM </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecords as $record ) { ?>
					<input type="checkbox" name=""> <?php echo ' '.$record->name ;  ?><br>
				<?php } ?>
				
			</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-primary" value="Valider">
				<input type="reset" class="btn btn-danger" value="Valider">
			</div>
			</form>
		</div>
	</div>
	
	<div class="card col-md-4">
		<div class="card">
			
			<div class="card-header">
				<h5>Liste des membre validé TRANCHE 1 </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT1 as $record ) {
					
				}?>
			</div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>	

	<div class="card col-md-4">
		<div class="card">
			
			<div class="card-header">
				<h5>Liste des membre validé TRANCHE 2 </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT2 as $record ) {
					
				}?>
			</div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>	
		
</div>