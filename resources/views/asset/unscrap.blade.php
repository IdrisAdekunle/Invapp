<div class="modal fade" id="modal-block-popout{{$asset->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Unscrap Asset</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <form method="post" action="{{route('unscrap',$asset->id)}}" id="unscrap-form{{$asset->id}}" >

                        {{ method_field('PUT') }}

                        {{csrf_field()}}

                        <input class="invisible" name="scrap" value="0">

                        <p>Are you sure you want to unscrap {{$asset->identification_no}} ? </p>
                    </form>
                </div>

                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary"onclick="event.preventDefault();
                            document.getElementById('unscrap-form{{$asset->id}}').submit();"><i class="fa fa-check mr-1"></i>Unscrap</button>
                </div>
            </div>
        </div>
    </div>
</div>