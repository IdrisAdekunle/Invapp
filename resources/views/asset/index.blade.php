@extends('layouts.app')

@section ('content')

    @include('messages.flash')

    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <h1>Assets</h1>
            <br/>
            <a href="{{url('/ScrapExport')}}" id="link"> <img src="{{asset('img/Office-Excel-icon.png')}}" style="float: right;width: 30px;height: 30px;"></a>

            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                <tr>

                    <th>Identification Number</th>
                    <th>Asset sap number</th>
                    <th>Asset user</th>
                    <th>Item Category</th>
                    <th>Department</th>
                    <th>Model</th>
                    <th>Serial Number</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($asset as $asset)
                    <tr>

                        <td> {{$asset->identification_no}}  </td>
                        <td> {{$asset->sap_no}}  </td>
                        <td> {{$asset->asset_user}}  </td>
                        <td> {{$asset->item->name}}  </td>
                        <td> {{$asset->department->name}}  </td>
                        <td> {{$asset->model}}  </td>
                        <td> {{$asset->serial_number}}  </td>
                        <td class="td-actions"><a href="{{route('asset.edit',$asset->sap_no)}}" class="btn btn-small btn-success"><i class="btn-icon-only icon-copy"> </i></a>
                            <a data-toggle="modal" data-target="#ScrapModal{{$asset->id}}" class="btn btn-danger btn-small">
                                <i class="btn-icon-only icon-trash"> </i></a></td>

                  @include('asset.scrap')


                        @endforeach
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

    <script>

        $(".table") .DataTable();

    </script>

    @endsection