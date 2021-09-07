@extends('user/layouts.app')

@section('content')
    <div class="second-title">わんにゃん一覧</div>
        <div class="col-md-3">
            <div class="search-box">
                {!! Form::open(['route'=>'animals.index', 'method' => 'get']) !!}
                    <div class="form-group">
                        {!! Form::label('gender', '性別：') !!}
                        {!! Form::select('gender', ['指定なし'=>'指定なし']+$gender, '指定なし', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('animal_type', '犬か猫：') !!}
                        {!! Form::select('animal_type', ['指定なし'=>'指定なし']+$animal_type, '指定なし', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('pref', '都道府県：') !!}
                        {!! Form::select('pref', ['指定なし'=>'指定なし']+Config::get('pref'), '指定なし', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('search', ['class' => 'btn btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>

    <div class="row">
        <div class="animal-index">
            @if(!empty($data))
                @foreach($data as $animal)
                    @if (Auth::guard('center')->check())
                        <a href="{{ route('animals.show', ['animal' => $animal->id])}}">
                    @elseif(Auth::guard('user')->check())
                        <a href="{{ route('user.animals.show', ['id' => $animal->id])}}">
                    @endif
                            <div class="box">
                                @if($animal->active_status == 0)
                            	    <img src="{{ $animal->image1 }}" width="250px">
                            	@elseif($animal->active_status == 1)
                            	    <img src="{{ $animal->image1 }}" width="250px">
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
            @endif
            {{ $data->links() }}
        </div>
    </div>
@endsection