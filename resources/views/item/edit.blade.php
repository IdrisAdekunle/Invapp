

<!-- Slide Right Block Modal -->
<div class="modal fade" id="modal-block-slideright{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-slideright" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideright" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">EDIT ITEM CATEGORY</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form method="post" action="{{route('item.update',$item->id)}}" id="edit-form{{$item->id}}">

                        {{ method_field('PUT') }}

                        {{csrf_field()}}

                        <label for="example-if-email">Name</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email" name="name" value=" {{$item->name}}">

                    </form>
                </div>

                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary"  onclick="event.preventDefault();
                                                     document.getElementById('edit-form{{$item->id}}').submit();">
                        <i class="fa fa-check mr-1"></i>Save Changes</button>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- END Slide Right Block Modal -->