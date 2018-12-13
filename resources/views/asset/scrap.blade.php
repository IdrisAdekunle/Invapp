<div id="ScrapModal{{$asset->id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"> Scrap Asset</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="{{route('scrap',$asset->id)}}" >

            {{ method_field('PUT') }}

            {{csrf_field()}}

            <input class="hidden" name="scrap" value="1">

            <p>Are you sure you want to scrap {{$asset->identification_no}} ? </p>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-primary">Scrap</button>
            </div>
        </form>
    </div>
</div>