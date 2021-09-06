@extends('center/layouts.app')

@section('content')

    <div class="second-title">NEW animal</div>

    <div class="row">
            {!! Form::model($animal, ['route' => 'animals.store', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'なまえ') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('age', '年齢') !!}
                    {!! Form::select('age', Config::get('age'), null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('gender', '性別') !!}
                    {!! Form::select('gender', $gender, null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('animal_type', '犬・猫') !!}
                    {!! Form::select('animal_type', $animal_type, null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cat_type', '種類(猫)') !!}
                    {!! Form::select('cat_type', Config::get('type.Cats'), null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('dog_type', '種類(犬)') !!}
                    {!! Form::select('dog_type', Config::get('type.Dogs'), null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('introduction', '紹介文') !!}
                    {!! Form::textarea('introduction', null, ['class' => 'form-control', 'rows' => '4']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('active_status', '募集状況') !!}
                    {!! Form::select('active_status', $active_status, null, ['class' => 'form-control', 'placeholder'=>'選択してください']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image1', '写真１') !!}
                    {!! Form::file('image1', null, ['class' => 'custom-file-input']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image2', '写真２') !!}
                    {!! Form::file('image2', null, ['class' => 'custom-file-input']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image3', '写真３') !!}
                    {!! Form::file('image3', null, ['class' => 'custom-file-input']) !!}
                </div>
            {!! Form::submit('投稿', ['class' => 'btn btn-block']) !!}

            {!! Form::close() !!}
    </div>


@endsection