  <footer class="main-footer">
    <div class="pull-right hidden-xs">PT.Bamanat Amiete Papua</div>
    <strong>Copyright &copy; 2021 <a href="#">PT.Amiete Papua Group</a>.</strong> All rights reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- <script src="<?= base_url('assets_template/'); ?>jquery/dist/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?= base_url('assets_template/'); ?>bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.8/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/1.3.9/daterangepicker.min.js" integrity="sha512-6I+dC+0PN3c07priTvsuKQZ0IZdIiNh8iXNuyuuU9JE9nL9H7l6PLwMsvznGlRaxVWozF1Wn2X7v2WZboLoydg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/1.3.9/moment.js" integrity="sha512-5CMMXeWgCELCLtNr33jjHoGacsgrrOPCofBC4NYVdhkNHusAO05o+SsSy4v1/hmOxtxVACdpxFYANU2w4OreNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?= base_url('assets_template/'); ?>sweetalert2/sweetalert2.all.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js" integrity="sha512-VpQwrlvKqJHKtIvpL8Zv6819FkTJyE1DoVNH0L2RLn8hUPjRjkS/bCYurZs0DX9Ybwu9oHRHdBZR9fESaq8Z8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="<?= base_url('assets_template/'); ?>js/adminlte.min.js"></script>
  <script>
    //Initialize Select2 Elements
    $('.select2').select2()

    $(document).ready(function() {

      $('#daterangepicker').daterangepicker();
      $('#datepicker').datepicker({
        orientation: 'bottom'
      });
    });
  </script>
  <?php $this->load->view($js); ?>

  </body>

  </html>