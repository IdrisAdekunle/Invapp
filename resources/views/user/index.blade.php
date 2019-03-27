@extends('layouts.app')



@section('content')

   @include('messages.flash')

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    User <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        All users here
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">users</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- END Hero -->

    <!-- Dynamic Table with Export Buttons -->
    <div class="content">

        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Users<small>Export Buttons</small></h3>

            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>

                        <th class="d-none d-sm-table-cell" style="width: 1%;">ID</th>
                        <th class="d-none d-sm-table-cell">Name</th>
                        <th class="d-none d-sm-table-cell">Email</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td> {{$i++}} </td>
                            <td>
                                <a href="">{{$user->name}}</a>
                            </td>
                            <td>
                                <a href="">{{$user->email}}</a>
                            </td>


                                @endforeach


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>



@endsection