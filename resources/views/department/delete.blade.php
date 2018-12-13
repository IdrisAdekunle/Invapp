<div id="DeleteModal{{$department->name}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"> Confirm delete</h3>
    </div>
    <div class="modal-body">
        <p>Are you sure you want to delete {{$department->name}} ?</p>


        <div class="modal-footer">
            <form method="post" action="{{route('department.destroy',$department->id)}}" >
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-primary">Delete</button>
            </form>

        </div>
    </div>
</div>