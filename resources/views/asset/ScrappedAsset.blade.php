@extends('layouts.app')

@section ('content')

    @include('messages.flash')


    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                   Scrapped Assets <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        All Scrapped assets here
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Scrapped Assets</a>
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
                <h3 class="block-title">Scrapped<small>Export Buttons</small></h3>

            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>

                        <th class="d-none d-sm-table-cell" >Sap number</th>
                        <th class="d-none d-sm-table-cell" >User</th>
                        <th class="d-none d-sm-table-cell" >Category</th>
                        <th class="d-none d-sm-table-cell" >Department</th>
                        <th class="d-none d-sm-table-cell" >Model</th>
                        <th class="d-none d-sm-table-cell" >S/N</th>
                        <th class="d-none d-sm-table-cell" >Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($asset as $asset)
                        <tr>

                            <td> {{$asset->sap_no}}  </td>
                            <td> {{$asset->asset_user}}  </td>
                            <td> {{$asset->item->name}}  </td>
                            <td> {{$asset->department->name}}  </td>
                            <td> {{$asset->model}}  </td>
                            <td> {{$asset->serial_number}}  </td>
                            <td>
                                <button type="button" class="btn btn-rounded btn-danger mr-1 mb-3" data-toggle="modal" data-target="#modal-block-popout{{$asset->id}}">
                                    unscrap
                                </button>
                                <button type="button" class="btn btn-rounded btn-danger mr-1 mb-3" data-toggle="modal" data-target="#modal-block-slideleft{{$asset->id}}">
                                    delete
                                </button>
                            </td>

                            @include('asset.unscrap')
                            @include('asset.delete')

                            @endforeach
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection





