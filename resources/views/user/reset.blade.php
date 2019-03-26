@extends('layouts.app')



@section('content')

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Reset Password <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Create user here.</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Reset Password</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- jQuery Validation (.js-validation class is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <form class="js-validation" action="{{route('user.reset')}}" method="POST">

            @csrf

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Reset Password Form</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="">
                        <div class="row items-push">
                            <div class="col-lg-4">
                                <p class="font-size-sm text-muted">
                                    Username and password all fields are  compulsory kindly fill carefully and confirm the password
                                </p>
                            </div>
                            <div class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="val-username">Username <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter a username..">
                                </div>

                                <div class="form-group">
                                    <label for="val-password">New Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                </div>
                                <div class="form-group">
                                    <label for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="val-confirm-password" name="password_confirmation" placeholder="..and confirm it!">
                                </div>
                            </div>
                        </div>
                        <!-- END Regular -->



                        <!-- Submit -->
                        <div class="row items-push">
                            <div class="col-lg-7 offset-lg-4">
                                <button type="submit" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </div>
                </div>
            </div>
        </form>
        <!-- jQuery Validation -->
    </div>
    <!-- END Page Content -->









@endsection