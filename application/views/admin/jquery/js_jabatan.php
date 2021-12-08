<script src="<?= base_url('assets_template/'); ?>jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		let inputan = $("#frm_jabatan").find($("form"));
		var id = "";
		load_data();
		$(".reset").click(function() {
			id = "";
			inputan.find($("input[name='nm_jabatan']")).val("");
			inputan.find($("button[type='submit']")).html('<i class="fa fa-save"></i> Save');
		});

		$("#frm_jabatan").find($("form")).submit(function(e) {
			e.preventDefault();
			let jabatan = inputan.find($("input[name='nm_jabatan']")).val();
			$.ajax({
				url: "<?php echo base_url('master/jabatan/save') ?>",
				type: "POST",
				data: {
					idq: id,
					namajabatan: jabatan
				},
				success: function(data) {
					data = JSON.parse(data);
					if (data.status == "ok") {
						load_data();
						id = "";
						inputan.find($("input[name='nm_jabatan']")).val("");
						inputan.find($("button[type='submit']")).html('<i class="fa fa-save"></i> Save');
						Swal({
							title: "Success",
							text: "Data berhasil disimpan",
							type: "success"
						});
					} else {
						Swal({
							title: "Gagal",
							text: "Data tidak disimpan",
							type: "error"
						});
					}
				}
			})
		})
		$('.tabel_jabatan').on("click", "a", function() {
			let action = $(this).attr("id");
			id = $(this).attr("data-id");
			let hapusData = () => {
				Swal.fire({
					title: "Anda yakin?",
					text: "Data akan dihapus!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#3085d6",
					cancelButtonColor: "#d33",
					confirmButtonText: "Hapus!"
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: "<?php echo base_url('master/jabatan/remove') ?>",
							type: "POST",
							data: {
								idq: id
							},
							success: function(data) {
								data = JSON.parse(data);
								if (data.status == "ok") {
									load_data();
									Swal({
										title: "Success",
										text: "Data berhasil dihapus",
										type: "success"
									});
								} else {
									Swal({
										title: "Gagal",
										text: "Data tidak berhasil dihapus",
										type: "error"
									});
								}
								id = "";
								inputan.find($("input[name='nm_jabatan']")).val("");
							}
						});
					} else {
						id = "";
						inputan.find($("input[name='nm_jabatan']")).val("");
					}
				});
			}
			let editData = () => {
				id = $(this).attr("data-id");
				$.ajax({
					url: "<?php echo base_url('master/jabatan/view') ?>",
					type: "POST",
					data: {
						idq: id
					},
					success: function(data) {
						data = JSON.parse(data);
						inputan.find($("input[name='nm_jabatan']")).val(data['value'].Jabatan);
						inputan.find($("button[type='submit']")).html('<i class="fa fa-save"></i> Update');
					}
				});
			}
			switch (action) {
				case "hapusData":
					hapusData();
					break;
				case "editData":
					editData();
					break;
			}
		})
	});

	function load_data() {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url('master/jabatan/data') ?>',
			async: true,
			dataType: 'json',
			contentType: "text/plain",
			success: function(data) {
				if (data.length == 0) {
					$(".tabel_jabatan").DataTable().clear().draw();
				}
				$(".tabel_jabatan").DataTable().clear();
				var no = 1;
				for (var i = 0; i < data.length; i++) {
					$('.tabel_jabatan').dataTable().fnAddData([
						no,
						data[i].Jabatan,
						'<a href="javascript:void(0)" data-id="' + data[i].IDJabatan + '" id="editData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-edit"></i> Edit</a> ' +
						'<a href="javascript:void(0)" data-id="' + data[i].IDJabatan + '" id="hapusData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-remove"></i> Delete</a> '
					]);
					no++;
				}
			}
		});
	}
</script>