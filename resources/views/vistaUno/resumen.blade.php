
<div class="slider">
			<ul>
				<li>
  <img src="https://cdn.pixabay.com/photo/2012/03/04/00/43/architecture-22039_960_720.jpg" alt="">
 </li>
				<li>
  <img src="https://cdn.pixabay.com/photo/2018/03/21/10/01/desktop-3246124_960_720.jpg" alt="">
</li>
				<li>
  <img src="https://cdn.pixabay.com/photo/2016/09/13/03/11/sea-water-1666310_960_720.jpg" alt="">
</li>
				<li>
  <img src="https://cdn.pixabay.com/photo/2017/05/02/15/34/city-2278497_960_720.jpg" alt="">
</li>
			</ul>
		</div>
		
<div class="marco_resumen">
	<div class="mc">
		<div class="imagen_per">
			<img src="{{Storage::url("$name_user/id/$dp->ruta")}}">
		</div>
	
		<div class="resumen_texto">
		@foreach ($resumen as $res)
			<h1>{{ $res->titulo }}</h1>
			<p>{{ $res->resumen }}</p>
		</div>
		@endforeach
	</div>
</div>

