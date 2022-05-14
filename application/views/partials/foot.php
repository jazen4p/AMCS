    <!-- Scroll reveal -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!-- DataTables -->
    <script src="carta/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="carta/datatable/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="carta/datatable/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="carta/datatable/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="carta/datatable/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
    <script src="carta/datatable/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js"></script>
    <script src="carta/datatable/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="carta/datatable/datatables-fixedheader/js/fixedHeader.bootstrap4.min.js"></script>

    <!-- The compiled JavaScript file -->
    <script src="carta/dist/js/production.js"></script>
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "scrollX": true
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "scrollX": true,
        "scrollY": "300px",
        });
        $('#ex1').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "scrollX": true,
        "scrollY": "300px"
        });
        $('#ex2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "scrollX": true,
        "scrollY": "300px"
        });
        $('#ex3').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "scrollX": false,
        // "scrollY": "300px",
        "order": [[1, "desc"]]
        });
        $('#ex4').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "responsive": false,
        "scrollX": false,
        // "scrollY": "300px",
        "order": [[1, "desc"]]
        });
    });

    </script>

    </body>
</html>
