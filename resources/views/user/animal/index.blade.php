@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-7">
            <div class="search-box">
                <div class="second-title">検索</div>
                {!! Form::open(['route'=>'animals.index', 'method' => 'get']) !!}
                    <table>
                        <tr>
                            <td>{!! Form::label('gender', '性別') !!}</td>
                            <td>{!! Form::label('animal_type', '犬・猫') !!}</td>
                            <td>{!! Form::label('pref', '都道府県') !!}</td>
                            <td>{!! Form::label('active_status', '募集状況') !!}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::select('gender', ['指定なし'=>'指定なし']+$gender, ( isset($old_request['gender']) ? $old_request['gender'] : null), ['class' => 'form-control']) !!}</td>
                            <td>{!! Form::select('animal_type', ['指定なし'=>'指定なし']+$animal_type, ( isset($old_request['animal_type']) ? $old_request['animal_type'] : null), ['class' => 'form-control']) !!}</td>
                            <td>{!! Form::select('pref', ['指定なし'=>'指定なし']+Config::get('pref'), ( isset($old_request['pref']) ? $old_request['pref'] : null), ['class' => 'form-control']) !!}</td>
                            <td>{!! Form::select('active_status', ['指定なし'=>'指定なし']+$active_status, ( isset($old_request['active_status']) ? $old_request['active_status'] : null), ['class' => 'form-control']) !!}</td>
                        </tr>
                    </table>
                    {!! Form::submit('search', ['class' => 'btn btn-block']) !!}
                {!! Form::close() !!}

            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3 guide">
            <p><i class="fas fa-circle gender-girl"></i>&ensp;女の子&emsp;<i class="fas fa-circle gender-boy"></i>&ensp;男の子&emsp;<i class="fas fa-cat"></i>&ensp;猫&emsp;<i class="fas fa-dog"></i>&ensp;犬</p>
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
                    @else
                        <a href="{{ route('signup.get')}}">
                    @endif
                            <div class="box">
                                <div class="box-image">
                                    @if($animal->active_status == 0)
                                	    @if($animal->image2)
                                	        <img src="{{ $animal->image2 }}" width="250px" height="177px">
                                	    @endif
                                	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                                	@elseif($animal->active_status == 1)
                                	    @if($animal->image2)
                                	        <img src="{{ $animal->image2 }}" width="250px" height="177px">
                                	    @endif
                                	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                                	    <p>募集終了</p>
                                	@endif
                                </div>

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