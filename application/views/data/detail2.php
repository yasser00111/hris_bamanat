<div class="container col-md-12">

  <center>
    <h3>DETAIL KARYAWAN</h3>
  </center>

  <br />

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#biodata" aria-expanded="false" aria-controls="collapseMalasngoding">
    Biodata
  </button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#bpjs" aria-expanded="false" aria-controls="collapseMalasngoding">
    Data BPJS
  </button>

  <div class="collapse" id="biodata">
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


</div>



<div class="collapse" id="bpjs">
  <div class="card card-body">
    <section>
      <form>
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1">DATA BPJS</label>
          <h6>123456</h6>
        </div>
        <div class="form-group col-md-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
    </section>
  </div>
</div>


</div>


<button onclick="fungsiSaya()">Klik Saya</button>
<div id="target">
  Simpan Objek apapun disini untuk dihilangkan/dimunculkan.
</div>
<button onclick="fungsiSaya()">Klik Saya</button>
<div id="target">
  Simpan Objek apapun disini untuk dihilangkan/dimunculkan.
</div>
<script>
  function fungsiSaya() {
    var x = document.getElementById("target");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>





















<?php
$no = 1;
foreach ($karyawan as $kry) : ?>
  <tr>
    <th><?php echo $no++ ?></th>
    <th>
      <!-- <td><?php $kry->NoKTP ?></td> -->
    </th>
    <th>
      <!-- <?php echo $kry->NamaLengkap ?> -->
    </th>
    <td>
      <!-- <?php echo $kry->TempatLahir ?> -->
    </td>
    <td>
      <!-- <?php echo $kry->TglLahir ?> --></i>
    </td>
    <td>
      <!-- <?php echo $kry->Agama ?></i> -->
    </td>
    <td>
      <!-- <?php echo $kry->Suku ?></i> -->
    </td>
    <td>
      <!-- <?php echo $kry->JenisKelamin ?> --></i>
    </td>
    <td>
      <!-- <?php echo $kry->IDKaryawan ?> --></i>
    </td>
    <td>
      <!-- <?php echo $kry->Status ?> -->
    </td>
    <td>
      <div class="btn-group">
        <button type="button" class="btn btn-primary" style="width: 75%; float:left;">ACTIOAN</button><button style="float:left; type=" button" style="float:left;" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span>V</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo base_url('data/karyawan/detail') ?>">Detail Biodata</a><br>
          <a class="dropdown-item" href="edit">Edit Data</a><br>
          <br>
          <a class="dropdown-item" href="<?php echo base_url('data/karyawan/c_document') ?>">Contract Document</a><br>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Emergency Contact</a><br>
          <a class="dropdown-item" href="#">Bank Account</a><br>
          <a class="dropdown-item" href="#">Licence/Certivicate</a>
        </div>
      </div>
    </td>
  </tr>
<?php endforeach; ?>