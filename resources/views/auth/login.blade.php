@extends('layouts.app')

@section('content')
    <main>
        <center>
            <div class="section"></div>
            <div class="section"></div>

            <h5 class="teal-text">Connectez vous à votre compte</h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row{{ $errors->has('email') ? ' has-error' : '' }}'>
                            <div class='input-field col s12'>
                                <i class="material-icons prefix">email</i>
                                <input class='validate' type='email' name='email' id='email' value="{{ old('email') }}" required="" aria-required="true" />
                                <label for='email' data-error="Saisissez un email correct" >Entrez votre adresse email</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class='row{{ $errors->has('password') ? ' has-error' : '' }}'>
                            <div class='input-field col s12'>
                                <i class="material-icons prefix">lock</i>
                                <input class='validate' type='password' name='password' id='password' required="" aria-required="true"/>
                                <label for='password'>Entrez votre mot de passe</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='{{ url('/password/reset') }}'><b>Mot de passe oublié ?</b></a>
                            </label>
                        </div>
                        {{--<div class='row'>--}}
                            {{--<div class='input-field col s12'>--}}
                                {{--<input type="checkbox" name="remember" />--}}
                                {{--<label for="test5">Se souvenir de moi</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn-large btn waves-effect waves-teal'>Connexion</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="#!" class="cyan-text">Céer un compte</a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
@endsection
