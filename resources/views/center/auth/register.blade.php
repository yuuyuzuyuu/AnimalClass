@extends('center/layouts.app')

@section('content')
    <div class="text-center">
        <div class="second-title">会員登録(施設用)</div>
        <p>*がついている欄は必須項目です。</p>
    </div>
        

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="caution">
                <span class="caution-title">注意</span>
                <p>わんちゃんねこちゃんの登録や詳細閲覧には</p>
                <p>会員登録が必要となっております。</p>
            </div>
            
            {!! Form::open(['route' => 'center.signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '施設名*') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス*') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tel', '電話番号*') !!}
                    {!! Form::tel('tel', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('postcode', '郵便番号*') !!}
                    {!! Form::tel('postcode', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pref', '都道府県*') !!}
                    {!! Form::select('pref', Config::get('pref'), null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address', '市町村以下住所*') !!}
                    {!! Form::tel('address', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('homepage', 'ホームページ') !!}
                    {!! Form::url('homepage', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('instagram', 'Instagram') !!}
                    {!! Form::url('instagram', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('twitter', 'Twitter') !!}
                    {!! Form::url('twitter', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('facebook', 'Facebook') !!}
                    {!! Form::url('facebook', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード*') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）*') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>


                {!! Form::submit('登録', ['class' => 'btn btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection