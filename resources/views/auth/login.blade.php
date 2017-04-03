@extends('app')

@section('content')
        
<div class="container" id="login-form">
  <a href="{{ url('/') }}" class="login-logo"><img src="assets/img/logo-big.png"></a>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2>Login Form</h2>
          </div>
          <div class="panel-body">
            
            <form action="{{ url('/login') }}" method="POST" class="form-horizontal" id="validate-form">
            {{ csrf_field() }}
              <div class="form-group mb-md {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="ti ti-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Usuário"  name="email"  data-parsley-minlength="6" placeholder="At least 6 characters" value="{{ old('email') }}" required autofocus >
                      </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>

              <div class="form-group mb-md {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="ti ti-key"></i>
                    </span>
                    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Senha">
                     @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
              </div>

              <div class="form-group mb-n">
                <div class="col-xs-12">
                  <div class="checkbox-inline icheck pull-right p-n">
                    <label for="">
                      <input type="checkbox"  {{ old('remember') ? 'checked' : ''}}></input>
                      Lembrar-me
                    </label>
                  </div>
                </div>
              </div>
          </div>
          <div class="panel-footer">
            <div class="clearfix">
<!--              <a href="{{ url('/register') }}" class="btn btn-default pull-left">Registrar</a>-->
              <button type="submit" class="btn btn-primary pull-right">Login</button>
            </div>
          </div>
            </form>

        </div>
      </div>
    </div>
</div>
@endsection
