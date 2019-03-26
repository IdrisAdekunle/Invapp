@extends('layouts.app')

@section('content')

    @include('messages.error')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Departments <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Create department here
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Create department</a>
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
                    <div class="col-lg-8">
                        <!-- Form Inline - Default Style -->
                        <form class="form-inline mb-4" action="{{ url('department') }}" method="POST">
                            {{ csrf_field()}}
                            <label class="sr-only" for="example-if-email">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email" name="name" placeholder="Department name">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                        <!-- END Form Inline - Default Style -->

                    </div>
                </div>

            </div>
        </div>
    </div>





@endsection