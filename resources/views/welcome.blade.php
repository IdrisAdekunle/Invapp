@extends('layouts.app')

@section('content')

    <div class="row">

                    <div class="span12" >
                        <div class="widget widget-nopad" style="margin-left: 10%;">
                            <div class="widget-header"> <i class="icon-list-alt"></i>
                                <h3> Today's Stats</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="widget big-stats-container">
                                    <div class="widget-content">

                                        <div id="big_stats" class="cf">

                                            <div class="stat"> <h6> Departments </h6> <i class="icon-group"></i> <span class="value">{{$department_count}}</span> </div>
                                            <!-- .stat -->

                                            <div class="stat"><h6>Total Assets</h6> <i class="icon-group"></i> <span class="value">{{$total_asset_count}}</span> </div>
                                            <!-- .stat -->

                                            <div class="stat"><h6> Current Assets</h6> <i class="icon-hdd"></i> <span class="value">{{$current_asset_count}}</span> </div>
                                            <!-- .stat -->
                                            <div class="stat"><h6>Scrapped Assets</h6> <i class="icon-trash"></i> <span class="value">{{$scrap_count}}</span> </div>
                                            <!-- .stat -->

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" >
                    <div class="widget widget-table action-table" style="margin-left: 60%;margin-right:20%;position: absolute;width: 30%;margin-top: 16%">
                        <div class="widget-header"> <i class="icon-book"></i>
                            <h3>Item Categories</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Number of asset</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($items as $item)
                                <tr>
                                    <td>{{$item->name}} </td>
                                    <td>{{$item->asset()->count()}} </td>

                                </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /widget-content -->
                    </div>
                    </div>

                    <div class="widget widget-table action-table" style="margin-left: 10%;margin-right: 50%;width: 30%;">
                        <div class="widget-header"> <i class="icon-group"></i>
                            <h3>Departments</h3>
                        </div>
                        <!-- /widget-header -->
                        <div class="widget-content">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Number of asset</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($departments as $department )
                                <tr>
                                    <td>{{$department->name}} </td>
                                    <td>{{$department->asset()->count()}} </td>

                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /widget-content -->
                    </div>



                </div>


    @endsection