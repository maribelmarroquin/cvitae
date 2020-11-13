@extends('../../templates/template_login')

@section('titulo', 'Bienvenid@')

@section('contenido')

{{--
<div class="titulo_cv">
  <h1>Bienvenid@</h1>
  <h3>Si no sabes como realizar tu Curriculum Vitae, éste es tu sitio.</h3>
  <h5>Éste sistema te ayudará a gestionar y actualizar tu curriculum de manera gratuita.</h5>
</div>
<div class="crop4">
  
</div>
--}}
<div class="article">
    <div class="tab nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="tablinks" onclick="openTab(event, 'reestablecer')" id="defaultOpen">Reestablecer contraseña</a>
  </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div id="reestablecer" class="tabcontent">
            <h4>Reestablecer Contraseña</h4>

            <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo:') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="campo @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="ejemplo@solinfori.com" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="campo @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmación de contraseña:') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="campo" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn_submit">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>

</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection