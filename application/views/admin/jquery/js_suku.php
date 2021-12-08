<script src="<?= base_url('assets_template/'); ?>jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		let inputan = $("#frm_suku").find($("form"));
		var id = "";
		load_data();
		$(".reset").click(function() {
			id = "";
			inputan.find($("input[name='nm_suku']")).val("");
			inputan.find($("button[type='submit']")).html('<i class="fa fa-save"></i> Save');
		});

		$("#frm_suku").find($("form")).submit(function(e) {
			e.preventDefault();
			let suku = inputan.find($("input[name='nm_suku']")).val();
			$.ajax({
				url: "<?php echo base_url('master/suku/save') ?>",
				type: "POST",
				data: {
					idq: id,
					namasuku: suku
				},
				success: function(data) {
					data = JSON.parse(data);
					if (data.status == "ok") {
						load_data();
						id = "";
						inputan.find($("input[name='nm_suku']")).val("");
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
		$('.tabel_suku').on("click", "a", function() {
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
							url: "<?php echo base_url('master/suku/remove') ?>",
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
								inputan.find($("input[name='nm_suku']")).val("");
							}
						});
					} else {
						id = "";
						inputan.find($("input[name='nm_suku']")).val("");
					}
				});
			}
			let editData = () => {
				id = $(this).attr("data-id");
				$.ajax({
					url: "<?php echo base_url('master/suku/view') ?>",
					type: "POST",
					data: {
						idq: id
					},
					success: function(data) {
						data = JSON.parse(data);
						inputan.find($("input[name='nm_suku']")).val(data['value'].Suku);
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
			url: '<?php echo base_url('master/suku/data') ?>',
			async: true,
			dataType: 'json',
			contentType: "text/plain",
			success: function(data) {
				if (data.length == 0) {
					$(".tabel_suku").DataTable().clear().draw();
				}
				$(".tabel_suku").DataTable().clear();
				var no = 1;
				for (var i = 0; i < data.length; i++) {
					$('.tabel_suku').dataTable().fnAddData([
						no,
						data[i].Suku,
						'<a href="javascript:void(0)" data-id="' + data[i].IDSuku + '" id="editData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-edit"></i> Edit</a> ' +
						'<a href="javascript:void(0)" data-id="' + data[i].IDSuku + '" id="hapusData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-remove"></i> Delete</a> '
					]);
					no++;
				}
			}
		});
	}
</script>