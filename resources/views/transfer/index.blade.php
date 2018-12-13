@extends('layouts.app')

@section ('content')

    @include('messages.flash')

    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <h1>Transfers</h1>
            <br/>

            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                <tr>

                    <th>Identification Number</th>
                    <th>Item Category</th>
                    <th>Previous user</th>
                    <th>Transfered user</th>
                    <th>Previous department</th>
                    <th>Transfered department</th>
                    <th>Date of transfer</th>

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