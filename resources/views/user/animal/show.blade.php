@extends('user/layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="animal-show">
                @if($animal->image1)
                    <img src="/uploads/{{ $animal->image1 }}" width="500px"><br>
                @endif
                @if($animal->image2)
                    <img src="/uploads/{{ $animal->image2 }}" width="500px"><br>
                @endif
                @if($animal->image3)
                    <img src="/uploads/{{ $animal->image3 }}" width="500px"><br>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="box">
                なまえ：{{ $animal->name }}<br>
                性別：{{ App\Enums\Gender::getDescription($animal->gender) }}<br>
                年齢：{{ $animal->ageName }}<br>
                種類：
                @if($animal->animal_type == 0)
                    {{ $animal->CatsTypeName }}
                @else
                    {{ $animal->DogsTypeName }}
                @endif
                <br>
                紹介：{{ $animal->introduction }}<br>
                
                @if(Auth::id('center') === $animal->center_id)
                        <p class="text-right">{!! link_to_route('animals.edit', '編集', ['animal' => $animal->id]) !!}</p>
                
                    {!! Form::model($animal, ['route' => ['animals.destroy', $animal->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                @endif
                </div>
            
            <a href="{{ route('center.show', ['center' => $animal->center->id])}}">
                <div class="box">
                    <p>施設情報</p>
                    <p>施設：{{ $animal->center->name }}</p>
                    <p>住所：{{ $animal->center->prefName }}{{ $animal->center->address }}</p>
                    <p>電話：{{ $animal->center->tel }}</p>
                </div>
            </a>
        </div>
    </div>

    <div class="button">{!! link_to_route('animals.index', '一覧に戻る') !!}</div>

@endsection