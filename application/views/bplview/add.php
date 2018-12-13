<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bpl Add</h3>
            </div>
            <?php echo form_open('bplcon/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="club" class="control-label"><span class="text-danger">*</span>Club</label>
						<div class="form-group">
							<input type="text" name="club" value="<?php echo $this->input->post('club'); ?>" class="form-control" id="club" />
							<span class="text-danger"><?php echo form_error('club');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mp" class="control-label"><span class="text-danger">*</span>Mp</label>
						<div class="form-group">
							<input type="text" name="mp" value="<?php echo $this->input->post('mp'); ?>" class="form-control" id="mp" />
							<span class="text-danger"><?php echo form_error('mp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="w" class="control-label"><span class="text-danger">*</span>W</label>
						<div class="form-group">
							<input type="text" name="w" value="<?php echo $this->input->post('w'); ?>" class="form-control" id="w" />
							<span class="text-danger"><?php echo form_error('w');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="d" class="control-label"><span class="text-danger">*</span>D</label>
						<div class="form-group">
							<input type="text" name="d" value="<?php echo $this->input->post('d'); ?>" class="form-control" id="d" />
							<span class="text-danger"><?php echo form_error('d');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="l" class="control-label"><span class="text-danger">*</span>L</label>
						<div class="form-group">
							<input type="text" name="l" value="<?php echo $this->input->post('l'); ?>" class="form-control" id="l" />
							<span class="text-danger"><?php echo form_error('l');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pts" class="control-label"><span class="text-danger">*</span>Pts</label>
						<div class="form-group">
							<input type="text" name="pts" value="<?php echo $this->input->post('pts'); ?>" class="form-control" id="pts" />
							<span class="text-danger"><?php echo form_error('pts');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>