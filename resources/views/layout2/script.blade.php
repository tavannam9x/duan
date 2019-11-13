<script src="../../adminltes/assets/admin/pages/scripts/index3.js" type="text/javascript"></script>

<script src="../../../adminltes/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../../adminltes/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->

<script src="../../../adminltes/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../../adminltes/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../../adminltes/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features
   QuickSidebar.init(); // init quick sidebar
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<script type="text/javascript">
  $('.xoa').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>

