@extends('layouts.app')

@section('content')
    <div class="row">
        {!! Form::open(['route' => 'contact.confirm']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'タイトル') !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'お問い合わせ内容') !!}
                {!! Form::textarea('body', old('body'), ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('内容を確認する', ['class' => 'form-control']) !!}
        {!! Form::close() !!}
    </div>
@endsection