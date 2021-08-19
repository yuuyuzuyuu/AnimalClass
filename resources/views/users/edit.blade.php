@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>編集</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'おなまえ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('nickname', 'ニックネーム') !!}
                        {!! Form::text('nickname', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'メールアドレス') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('tel', '電話番号（任意）') !!}
                        {!! Form::tel('tel', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('pref', '都道府県') !!}
                        {!! Form::select('pref', Config::get('pref'), null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('更新', ['class' => 'btn btn-block']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection