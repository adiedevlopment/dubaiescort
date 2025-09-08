<!-- jQuery -->
<script src="<?php echo asset('/backend/theme/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo asset('/backend/theme/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="<?php echo asset('/backend/theme/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- ChartJS -->
<script src="<?php echo asset('/backend/theme/plugins/chart.js/Chart.min.js'); ?>"></script>

<!-- Sparkline -->
<script src="<?php echo asset('/backend/theme/plugins/sparklines/sparkline.js'); ?>"></script>

<!-- DataTables & Plugins -->
<script src="<?php echo asset('/backend/theme/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

<!-- JQVMap -->
<script src="<?php echo asset('/backend/theme/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo asset('/backend/theme/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>

<!-- daterangepicker -->
<script src="<?php echo asset('/backend/theme/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo asset('/backend/theme/plugins/daterangepicker/daterangepicker.js'); ?>"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo asset('/backend/theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>




<!-- Summernote -->
<script src="<?php echo asset('/backend/theme/plugins/summernote/summernote.min.js'); ?>"></script>

<!-- Summernote Jquery -->

<script src="<?php echo asset('/backend/theme/plugins/s/summernote.min.js'); ?>"></script>


<!-- AdminLTE App -->
<script src="<?php echo asset('/backend/theme/dist/js/adminlte.js'); ?>"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo asset('/backend/theme/dist/js/pages/dashboard.js'); ?>"></script>


<script src="<?php echo asset('/backend/theme/dist/js/script.js'); ?>"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>


