@extends('layouts.welcome')

@section('style')
@endsection

@section('content')
<div class="section-login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-12">
                                    <label for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <div class="col-md-6">
                                    <label for="password">Senha</label>
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueci minha senha</a>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> entrar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="panel-body panel-body-primeiro-acesso">
                    <a class="btn btn-default btn-md btn-primeiro-acesso" href="{{ url('/register') }}">Meu Primeiro Acesso</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
