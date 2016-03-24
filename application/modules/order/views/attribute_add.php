<div class="container">
	<?= getBread() ?>	

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Tambah Atribut</h3>
				</div>
				<div class="panel-body">
					<div class="row"> 
						<div class="col-lg-12"> 
							<form class="form-horizontal" role="form" method="post" action="<?php echo base_url() ?>index.php/<?php echo getModule() ?>/<?php echo getController() ?>/save">
								<input type="hidden" name="idoAttribute" class="form-control" value="<?php echo ($getAttributes) ? $getAttributes[0]['idOAttribute'] : "" ?>">
								<?php echo input_text_group('nameOAttributes','Nama',(@$getAttributes[0]['nameOAttributes']) ? @$getAttributes[0]['nameOAttributes'] : set_value('nameOAttribute'),'Nama Atribut','required') ?>
								<?php echo select_join_multiple_group('namaMenu','idMenu,namaMenu','master_menu','idMenu','idMenu','Menu Atribut',"idModule=6",($getAttributes) ? $getAttributes[0]['idMenu'] : '','','','Kosongkan jika ini bukan atribut spesial') ?>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
									&nbsp;
									<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Batal</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>