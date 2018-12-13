@if($flash = session('message'))
<div class="alert alert-success" style="position: absolute;margin-left: 80% ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{$flash}}</strong>
</div>

    @endif