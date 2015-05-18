@if ($message = Session::get('message'))
<div class="alert alert-dismissable alert-success backend-hud">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong> 
</div>
@endif