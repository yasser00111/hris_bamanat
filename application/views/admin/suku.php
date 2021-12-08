<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">MASTER DATA SUKU</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <table class="table table-bordered tabel_suku">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama Suku</th>
              <th style="width:150px">action</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class="col-md-6" id="frm_suku">
        <form method="POST">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">FORM</h3>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label>Nama Suku</label>
                <input type="text" class="form-control" placeholder="Enter ..." name="nm_suku">
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