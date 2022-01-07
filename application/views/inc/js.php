<!-- Mainly scripts -->
<script src="<?= base_url()?>PLANTILLA/js/jquery-3.1.1.min.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/popper.min.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/bootstrap.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?= base_url()?>PLANTILLA/js/inspinia.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/pace/pace.min.js"></script>
<!-- Flot -->
<script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.resize.js"></script>
<!-- ChartJS-->
<script src="<?= base_url()?>PLANTILLA/js/plugins/chartJs/Chart.min.js"></script>
<!-- Peity -->
<script src="<?= base_url()?>PLANTILLA/js/plugins/peity/jquery.peity.min.js"></script>
<!-- Peity demo -->
<script src="<?= base_url()?>PLANTILLA/js/demo/peity-demo.js"></script>
<!-- Data Tables -->
<script src="<?= base_url()?>PLANTILLA/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?= base_url()?>PLANTILLA/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
<!-- Sweet alert -->
<script src="<?= base_url()?>PLANTILLA/js/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
            customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');

                $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            }
        }
        ]

    });

    });

</script>