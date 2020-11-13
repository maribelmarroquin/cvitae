@if(Session::has('message-correct'))
		<div class="alert alert-success alert-dismissible inicio" role="alert" style="margin:0px;">
	  		{{ Session::get('message-correct') }}
	  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  			</button>
		</div>
@endif