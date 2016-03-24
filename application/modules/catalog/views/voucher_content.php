<div class="container">
	<?= getBread() ?>

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">List User</h3>
				</div>
				<div class="panel-body">
					<?php
					$query = $this->model->join('user','*',array(array('table'=>'privilege_user','parameter'=>'user.roleUser=privilege_user.idRole'),array('table'=>'master_menu','parameter'=>'privilege_user.menuPrivilege=master_menu.idMenu')),"idRole='1' and actionPrivilege='lihat' and namaMenu in('".getController()."','".getFunction()."')");
					?>

					<div class="row">
						<div class="col-md-6 text-left">
							<a href="<?php echo base_url().getModule().'/'.getController('').'/add' ?>"><button type="button" class="btn btn-default btn-primary"><i class="fa fa-plus"> </i> Tambah Data</button></a>
						</div>
					</div>

					<div class="row" style="margin-top:20px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Kode</th>
										<th class="text-center">Judul</th>
										<th class="text-center">Nominal</th>
										<th class="text-center">Minimum Order</th>	
										<th class="text-center">Waktu</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data as $key => $value) 
									{
										?>
										<tr class="gradeU">
											<td style="vertical-align:middle;" class="text-center"><?php echo $no++ ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['kodeCVoucher'] ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['judulCVoucher'] ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['nominalCVoucher'] ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['minimumOrder'] ?></td>
											<td style="vertical-align:middle;" ><?php echo date('d-m-Y',strtotime($value['startDate']))." s.d ".date('d-m-Y',strtotime($value['expiredDate'])) ?></td>
											<td style="vertical-align:middle;" class="text-center">
												<a href="<?php echo base_url() ?>index.php/<?php echo getModule() ?>/<?php echo getController() ?>/add/<?php echo $value['idCVoucher'] ?>">
													<button class="btn btn-icon waves-effect waves-light btn-primary btn-xs m-b-5" data-attr="<?= $value['idCVoucher'] ?>"><i class="fa fa-pencil"></i></button>
												</a>
												<button class="btn btn-icon waves-effect waves-light btn-danger btn-xs m-b-5 delete" data-module="<?= getModule() ?>" data-controller="<?= getController() ?>" data-id="<?= $value['idCVoucher'] ?>"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<?php 
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>