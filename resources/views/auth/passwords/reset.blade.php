@extends('../../templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<div class="titulo_cv">
  <h1>Bienvenid@</h1>
  <h3>Si no sabes como realizar tu Curriculum Vitae, éste es tu sitio.</h3>
  <h5>Éste sistema te ayudará a gestionar y actualizar tu curriculum de manera gratuita.</h5>
</div>
<div class="crop4">
  
</div>

<div class="article">
  <div class="tab" id="myTab">
    <a class="menu" >Menú</a>
    <button class="tablinks" onclick="openTab(event, 'reestablecer')" id="defaultOpen">Reestablecer contraseña</button>
    <button href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="menuResponsive()">&#9776;</button>
  </div>

  <div id="reestablecer" class="tabcontent" style="height: 800px;">
    <h1>Reestablecer Contraseña</h1>

    <div class="card-body">
      <form method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico:') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Reset Password') }}
                  </button>
              </div>
          </div>
      </form>
    </div>

    {{--
    @if (session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
    @endif

    <table>
        {!!Form::open(array(
            'method'=>'POST',
            'route'=>'password.update'))!!}
            @csrf
            {{ Form::hidden('token', $token) }}

          <tr>
            <th>{!!Form::label('email', 'Correo electrónico:')!!}</th>
            <td><input type="email" class="form-control" name="email" id="email" value={{old('email')}}></td>
            
          </tr>
            <tr>
              <th>{!!Form::label('password', 'Contraseña:')!!}</th>
              <td>{!!Form::password('password', array('class' => 'form-control', 'required'))!!}</td>
            </tr>
            <tr>
              <th>{!!Form::label('password-confirm', 'Reingresa la contraseña:')!!}</th>
              <td>{!!Form::password('password-confirm', array('class' => 'form-control', 'required'))!!}</td>
            </tr>
        <tr>
            <td></td>
            <td>{!!Form::submit('Iniciar Sesión', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;'))!!}</td>
        </tr>
        {!!Form::close()!!}
    </table>
    --}}

  </div>

</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection