
</main>

<!-- plugins:js -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>

<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-toggle="offcanvas"]').forEach(function(button) {
      button.addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('offcanvas-hidden')) {
          sidebar.classList.remove('offcanvas-hidden');
        } else {
          sidebar.classList.add('offcanvas-hidden');
        }
      });
    });
  });
</script>

</body>

</html>
