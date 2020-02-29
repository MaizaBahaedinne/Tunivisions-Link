<div class="row">
	

	<div class="card col-md-4">
		<div class="card">
			<form action="<?php echo base_url() ?>TFM/partanTfmPaiement1" method="post">
			<div class="card-header">
				<h5>Liste des membre participant au TFM | <?php echo count($userRecords) ?> </h5>		
			</div>
			<div class="card-body">
				
				<?php foreach ($userRecords as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" > <?php echo ' '.$record->name ;  ?>
						</label>
					</div>
				<?php } ?>



				
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
			<?php if($userID == 2 ){ ?>
			<form action="<?php echo base_url() ?>TFM/partanTfmPaiement2" method="post">
			<?php } ?>
			<div class="card-header">
				<h5>Liste des membre validé TRANCHE 1 | <?php echo count($userRecordsT1) ?> </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT1 as $record ) { ?>
					<div class="form-check form-check-flat form-check-primary">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="participant[]" value="<?php echo $record->id ; ?>" > <?php echo ' '.$record->name ;  ?>
						</label>
					</div>
				<?php } ?>
			</div>
			<div class="card-footer">
				<?php if($userID == 2 ){ ?>
				<input type="submit" class="btn btn-primary" value="Valider">
				<input type="reset" class="btn btn-danger" value="Anuler">	
				<?php } ?>			
			</div>
			<?php if($userID == 2 ){ ?>
			</form>
			<?php } ?>
		</div>

	</div>	

	<div class="card col-md-4">
		<div class="card">
			
			<div class="card-header">
				<h5>Liste des membre validé TRANCHE 2  | <?php echo count($userRecordsT2) ?> </h5>				
			</div>
			<div class="card-body">
				<?php foreach ($userRecordsT2 as $record ) { ?>
					 <?php echo ' '.$record->name ;  ?><br>
				<?php } ?>
			</div>
			<div class="card-footer">
				
			</div>
			
		</div>

	</div>	
		
</div>