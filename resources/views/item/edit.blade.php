<div id="EditModal{{$item->id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"> EDIT ITEM CATEGORY</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="{{route('item.update',$item->id)}}" >

            {{ method_field('PUT') }}

            {{csrf_field()}}

                <input class="form-control" type="text" name="name" value=" {{$item->name}}">



    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
        </form>
    </div>
</div>
