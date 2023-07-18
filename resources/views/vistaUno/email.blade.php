<h1>Contacto</h1>
<div class="form_email">
	<table>
		<form method="POST" action="{{ route('emailcv.store') }}">
		@csrf
		<tr>
			<th><label for="e_name">Nombre del contacto:</label></th>
		</tr>
		<tr>
			<td><input type="text" name="e_name" class="form-control" required maxlength="100"></td>
		</tr>
		<tr>
			<th><label for="e_email">Correo electrónico:</label></th>
		</tr>
		<tr>
			<td><input type="email" name="e_email" class="form-control" required maxlength="100"></td>
		</tr>
		<tr>
			<th><label for="e_mensaje">Mensaje:</label></th>
		</tr>
		<tr>
			<td><textarea name="e_mensaje" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td><button type="submit" class="b_email">Enviar mensaje</button></td>
		</tr>
		</form>
	</table>
</div>
