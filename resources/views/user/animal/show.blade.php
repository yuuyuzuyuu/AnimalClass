@extends('user/layouts.app')

@section('content')
    <div class="row">
        <div class="animal-show">
            <img src="/uploads/{{ $animal->image1 }}" width="500px"><br>
        
            <div class="box">
                なまえ：{{ $animal->name }}<br>
                年齢：{{ $animal->age }}<br>
                種類：{{ $animal->type }}<br>
                紹介：{{ $animal->introduction }}<br>
                {!! link_to_route('animals.edit', '編集', ['animal' => $animal->id]) !!}
            </div>
        </div>
        
    </div>
    <div class="button">{!! link_to_route('animals.index', '一覧に戻る') !!}</div>

@endsection