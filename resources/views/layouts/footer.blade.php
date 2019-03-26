<!-- Footer -->
<footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="" target="_blank">Idris</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.1</a> &copy; <span data-toggle="year-copy">{{\Carbon\Carbon::now()->year}}</span>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/js/oneui.core.min.js')}}"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script> $('div.alert').delay(3000).slideUp(300); </script>
<script src="{{asset('assets/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_pages_dashboard.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_forms_wizard.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>



<script type="text/javascript">
    $(function()
    {
        $('#add').click(function()
        {
            addnewrow();
        });
        $('body').delegate('.remove','click',function()
        {
            $(this).parent().parent().remove();

        });

    });

    function addnewrow() {

        var n = ($('.detail tr').length - 0) + 1;
        var tr = '<tr>' +


            '<td class="no">' + n + '</td>' +
            '<td><input type="text" class="form-control " name="sap_no[]"   ></td>' +
            '<td><input type="text" class="form-control " name="asset_user[]"   ></td>' +
            '<td><input type="text" class="form-control " name="model[]"  ></td>' +
            '<td><input type="text" class="form-control " name="serial_number[]"   ></td>' +

            '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove">X</button></td>' +
            '</tr>';


        $('.detail').append(tr);


    }

</script>









