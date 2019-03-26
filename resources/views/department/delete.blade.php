
<!-- Slide Left Block Modal -->
<div class="modal fade" id="modal-block-slideleft{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideleft" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideleft" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Confirm Delete</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <p>Are you sure you want to delete {{$department->name}} ?</p>
                </div>
                <div class="block-content block-content-full text-right border-top">
                    <form method="post" action="{{route('department.destroy',$department->id)}}" id="delete-form{{$department->id}}" >
                        {{ method_field('DELETE') }}
                        {{csrf_field()}}
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" onclick="event.preventDefault();
                                document.getElementById('delete-form{{$department->id}}').submit();"><i class="fa fa-check mr-1"></i>Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Slide Left Block Modal -->