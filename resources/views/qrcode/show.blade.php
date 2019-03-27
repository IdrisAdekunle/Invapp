@extends('layouts.app')




@section('content')


    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Scan <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Qrcode scan result.</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">User Interface</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Qrcode</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- Frequently Asked Questions -->
        <div class="block">
            <div class="block-content block-content-full">
                <div class="p-sm-4 p-xl-7">
                    <!-- Introduction -->
                    <h2 class="h3"><strong>1.</strong> Identification</h2>
                    <div id="faq1" class="mb-5" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq1_h1">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1" aria-expanded="true" aria-controls="faq1_q1">Identification Number</a>
                            </div>
                            <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1" data-parent="#faq1">
                                <div class="block-content">
                                    <p>
                                        {{$asset->identification_no}}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq1_h2">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2" aria-expanded="true" aria-controls="faq1_q2">SAP Number</a>
                            </div>
                            <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2" data-parent="#faq1">
                                <div class="block-content">
                                   <p>
                                       {{$asset->sap_no}}
                                   </p>
                                </div>
                            </div>
                        </div>
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq1_h3">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3" aria-expanded="true" aria-controls="faq1_q3">Asset User</a>
                            </div>
                            <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3" data-parent="#faq1">
                                <div class="block-content">
                                  <p>
                                      {{$asset->asset_user}}
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Introduction -->

                    <!-- Functionality -->
                    <h2 class="h3"><strong>2.</strong>Category & Location</h2>
                    <div id="faq2" class="mb-5" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq2_h1">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1" aria-expanded="true" aria-controls="faq2_q1">Category</a>
                            </div>
                            <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1" data-parent="#faq2">
                                <div class="block-content">
                                    <p>
                                        {{$asset->item->name}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq2_h2">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2" aria-expanded="true" aria-controls="faq2_q2">Department</a>
                            </div>
                            <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2" data-parent="#faq2">
                                <div class="block-content">
                                  <p>
                                      {{$asset->department->name}}
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END Functionality -->

                    <!-- Payments -->
                    <h2 class="h3"><strong>3.</strong>Factory Information</h2>
                    <div id="faq3" role="tablist" aria-multiselectable="true">
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq3_h1">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1" aria-expanded="true" aria-controls="faq3_q1">Model</a>
                            </div>
                            <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1" data-parent="#faq3">
                                <div class="block-content">
                                    <p>
                                        {{$asset->model}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block block-bordered mb-1">
                            <div class="block-header block-header-default" role="tab" id="faq3_h2">
                                <a class="text-muted" data-toggle="collapse" data-parent="#faq3" href="#faq3_q2" aria-expanded="true" aria-controls="faq3_q2">Serial Number</a>
                            </div>
                            <div id="faq3_q2" class="collapse" role="tabpanel" aria-labelledby="faq3_h2" data-parent="#faq3">
                                <div class="block-content">
                                    <p>
                                        {{$asset->serial_number}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Payments -->
                </div>
            </div>
        </div>
        <!-- END Frequently Asked Questions -->
    </div>
    <!-- END Page Content -->










    @endsection