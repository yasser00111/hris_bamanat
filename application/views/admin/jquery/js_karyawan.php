<script src="<?= base_url('assets_template/'); ?>jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    function load_data() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url('master/karyawan/data') ?>',
            async: true,
            dataType: 'json',
            contentType: "text/plain",
            success: function(data) {
                if (data.length == 0) {
                    $(".tabel_karyawan").DataTable().clear().draw();
                }
                $(".tabel_karyawan").DataTable().clear();
                var no = 1;
                for (var i = 0; i < data.length; i++) {
                    $('.tabel_karyawan').dataTable().fnAddData([
                        no,
                        data[i].NoKTP,
                        data[i].NamaLengkap,
                        data[i], TempatLahir,
                        data[i], TglLahir,
                        '<a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="editData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-edit"></i> Edit</a> ' +
                        '<a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="hapusData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-remove"></i> Delete</a> '
                    ]);
                    no++;
                }
            }
        });
    }
</script>