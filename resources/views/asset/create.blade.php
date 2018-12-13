@extends('layouts.app')

@section('content')

@include('messages.error')
    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-hdd"></i>
                            <h3>Upload assets</h3>
                        </div> <!-- /widget-header -->

                        @include('messages.flash')

                        <form  method="POST" action="{{ url('asset') }}">

                            {{ csrf_field()}}

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" >
                                    <tr>
                                        <td colspan="2" align="center"><h2 style="margin-top:10.5px">  Assets </h2></td>
                                    </tr>

         <br/>
                                        <select class="form-control" id="exampleSelect1" name="item_id">
                                            <option>Choose Item  here</option>
                                            @foreach($items as $item)

                                                <option value="{{$item->id}}">{{$item->name}}</option>

                                            @endforeach

                                        </select>


                                    <br/> <br/>

                                        <select class="form-control" id="exampleSelect1" name="department_id">
                                            <option >Choose department here</option>
                                            @foreach($departments as $department)

                                                <option value="{{$department->id}}">{{$department->name}}</option>

                                            @endforeach

                                        </select>




                                    <br/> <br/>


                                    <table class="table table-bordered table-hover"   >
                                        <tr>
                                        </tr>
                                        <thead>
                                        <th>No</th>
                                        <th>Asset sap number</th>
                                        <th>Asset user</th>
                                        <th>Model</th>
                                        <th>Serial number</th>



                                        <th><input type="button" value="+" id="add" name="fields" class="btnbtn-primary"></th>
                                        </thead>
                                        <tbody class="detail">
                                        <tr>
                                            <td class="no">1</td>

                                            <td><input type="text" class="form-control" name="sap_no[]"   ></td>
                                            <td><input type="text" class="form-control" name="asset_user[]"  ></td>
                                            <td><input type="text" class="form-control" name="model[]" ></td>
                                            <td><input type="text" class="form-control" name="serial_number[]"  ></td>


                                        </tr>
                                        </tbody>
                                    </table>
                                    <center>
                                        <tr>
                                            <td colspan="2" align="center" >
                                                <input type="submit"  class="btn btn-info"  value="Upload" />
                                            </td>
                                        </tr>
                                    </center>
                                </table>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>


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








@endsection