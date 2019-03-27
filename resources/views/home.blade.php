@extends('layouts.app')


@section('content')


    <!-- Hero -->
    <div class="bg-image overflow-hidden" style="background-image: url({{URL::asset('assets/media/photos/photo3@2x.jpg')}});">
        <div class="bg-primary-dark-op">
            <div class="content content-narrow content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                    <div class="flex-sm-fill">
                        <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Welcome {{auth()->user()->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->


    <div class="content content-narrow">
        <!-- Stats -->
        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Departments</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$department_count}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Total Assets</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$total_asset_count}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Available Assets</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$current_asset_count}}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Scrapped Assets</div>
                        <div class="font-size-h2 font-w400 text-dark">{{$scrap_count}}</div>
                    </div>
                </a>
            </div>
        </div>


    <div class="row row-deck">
        <!-- Latest Customers -->
        <div class="col-lg-6">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title"> Categories</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700">Name</th>
                            <th class="font-w700">Number of asset</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>
                                <span class="font-w600">{{$item->name}}</span>
                            </td>
                            <td>
                                <span class="font-w600">{{$item->asset()->count()}}</span>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">Departments</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700">Name</th>
                            <th class="font-w700">Number of asset</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department )
                            <tr>
                                <td>
                                    <span class="font-w600">{{$department->name}}</span>
                                </td>
                                <td>
                                    <span class="font-w600">{{$department->asset()->count()}}</span>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Latest Orders -->
    </div>
    <!-- END Customers and Latest Orders -->
    </div>

    @endsection