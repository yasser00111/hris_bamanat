<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">DATA KARYAWAN </h3>
    <div class="box-tools pull-right">
      <a href="#" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-refresh"></i> Reload</a>
      <a href="<?php echo base_url('data/karyawan/create') ?>" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-plus"></i> Add</a>
      <a href="#" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-search"></i> Search</a>
      <a href="#" class="btn bg-maroon btn-flat btn-box-tool"><i class="fa fa-print"></i> Report</a>
    </div>
  </div>
  <div class="box-body">
    <table class="table table-bordered table_karyawan">
      <thead>
        <tr>
          <th style="width: 10px">NO</th>
          <th style="width:10px">NO KTP</th>
          <th style="width:150px">NAMA LENGKAP</th>
          <th style="width:150px">TEMPAT LAHIR</th>
          <th style="width:80px">TANGGAL LAHIR</th>
          <th style="width:80px">AGAMA</th>
          <th style="width:80px">SUKU</th>
          <th style="width:80px">DOH</th>
          <th style="width:100px">STATUS</th>
          <th style="width:100px">ACTION</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>





<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">EDIT DATA KARYAWAN </h3>
  </div>
  <div class="box-body">
    <div class="" id="frm_karyawan">
      <form method="POST">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">FORM</h3>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label>NO. KTP</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="NoKTP">
            </div>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="NamaLengkap">
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="TempatLahir">
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" placeholder="Enter ..." name="TglLahir">
            </div>
            <div class="form-group">
              <label>Agama</label>
              <select name="Agama" id="" class="form-control">
                <option value="">Pilih Data</option>
                <?php foreach ($DataAgama as $item) { ?>
                  <option value="<?= $item->IDAgama; ?>"><?= strtoupper($item->Agama); ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Suku</label>
              <select name="Agama" id="" class="form-control">
                <option value="">Pilih Data</option>
                <?php foreach ($DataSuku as $item) { ?>
                  <option value="<?= $item->IDSuku; ?>"><?= strtoupper($item->Suku); ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>J-Kelamin</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="JenisKelamin">
            </div>
            <!-- <div class="form-group">
              <label>ID Karyawan</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="IDKaryawan">
            </div> -->
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" placeholder="Enter ..." name="StatusAktif">
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn bg-green btn-flat"><i class="fa fa-save"></i> Save</button>
            <button type="reset" class="btn bg-yellow btn-flat reset"><i class="fa fa-refresh"></i> Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>