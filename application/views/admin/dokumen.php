<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">MASTER JENIS DOKUMEN</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered tabel_dokumen">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Jenis Dokumen</th>
              <th style="width:150px">action</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class="col-md-6" id="frm_dokumen">
        <form method="POST">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">FORM</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Jenis Dokumen</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="nm_dokumen">
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
</div>