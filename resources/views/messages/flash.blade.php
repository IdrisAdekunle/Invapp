@if($flash = session('message'))
<div class="alert alert-success" style="margin-left: 50% ;width:38% ">
    <strong>{{$flash}}</strong>
</div>

    @endif