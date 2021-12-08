<div class="container-fluid">
	<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus fa-sm"></i> TAMBAH BARANG</button>

	<table class="table table">
		<tr>
			<th>NO.</th>
			<th>NIK KARYAWAN</th>
			<th>NAMA KARYAWAN</th>
			<th>ALAMAT LENGKAP</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		
		<?php 
		$no=1;
		 foreach ($karyawan as $kry):?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $kry->nama_kry ?></td>
				<td><?php echo $kry->keterangan ?></td>
				<td><?php echo $kry->kategori ?></td>
				<td><?php echo $kry->harga ?></td>
				<td><?php echo $kry->stok ?></td>
				<td><?php echo anchor('admin/data_barang/detail/'.$kry->id_kry,'<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_barang/edit/'.$kry->id_kry, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_barang/hapus/'.$kry->id_kry,'<div class="btn btn-danger 	btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
			</tr>

	<?php endforeach ; ?>
	</table>
	</div>
	
<div class="modal fade" id="tambah" tabindex="-1" role="dialog"aria-labelledby="exampleModalLabel"aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" id="exampleModalLabel">form input produk</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
</div>
	<div class="modal-body" >
	<form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama barang</label>
					<input type="text" name="nama_kry" class="form-control">
				</div>
				<div class="form-group">
					<label>keterangan</label>
					<input type="text" name="keterangan" class="form-control">
				</div>
				<div class="form-group">
					<label>Kategori</label>
					<select class="form-control" name="kategori">
						<option>elektronik</option>
						<option>pakaian pria</option>
						<option>pakaian wanita</option>
						<option>pakaian anak-anak</option>
						<option>pakaian olahraga</option>
					</select>
					
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>
				<div class="form-group">
					<label>Stok</label>
					<input type="text" name="stok" class="form-control">
				</div>
				<div class="form-group">
					<label>Gambar</label><br>
					<input type="file" name="gambar" class="form-control">
				</div>
			
	</div>
	<div class="modal-footer">
		<button type="button"class=" btn btn-secondary "data-dismiss="modal">Close</button>
		<button type="submit"class=" btn btn-primary" >simpan</button>
				</div>
			</div>
		</div>
		</form> 
	</div>