@extends('layouts.app')

@section ('content')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Assets <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Transfers
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Transfers</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- END Hero -->

    <div class="content">

        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Transfers<small>Export Buttons</small></h3>

            </div>
            <div class="block-content block-content-full ">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>

                        <th class="d-none d-sm-table-cell" >Identification Number</th>
                        <th class="d-none d-sm-table-cell" >Category</th>
                        <th class="d-none d-sm-table-cell" >Previous User</th>
                        <th class="d-none d-sm-table-cell" >Transfered User</th>
                        <th class="d-none d-sm-table-cell" >Previous Department</th>
                        <th class="d-none d-sm-table-cell" >Transfered Department</th>
                        <th class="d-none d-sm-table-cell" >Date of transfer</th>
                        <th class="d-none d-sm-table-cell" >Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($transfers as $transfer)
                        <tr>

                            <td> {{$transfer->identification_number}}  </td>
                            <td> {{$transfer->asset_category}}  </td>
                            <td> {{$transfer->previous_user}}  </td>
                            <td> {{$transfer->current_user}}  </td>
                            <td> {{$transfer->previous_department}}  </td>
                            <td> {{$transfer->department->name}}  </td>
                            <td> {{$transfer->created_at->format('F d, Y h:ia') }}  </td>
                            <td>

                                <button type="button" class="btn btn-rounded btn-success mr-1 mb-2" data-toggle="modal" data-target="#modal-block-popout{{$transfer->id}}">
                                    just
                                </button>


                            </td>



@include('transfer.justification')
                            @endforeach
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection


