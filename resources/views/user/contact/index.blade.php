@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-5 offset-3">
            <div class="second-title">お問い合わせ</div>
            <div class="caution">
                <span class="caution-title">注意</span>
                <p>お急ぎの方は電話にてお問い合わせください。</p>
                <p><i class="fas fa-phone"></i>000-0000-0000</p>
            </div> 
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
            {!! Form::submit('内容を確認する', ['class' => 'btn form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection