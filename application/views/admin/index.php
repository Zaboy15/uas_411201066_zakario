<div class="page-header">
	<h3>Dashboard</h3>
</div>

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-folder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php echo $this->m_rental->get_data('macbook')->num_rows(); ?>
						</div>
						<div>Jumlah Macbook</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'macbook/macbook' ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-user"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php echo $this->m_rental->get_data('kostumer')->num_rows(); ?>
						</div>
						<div>Jumlah Kostumer</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/kostumer' ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-sort"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php echo $this->m_rental->get_data('transaksi')->num_rows(); ?>
						</div>
						<div>Jumlah Transaksi</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/transaksi' ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-md-6">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphicon-ok"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php echo $this->m_rental->edit_data(array('transaksi_status'=>1),'transaksi')->num_rows(); ?>
						</div>
						<div>Rental Selesai</div>
					</div>
				</div>
			</div>
			<a href="<?php echo base_url().'admin/transaksi' ?>">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="glyphicon glyphicon-road "></i> Macbook</h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($macbook as $m){ ?>
					<a href="#" class="list-group-item">
						<span class="badge alert-info"><?php if($m->macbook_status == 1){echo "Tersedia";}else{echo "Dirental";} ?></span>
						<i class="glyphicon glyphicon-cd"></i> <?php echo $m->macbook_type; ?>
					</a>				
					<?php } ?>
				</div>
				<div class="text-right">
					<a href="<?php echo base_url().'macbook/macbook' ?>">Lihat Semua Macbook <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>				
			</div>
		</div>
	</div>
	
	<div class="col-lg-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="glyphicon glyphicon-user o"></i> Kostumer Terbaru</h3>
			</div>
			<div class="panel-body">
				<div class="list-group">
					<?php foreach($kostumer as $k){ ?>
					<a href="#" class="list-group-item">
						<span class="badge alert-success"><?php echo $k->kostumer_jk ?></span>
						<i class="glyphicon glyphicon-user"></i> <?php echo $k->kostumer_nama; ?>
					</a>				
					<?php } ?>
				</div>
				<div class="text-right">
					<a href="<?php echo base_url().'admin/kostumer' ?>">Lihat Semua Kostumer <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-5">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="glyphicon glyphicon-shopping-cart"></i> Peminjaman Terakhir</h3>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Tgl. Transaksi</th>								
								<th>Tgl. Pinjam</th>
								<th>Tgl. Kembali</th>
								<th>Total</th>								
							</tr>
						</thead>
						<tbody>							
							<?php 
							foreach($transaksi as $t){
								?>
								<tr>
									<td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_pinjam)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($t->transaksi_tgl_kembali)); ?></td>								
									<td><?php echo "Rp. ".number_format($t->transaksi_harga)." ,-"; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'admin/transaksi' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
				<!-- /.row -->