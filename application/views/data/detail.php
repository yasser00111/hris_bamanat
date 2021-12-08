<div class="box box-primary col-md-5">
  <div class="box-header with-border">
    <h3 class="box-title">DETAIL KARYAWAN</h3>
    <div class="box-tools pull-right">
      <button class="btn bg-maroon btn-flat btn-box-tool" onclick="fungsiBiodata()"><i class="fa fa-refresh"></i> Biodata</button>
      <button class="btn bg-maroon btn-flat btn-box-tool" onclick="fungsiBpjs()"><i class="fa fa-refresh"></i> NPWP</button>
      <button class="btn bg-maroon btn-flat btn-box-tool" onclick="fungsiNPWP()"><i class="fa fa-refresh"></i> BPJS
    </div>
    <!-- Data Biodata -->
    <div class="box-body" id="biodata">
      <form>
        <div class="row">
          <hr>
          <div class="col col-md-5">
            <span class="col-md-3">NO KTP</span>
            <span class="col-md-6"><?= $detail->NoKTP ?></span>
          </div>
          <div class="col col-md-5">
            <span class="col-md-3">NAMA LENGKAP</span>
            <span class="col-md-6">Muh yasser</span>
          </div>
        </div>
        <div class="row">
          <hr>
          <div class="col col-md-5">
            <span class="col-md-3">ALAMAT</span>
            <span class="col-md-6"><?= $detail->TempatLahir; ?></span>
          </div>
          <div class="col col-md-5">
            <span class="col-md-3">JENIS KELAMIN</span>
            <span class="col-md-6"><?= $detail->JenisKelamin; ?></span>
          </div>
        </div>
        <div class="row">
          <hr>
          <div class="col col-md-5">
            <span class="col-md-3">TEMPAT lAHIR</span>
            <span class="col-md-6"><?= $detail->TempatLahir; ?></span>
          </div>
          <div class="col col-md-5">
            <span class="col-md-3">TANGGAL LAHIR</span>
            <span class="col-md-6"><?= $detail->TglLahir; ?></span>
          </div>
        </div>
        <div class="row">
          <hr>
          <div class="col col-md-5">
            <span class="col-md-3">NOMOR REKENING</span>
            <span class="col-md-6"><?= $detail->NoRekening ?></span>
          </div>
          <div class="col col-md-5">
            <span class="col-md-3">NAMA REKENING</span>
            <span class="col-md-6"><?= $detail->NamaLengkapNorek; ?></span>
          </div>
        </div>
      </form>
    </div>
    <!-- data BPJS -->
    <div class="box-body" id="bpjs" style="display:none;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th style="width:110px">ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th style="width:150px">TANGGAL PENGAMBILAN</th>
            <th style="width:80px">HELM</th>
            <th style="width:80px">KACA MATA</th>
            <th style="width:80px">VEST</th>
            <th style="width:80px">SEPATU</th>
            <th style="width:100px">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>123456</td>
            <td>Update software</td>
            <td>2 Juli 2021</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td>
              <a href="#" class="btn bg-blue btn-flat btn-box-tool"><i class="fa fa-eye"></i> Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- Data NPWP -->
    <div class="box-body" id="npwp" style="display:none;">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th style="width:110px">ID KARYAWAN</th>
            <th>NAMA KARYAWAN</th>
            <th style="width:150px">TANGGAL PENGAMBILAN</th>
            <th style="width:80px">HELM</th>
            <th style="width:80px">KACA MATA</th>
            <th style="width:80px">VEST</th>
            <th style="width:80px">SEPATU</th>
            <th style="width:100px">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>123456</td>
            <td>Update software</td>
            <td>2 Juli 2021</td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td><i class="fa fa-remove"></i></td>
            <td><i class="fa fa-check"></i></td>
            <td>
              <a href="#" class="btn bg-blue btn-flat btn-box-tool"><i class="fa fa-eye"></i> Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>







  <div class="container col-md-12">


    <br />

    <!-- <button class="btn btn-primary" onclick="fungsiBiodata()">Biodata</button>
  <button class="btn btn-primary" onclick="fungsiBpjs()">BPJS</button>
  <button class="btn btn-primary" onclick="fungsiNPWP()">NPWP</button> -->
    <div class="collapse" id="biodata" style="display:none;">
      <div class="card card-body">
        <section>
          <form>
            <div class="form-group col-md-12">
              <label for="exampleInputEmail1">NIK KTP</label>
              <h6>123456</h6>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
              </script>
            </div>
        </section>
      </div>
    </div>
    <script>
      function fungsiBiodata() {
        var x = document.getElementById("biodata");
        var a = document.getElementById("bpjs");
        var u = document.getElementById("npwp")
        if (x.style.display === "none") {
          x.style.display = "block";
          a.style.display = "none";
          u.style.display = "none";
        } else {
          x.style.display = "none";
        }
      }
    </script>
    <script>
      function fungsiBpjs() {
        var z = document.getElementById("bpjs");
        var y = document.getElementById("biodata");
        var x = document.getElementById("npwp");
        if (z.style.display === "none") {
          z.style.display = "block";
          y.style.display = "none";
          x.style.display = "none";
        } else {
          z.style.display = "none";
        }
      }
    </script>
    <script>
      function fungsiNPWP() {
        var b = document.getElementById("biodata");
        var c = document.getElementById("bpjs");
        var x = document.getElementById("npwp");
        if (x.style.display === "none") {
          x.style.display = "block";
          b.style.display = "none";
          c.style.display = "none";
        } else {
          x.style.display = "none";
        }
      }
    </script>
  </div>