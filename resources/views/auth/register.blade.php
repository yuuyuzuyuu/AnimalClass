@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>会員登録</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
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
                        {!! Form::label('address_id', '居住都道府県') !!}
                        {!! Form::text('address_id', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('登録', ['class' => 'btn btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection