@extends('layouts.app')

@section('content')


    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Assets <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        update asset here
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Update Asset</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- END Hero -->


    <div class="content">
        <!-- Form Wizards (.js-wizard-* classes are initialized in js/pages/be_forms_wizard.min.js which was auto compiled from _es6/pages/be_forms_wizard.js) -->
        <!-- For more examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard -->

        <!-- Simple Wizards -->
        <div class="col-md-8">
            <!-- Progress Wizard 2 -->
            <div class="js-wizard-simple block block">
                <!-- Wizard Progress Bar -->
                <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- END Wizard Progress Bar -->

                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">1.Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">2. Department & User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step3" data-toggle="tab">4. Identification</a>
                    </li>

                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form method="post" action="{{route('asset.update',$asset->sap_no)}}" >

                {{ method_field('PUT') }}

                {{csrf_field()}}

                <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content px-md-5" style="min-height: 314px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress2-firstname">Identification number</label>
                                <input class="form-control form-control-alt" type="text" id="wizard-progress2-firstname" name="identification_no" value="{{$asset->identification_no}}" disabled>

                            </div>
                            <div class="form-group">
                                <label for="wizard-progress2-lastname">Asset sap number</label>
                                <input class="form-control form-control-alt" type="text" id="wizard-progress2-lastname" name="sap_no" value="{{$asset->sap_no}}" required>
                            </div>
                            <div class="form-group">
                                <label for="wizard-progress2-lastname">Asset user</label>
                                <input class="form-control form-control-alt" type="text" id="wizard-progress2-lastname" name="asset_user" value="{{$asset->asset_user}}" required>
                            </div>

                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane " id="wizard-progress2-step2" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress2-skills">Category</label>
                                <select class="form-control form-control-alt" id="wizard-progress2-skills" name="item_id" required>
                                    <option value="{{$asset->item->id}}">{{$asset->item->name}}</option>
                                    @foreach($items as $item)

                                        <option value="{{$item->id}}">{{$item->name}} </option>

                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">

                                <label for="wizard-progress2-skills">Department</label>
                                <select class="form-control form-control-alt" id="wizard-progress2-skills" name="department_id">
                                    <option value="{{$asset->department->id}}">{{$asset->department->name}}</option>
                                    @foreach($departments as $department)

                                        <option value="{{$department->id}}">{{$department->name}} </option>

                                    @endforeach
                                </select>
                            </div>

                        </div>



                        <div class="tab-pane " id="wizard-progress2-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress2-firstname">Model</label>
                                <input class="form-control form-control-alt" type="text" id="wizard-progress2-firstname" name="model" value="{{$asset->model}}" required>

                            </div>
                            <div class="form-group">
                                <label for="wizard-progress2-lastname">Serial Number</label>
                                <input class="form-control form-control-alt" type="text" id="wizard-progress2-lastname" name="serial_number" value="{{$asset->serial_number}}" required>
                            </div>

                        </div>



                    </div>

                        <!-- END Step 3 -->

                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-1"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-1"></i>
                                </button>
                                <button type="submit" class="btn btn-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-1"></i> Update
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>


</div>
    </div>

@endsection



















