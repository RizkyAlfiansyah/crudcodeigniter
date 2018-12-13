<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Premiere League Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bplcon/add'); ?>" class="btn btn-success btn-sm">Add Club</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Club</th>
						<th>Mp</th>
						<th>W</th>
						<th>D</th>
						<th>L</th>
						<th>Pts</th>
						<th>Actions</th>
                    </tr>

                    <?php foreach($bpl as $b){ ?>
                    <tr>
						<td><?php echo $b['id']; ?></td>
						<td><?php echo $b['club']; ?></td>
						<td><?php echo $b['mp']; ?></td>
						<td><?php echo $b['w']; ?></td>
						<td><?php echo $b['d']; ?></td>
						<td><?php echo $b['l']; ?></td>
						<td><?php echo $b['pts']; ?></td>
						<td>
                            <a href="<?php echo site_url('bplcon/edit/'.$b['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bplcon/remove/'.$b['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
