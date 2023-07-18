@foreach ($view_stay as $vs)

@endforeach

<form method="POST" action="{{ route('vista.update', $vs->id_view_stay) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    @foreach ($designs_view as $des_v)
        @if ($vs->view_stay === $des_v->design_view)
            <div class="custom-control custom-switch">
                <input type="radio" class="custom-control-input" id="{{ $des_v->design_view }}" name="customSwitch" value="{{ $des_v->design_view }}" checked>
                <label class="custom-control-label" for="{{ $des_v->design_view }}">Diseño: {{ $des_v->design_view }}</label>
            </div>
        @else
            <div class="custom-control custom-switch">
                <input type="radio" class="custom-control-input" id="{{ $des_v->design_view }}" name="customSwitch" value="{{ $des_v->design_view }}">
                <label class="custom-control-label" for="{{ $des_v->design_view }}">Diseño: {{ $des_v->design_view }}</label>
            </div>
        @endif
    @endforeach
    <button type="submit" class="btn btn-outline-secondary" style="background:#006699; color:#ffffff;">Guardar vista</button>
</form>
