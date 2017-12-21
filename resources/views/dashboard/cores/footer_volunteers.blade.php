
<script src="/dashboard_as/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/dashboard_as/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/dashboard_as/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/dashboard_as/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dashboard_as/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dashboard_as/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dashboard_as/dist/js/demo.js"></script>
<!-- page script -->

<script type="text/javascript">
$(function() {
    var oTable = $('#example1').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ url("panel/administrator/data_volunteers") }}'
        },
        columns: [
        {data: 'full_name', name: 'full_name'},
        {data: 'address', name: 'address'},
        {data: 'identity_number', name: 'identity_number'},
        {data: 'phone_number', name: 'phone_number'},
        {data: 'email', name: 'email'},
        {data: 'activate_status', name: 'activate_status'},
        {data: 'action', name: 'action', searchable: false}
    ],
    });
});
</script>
<script>
@if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
@endif
</script>
</body>
</html>