@extends('layouts.app')

@section ('content')

    @include('messages.flash')


    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <h1>Departments</h1>
            <br/>
            <table class="table table-striped table-condensed table-bordered table-rounded">
                <thead>
                <tr>

                    <th>Name</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($departments as $department)
                    <tr>

                        <td> {{$department->name}}  </td>
                        <td class="td-actions"><a data-toggle="modal" data-target="#EditModal{{$department->name}}" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
                            <a data-toggle="modal" data-target="#DeleteModal{{$department->name}}" class="btn btn-danger btn-small">
                                <i class="btn-icon-only icon-remove"> </i></a></td>

                        @include('department.edit')
                        @include('department.delete')

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