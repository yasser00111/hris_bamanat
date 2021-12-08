<script src="<?php echo base_url("assets_template/") ?>datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets_template/") ?>datatables-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        let inputan = $("#frm_karyawan").find($("form"));
        var id = "";
        load_data();
        $(".reset").click(function() {
            id = "";
            inputan.find($("input[name='NoKontrak']")).val("");
            inputan.find($("input[name='MulaiKontrak']")).val("");
            inputan.find($("input[name='SelesaiKontrak']")).val("");
            inputan.find($("input[name='Dokumen']")).val("");
            inputan.find($("button[type='submit']")).html('<i class="fa fa-save"></i> Save');
        });

        $("#frm_karyawan").find($("form")).submit(function(e) {
            e.preventDefault();
            let no_ktp = inputan.find($("input[name='NoKontrak']")).val();
            let no_bpjs = inputan.find($("input[name='MulaiKontrak']")).val();
            let nama_lengkap = inputan.find($("input[name='SelesaiKontrak']")).val();
            let tempat_lahir = inputan.find($("input[name='Documen']")).val();
            let tgl_lahir = inputan.find($("input[name='TglLahir']")).val();
            let var_agama = inputan.find($("select[name='Agama']")).val();
            let suku = inputan.find($("input[name='Suku']")).val();
            let jk = inputan.find($("input[name='JenisKelamin']")).val();
            $.ajax({
                url: "<?php echo base_url('data/karyawan/save_data') ?>",
                type: "POST",
                data: {
                    idq: id,
                    no_ktp: no_ktp,
                    no_bpjs: no_bpjs,
                    nama_lengkap: nama_lengkap,
                    tempat_lahir: tempat_lahir,
                    TglLahir: tgl_lahir,
                    Agama: var_agama, // variable yang dikirim ke kontroller
                    Suku: suku
                },
                success: function(data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.status == "ok") {
                        load_data();
                        id = "";
                        inputan.find($("input[name='NoKTP']")).val("");
                        inputan.find($("input[name='NoBPJSKes']")).val("");
                        inputan.find($("input[name='NamaLengkap']")).val("");
                        inputan.find($("input[name='TempatLahir']")).val("");
                        inputan.find($("input[name='TglLahir']")).val("")
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
        $('.table_karyawan').on("click", "a", function() {
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
                            url: "<?php echo base_url('data/karyawan/delete_data') ?>",
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
                                inputan.find($("input[name='NoKTP']")).val("");
                                inputan.find($("input[name='NoBPJSKes']")).val("");
                                inputan.find($("input[name='NamaLengkap']")).val("");
                                inputan.find($("input[name='TempatLahir']")).val("");
                                nputan.find($("input[name='TglLahir']")).val("");
                            }
                        });
                    } else {
                        id = "";
                        inputan.find($("input[name='NoKTP']")).val("");
                        inputan.find($("input[name='NoBPJSKes']")).val("");
                        inputan.find($("input[name='NamaLengkap']")).val("");
                        inputan.find($("input[name='TempatLahir']")).val("");
                        inputan.find($("input[name='TglLahir']")).val("");
                    }
                });
            }
            let editData = () => {
                id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= base_url('data/karyawan/search_data') ?>",
                    type: "POST",
                    data: {
                        idq: id
                    },
                    success: function(data) {
                        console.log(data);
                        data = JSON.parse(data);
                        inputan.find($("input[name='NoKTP']")).val(data['value'].NoKTP);
                        inputan.find($("input[name='NoBJSKes']")).val(data['value'].NoBPJSKes);
                        inputan.find($("input[name='NamaLengkap']")).val(data['value'].NamaLengkap);
                        inputan.find($("input[name='TempatLahir']")).val(data['value'].TempatLahir);
                        inputan.find($("input[name='TglLahir']")).val(data['value'].TglLahir);
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
            url: '<?= base_url('data/karyawan/load_data') ?>',
            async: true,
            dataType: 'json',
            contentType: "text/plain",
            success: function(data) {
                // console.log(data);
                if (data.length == 0) {
                    $(".table_karyawan").DataTable().clear().draw();
                }
                $(".table_karyawan").DataTable().clear();
                var no = 1;
                for (var i = 0; i < data.length; i++) {
                    $('.table_karyawan').dataTable().fnAddData([
                        no,
                        data[i].NoKonrak,
                        data[i].MulaiKontrak,
                        data[i].SelesaiKontrak,
                        data[i].RateKontrak,
                        data[i].Dokumen,
                        '<li class="dropdown" style="list-style:none;">' +
                        '<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilihan <span class="caret"></span></a>' +
                        '<ul class="dropdown-menu" role="menu">' +
                        '<li><a href="<?= site_url("data/karyawan/detail/' + data[i].IDKaryawan + '") ?>" data-id="' + data[i].IDKaryawan + '" id="editData"><i class="fa fa-list"></i> Detail</a></li>' +
                        '<li class="divider"></li>' +
                        '<li><a href="<?= site_url("data/karyawan/kontrak/' + data[i].IDKaryawan + '") ?>" data-id="' + data[i].IDKaryawan + '" id="editData"><i class="fa fa-user"></i> Kontrak</a></li>' +
                        '<li class="divider"></li>' +
                        '<li><a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="editData"><i class="fa fa-user"></i>Emergency</a></li>' +
                        '<li class="divider"></li>' +
                        '<li><a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="editData"><i class="fa fa-pencil"></i>Edit</a></li>' +
                        '<li class="divider"></li>' +
                        '<li><a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="hapusData"><i class="fa fa-remove"></i>Hapus</a></li>' +
                        '</ul>' +
                        '</li>'
                        // '<a href=""class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-edit"></i> Edit</a> ' +
                        // '<a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="editData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-edit"></i> Edit</a> ' +
                        // '<a href="javascript:void(0)" data-id="' + data[i].IDKaryawan + '" id="hapusData" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-remove"></i> Delete</a> '
                    ]);
                    no++;
                }
            }
        });
    }
</script>