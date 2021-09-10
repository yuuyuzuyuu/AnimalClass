@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="search-box">
                {!! Form::open(['route'=>'animals.index', 'method' => 'get']) !!}
                    <div class="form-group">
                        {!! Form::label('gender', '性別') !!}
                        {!! Form::select('gender', ['指定なし'=>'指定なし']+$gender, ( isset($old_request['gender']) ? $old_request['gender'] : null), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('animal_type', '犬・猫') !!}
                        {!! Form::select('animal_type', ['指定なし'=>'指定なし']+$animal_type, ( isset($old_request['animal_type']) ? $old_request['animal_type'] : null), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('pref', '都道府県') !!}
                        {!! Form::select('pref', ['指定なし'=>'指定なし']+Config::get('pref'), ( isset($old_request['pref']) ? $old_request['pref'] : null), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('active_status', '募集状況') !!}
                        {!! Form::select('active_status', ['指定なし'=>'指定なし']+$active_status, ( isset($old_request['active_status']) ? $old_request['active_status'] : null), ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('search', ['class' => 'btn btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="search-result">
        <div class="animal-index">
            @if(count($data) > 0)
                @foreach($data as $animal)
                    @if (Auth::guard('center')->check())
                        <a href="{{ route('animals.show', ['animal' => $animal->id])}}">
                    @elseif(Auth::guard('user')->check())
                        <a href="{{ route('user.animals.show', ['id' => $animal->id])}}">
                    @endif
                            <div class="box">
                                @if($animal->active_status == 0)
                            	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                            	@elseif($animal->active_status == 1)
                            	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                            	    <p>募集終了</p>
                            	@endif

                                @if($animal->animal_type == 0 && $animal->gender == 0)
                                    <i class="fas fa-cat fa-2x gender-boy"></i>
                                @elseif($animal->animal_type == 0 && $animal->gender == 1)
                                    <i class="fas fa-cat  fa-2x gender-girl"></i>
                                @elseif($animal->animal_type == 1 && $animal->gender == 0)
                                    <i class="fas fa-dog  fa-2x gender-boy"></i>
                                @elseif($animal->animal_type == 1 && $animal->gender == 1)
                                    <i class="fas fa-dog  fa-2x gender-girl"></i>
                                @endif
                                <span class="text-right">{{ $animal->center->prefName }}</span>
                            </div>
                        </a>
                @endforeach
            @else
                <p>検索結果なし</p>
            @endif
            {{ $data->links() }}
        </div>
    </div>
@endsection