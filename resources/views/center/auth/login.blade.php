@extends('layouts.app')

@section('content')

    <div class="text-center">
        <div class="second-title">ログイン(施設用)</div>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="caution">
                <span class="caution-title">注意</span>
                <p>わんちゃんねこちゃんの登録や詳細閲覧には</p>
                <p>会員登録が必要となっております。</p>
            </div>  
            
            {!! Form::open(['route' => 'center.login']) !!}
            
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('送信', ['class' => 'btn btn-block']) !!}
            {!! Form::close() !!}
            
            <div class="registration-link">
                <i class="fas fa-hand-point-right"></i>会員登録は{!! link_to_route('center.signup.get', 'こちら', []) !!}から
            </div>

        </div>
    </div>

@endsection