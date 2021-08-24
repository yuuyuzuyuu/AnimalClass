@extends('center/layouts.app')

@section('content')

    <h1>NEW animal</h1>
    
    <div class="row">
        <div class="col-md-6">
            {!! Form::model($animal, ['route' => 'animals.store']!!}
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::('', , ['class' => 'form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection