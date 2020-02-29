<div class="row">
	

	<div class="card col-md-4">
		<div class="card">
			<form action="" method="">
			<div class="card-header">
				<h5>Liste des membre participant au TFM </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecords as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" > <?php echo ' '.$record->name ;  ?>
						</label>
					</div>
				<?php } ?>


				<div class="form-check form-check-flat form-check-primary">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input">
											Remember me
										</label>
									</div>
				
			</div>
			<div class="card-footer">
				<input type="submit" class="btn btn-primary" value="Valider">
				<input type="reset" class="btn btn-danger" value="Anuler">
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