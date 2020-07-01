<div>
	<h1>Configuración</h1>

	<h5>Diseños de vista para consulta del CV por parte del reclutador.</h5>

	@if(count($designs_view) ==! 0)
	@include('contCV.edit_vista')
	@else

	{!!Form::open(array('route' => 'vista.store', 'method' => 'POST'))!!}
		
	@foreach ($designs_view as $des_v)
	
	<div class="custom-control custom-switch">
		<input type="radio" class="custom-control-input" id="{{$des_v->design_view}}" name="customSwitch" value="{{$des_v->design_view}}">
		<label class="custom-control-label" for="{{$des_v->design_view}}">Diseño: {{$des_v->design_view}}</label>
	</div>
	@endforeach
	{!! Form::submit('Guardar vista', array('class'=> 'btn btn-outline-secondary', 'style' => 'background:#006699; color:#ffffff;')) !!}
		
	{!!Form::close()!!}	

	@endif
</div>



<br><br>
<div>
	<h1>Exportar Curriculum Vitae</h1>

	<h5>En este apartado podrá imprimir un resumen de lo más escencial de su CV en formato pdf para su fácil manejo.</h5>
		
	<hr style="border: solid 1px #6c757d">
	<br>
	{!!Form::open(array('route' => 'pdf_cv.pdf', 'method' => 'POST', 'target'=>'_blank'))!!}
	<div class="input-group">
		
		<select name="design" class="custom-select" id="inputGroupSelect04">
			<option selected>Generar PDF ...</option>
			@foreach ($designs as $des)
			<option value="{{$des->design_pdf}}">{{$des->design_pdf}}</option>
			@endforeach
		</select>

		<div class="input-group-append">
			{!! Form::submit('Generar', array('class'=> 'btn btn-outline-secondary', 'style' => 'background:#006699; color:#ffffff;')) !!}
		</div>
		
	</div>
	{!!Form::close()!!}

	<br>
	<hr style="border: solid 1px #6c757d">

	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'pdf_cv.store',
		'target'=>'_blank'))!!}

		{!!Form::label('empresa', 'Empresa:')!!}
		{!!Form::text('empresa', null, array('class'=>'form-control', 'required'))!!}
		{!!Form::label('pass', 'Contraseña de consulta:')!!}
		{!!Form::text('pass', null, array('class'=>'form-control', 'required'))!!} 
		<br>
		<div class="input-group">
			
			<select name="design" class="custom-select" id="inputGroupSelect04">
				<option selected>Generar PDF con password ...</option>
				@foreach ($designs as $des)
				<option value="{{$des->design_pdf}}">{{$des->design_pdf}}</option>
				@endforeach
			</select>

			<div class="input-group-append">
				{!! Form::submit('Generar', array('class'=> 'btn btn-outline-secondary', 'style' => 'background:#006699; color:#ffffff;')) !!}
			</div>

			
			
		</div>
	{!!Form::close()!!}
</div>