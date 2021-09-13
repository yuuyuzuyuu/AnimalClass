@extends('layouts.app')

@section('content')
    <div class="row">
        {!! Form::open(['route' => 'contact.send']) !!}
            {!! Form::token() !!}
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! $inputs['email'] !!}
                {!! Form::hidden('email', $inputs['email'], ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'タイトル') !!}
                {!! $inputs['title'] !!}
                {!! Form::hidden('title', $inputs['title'], ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'お問い合わせ内容') !!}
                {!! nl2br(e($inputs['body'])) !!}
                {!! Form::hidden('body', $inputs['body'], ['class' => 'form-control']) !!}
            </div>
        {!! Form::submit('入力内容修正', ['name' => 'action', 'class' => 'form-control']) !!}
        {!! Form::submit('送信', ['name' => 'action', 'class' => 'form-control']) !!}
        {!! Form::close() !!}
    </div>
@endsection