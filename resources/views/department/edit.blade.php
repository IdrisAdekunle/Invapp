<div id="EditModal{{$department->name}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"> EDIT DEPARTMENT</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="{{route('department.update',$department->id)}}" >

            {{ method_field('PUT') }}

            {{csrf_field()}}

            <input class="form-control" type="text" name="name" value=" {{$department->name}}">



            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
