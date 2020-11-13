@extends('../../templates/template_login')

@section('titulo', 'Bienvenid@')

@section('contenido')
{{--
<div class="titulo_cv">
  <h1>Bienvenid@</h1>
  <h3>Si no sabes como realizar tu Curriculum Vitae, éste es tu sitio.</h3>
  <h5>Éste sistema te ayudará a gestionar y actualizar tu curriculum de manera gratuita.</h5>
</div>
<div class="crop3">
  
</div>
--}}
<div class="article">
  <div class="tab nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="tablinks" onclick="openTab(event, 'reestablecer')" id="defaultOpen">Reestablecer contraseña</a>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div id="reestablecer" class="tabcontent">
      <h4>Reestablecer Contraseña</h4>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico:') }}</label>

                <div class="col-md-6">
                    <input class="campo" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ejemplo@solinfori.com" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn_submit">
                        {{ __('Enviar enlace de reestablecimiento') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection