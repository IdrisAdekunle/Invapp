@extends('layouts.app')

@section('content')


    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-copy"></i>
                            <h3>Transfer Asset</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <form method="post" action="{{route('asset.update',$asset->sap_no)}}" >

                                {{ method_field('PUT') }}

                                {{csrf_field()}}
                                <fieldset>

                                    <div class="control-group">
                                        <label class="control-label" for="name">Identification number</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="identification_no" value="{{$asset->identification_no}}" disabled>
                                            <input type="hidden"  name="identification_no" value="{{$asset->identification_no}}">
                                        </div> <!-- /controls -->
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="name">Asset sap number</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="sap_no" value="{{$asset->sap_no}}" disabled>
                                        </div> <!-- /controls -->
                                    </div>

                                    <div class="control-group">

                                        <label class="control-label" for="name">Item category</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="category" value="{{$asset->item->name}}" disabled>
                                        </div> <!-- /controls -->
                                        <input type="hidden" class="span6" name="category" value="{{$asset->item->name}}">
                                    </div>


                                    <br/>

                                    <div class="row" style="margin-left: 0%">
                                        <label>Transfer Department</label>
                                        <br/>

                                        From &nbsp;

                                        <input type="text" class="span6" name="pd" value="{{$asset->department->name}}" style="width: 20%" >

                                        &nbsp; To &nbsp;


                                            <select name="department_id">

                                                <option value="{{$asset->department->id}}"></option>
                                                    @foreach($department as $department)

                                                    <option value="{{$department->id}}">{{$department->name}} </option>

                                                @endforeach

                                            </select>



                                    </div>
                                    <br/>

                                    <div class="row" style="margin-left: 0%">
                                        <label>Transfer user</label>
                                        <br/>
                                        From &nbsp;
                                        <input type="text" class="span6" name="pu" value="{{$asset->asset_user}}" style="width: 20%" >

                                        &nbsp; To &nbsp;

                                        <input type="text" class="span6" name="asset_user" value="" style="width: 20%">


                                    </div>

                             <br/>

                                   <div class="control-group">
                                        <label class="control-label" for="name">Model</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="model" value="{{$asset->model}}" disabled>
                                        </div> <!-- /controls -->
                                    </div>

                                    <br/>

                                     <div class="control-group">
                                        <label class="control-label" for="name">Serial number</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="serial_number" value="{{$asset->serial_number}}" disabled>
                                        </div> <!-- /controls -->
                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Transfer</button>
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