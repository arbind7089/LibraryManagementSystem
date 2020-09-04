	<div id="delete_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

			<form class="form-horizontal" method="POST" action="save_fine.php">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Fine</label>
						<div class="controls">
						<input type="text" name="fine" id="fine" placeholder="Fine" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
						<input type="hidden" name="id"  placeholder="id" value="<?php echo $id; ?>">
					</div>
					</div>
					<div class="control-group">
						<div class="controls">
						<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
					</div>
					</div>
			</form>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
