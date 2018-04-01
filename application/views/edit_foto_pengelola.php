<div class="page-header">
							<h1>
								Data Sampah 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Edit Foto
								</small>
							</h1>
						</div>


	<div class="row-fluid sortable">
			
				
					<div class="box-content center">
						<form name="autoSumForm" class="form-horizontal" enctype='multipart/form-data' role="form" method="post" id="add_sampah" action="<?php echo base_url();?>index.php/sampah_pengelola/simpan_foto">
							<fieldset>
								<input type="hidden" name="id" value="<?php echo $key->id; ?>">
							
								
							  <div class="control-group">
										<div class="controls">
										<input type="file" id="id-input-file-2" value="<?php echo $key->foto; ?>" name="foto" />	
										
										</div>
									</div>
							  <div class="form-actions">
								<button class="btn btn-info" type="submit" name="submit"><i class="ace-icon fa fa-check bigger-110"></i>Submit</button>
											&nbsp;
								<button class="btn" type="reset"><i class="ace-icon fa fa-undo bigger-110"></i>Reset</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				
			