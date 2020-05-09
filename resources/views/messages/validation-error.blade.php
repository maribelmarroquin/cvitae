@if(count($errors) > 0)
	<div class="errors alert alert-danger alert-dismissible" role="alert" style="margin:0px;">
		<h5>En la pestaña valide lo siguiente:</h5>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
        </button>
	</div>
@endif