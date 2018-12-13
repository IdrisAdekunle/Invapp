@extends('layouts.app')

@section('content')

@include('messages.error')
    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-book"></i>
                            <h3>Create new item category</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <form  method="POST"  action="{{ url('item') }}" class="form-horizontal" >

                                {{ csrf_field()}}
                                <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="name">Name</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="name" >
                                </div> <!-- /controls -->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button class="btn">Cancel</button>
                            </div>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






                            @endsection