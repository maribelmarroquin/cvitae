<div>
    <h1>Configuración</h1>

    <h5>Diseños de vista para consulta del CV por parte del reclutador.</h5>

    @if(count($designs_view) !== 0)
        @include('contCV.edit_vista')
    @else
        <form method="POST" action="{{ route('vista.store') }}">
            @csrf
            
            @foreach ($designs_view as $des_v)
                <div class="custom-control custom-switch">
                    <input type="radio" class="custom-control-input" id="{{ $des_v->design_view }}" name="customSwitch" value="{{ $des_v->design_view }}">
                    <label class="custom-control-label" for="{{ $des_v->design_view }}">Diseño: {{ $des_v->design_view }}</label>
                </div>
            @endforeach
            <button type="submit" class="btn btn-outline-secondary" style="background:#006699; color:#ffffff;">Guardar vista</button>
        </form>	
    @endif
</div>

<br><br>

<div>
    <h1>Exportar Curriculum Vitae</h1>

    <h5>En este apartado podrá imprimir un resumen de lo más esencial de su CV en formato pdf para su fácil manejo.</h5>

    <hr style="border: solid 1px #6c757d">
    <br>

    <form method="POST" action="{{ route('pdf_cv.pdf') }}" target="_blank">
        @csrf

        <div class="input-group">
            <select name="design" class="custom-select" id="inputGroupSelect04">
                <option selected>Generar PDF ...</option>
                @foreach ($designs as $des)
                    <option value="{{ $des->design_pdf }}">{{ $des->design_pdf }}</option>
                @endforeach
            </select>

            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" style="background:#006699; color:#ffffff;">Generar</button>
            </div>
        </div>
    </form>

    <br>
    <hr style="border: solid 1px #6c757d">

    <form method="POST" action="{{ route('pdf_cv.store') }}" target="_blank">
        @csrf

        <label for="empresa">Empresa:</label>
        <input type="text" name="empresa" class="form-control" required>
        
        <label for="pass">Contraseña de consulta:</label>
        <input type="text" name="pass" class="form-control" required>

        <br>

        <div class="input-group">
            <select name="design" class="custom-select" id="inputGroupSelect04">
                <option selected>Generar PDF con password ...</option>
                @foreach ($designs as $des)
                    <option value="{{ $des->design_pdf }}">{{ $des->design_pdf }}</option>
                @endforeach
            </select>

            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" style="background:#006699; color:#ffffff;">Generar</button>
            </div>
        </div>
    </form>
</div>
