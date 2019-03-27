@extends('layouts.app')

@section('content')

@include('messages.error')

<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Assets <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                    Upload assets here
                </small>
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">User Interface</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Upload assets</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- END Hero -->

<div class="content">
    <div class="block">
        <div class="block-content text-center">


            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="">

                    @include('messages.flash')

                        <form  method="POST" action="{{ url('asset') }}">

                            {{ csrf_field()}}

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" >
                                    <tr>
                                        <td colspan="2" align="center"><h2 style="margin-top:10.5px">  Assets </h2></td>
                                    </tr>

         <br/>
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="item_id">
                                            <option>Choose Item  here</option>
                                            @foreach($items as $item)

                                                <option value="{{$item->id}}">{{$item->name}}</option>

                                            @endforeach

                                        </select>

                                    </div>



                                    <br/> <br/>
                                    <div class="col-md-3">

                                    <select class="form-control" id="exampleSelect1" name="department_id">
                                            <option >Choose department here</option>
                                            @foreach($departments as $department)

                                                <option value="{{$department->id}}">{{$department->name}}</option>

                                            @endforeach

                                        </select>


                                  </div>

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











@endsection