@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="animal-show">
                @if($animal->image1)
                    <div><img src="{{ $animal->image1 }}" width="500px"></div>
                @endif
                @if($animal->image2)
                    <div><img src="{{ $animal->image2 }}" width="500px"></div>
                @endif
                @if($animal->image3)
                    <div><img src="{{ $animal->image3 }}" width="500px"></div>
                @endif
            </div>
            @if(Auth::guard('user')->check())
                @include('user.animal.favorite_button')
            @endif
            @include('center.information.information')
            @include('center.information.form')
        </div>

        <div class="col-md-6">
            <div class="show-box">
                <table class="table table-borderless">
                    <tr>
                        <th width="30%">なまえ</th>
                        <td width="70%">{{ $animal->name }}</td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>{{ App\Enums\Gender::getDescription($animal->gender) }}</td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td>{{ $animal->ageName }}</td>
                    </tr>
                    <tr>
                        <th>種類</th>
                        <td>
                            @if($animal->animal_type == 0)
                                {{ $animal->CatsTypeName }}
                            @else
                                {{ $animal->DogsTypeName }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>紹介</th>
                        <td>{{ $animal->introduction }}</td>
                    </tr>
                    <tr>
                        <th>募集情報</th>
                        <td>{{ App\Enums\ActiveStatus::getDescription($animal->active_status) }}</td>
                    </tr>
                    <tr>
                        <th>登録日</th>
                        <td>{{ $animal->created_at->format('Y/m/d') }}</td>
                    </tr>
                </table>

                @if(Auth::id('center') === $animal->center_id && Auth::guard('center')->check())
                    {!! link_to_route('animals.edit', '編集', ['animal' => $animal->id], ['class' => 'btn btn-block']) !!}
                    {!! Form::model($animal, ['route' => ['animals.destroy', $animal->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-block']) !!}
                    {!! Form::close() !!}
                @endif
                </div>

                <div class="show-box">
                    @if (Auth::guard('center')->check())
                        <a href="{{ route('center.show', ['center' => $animal->center->id])}}">
                    @elseif (Auth::guard('user')->check())
                        <a href="{{ route('user.center.show', ['id' => $animal->center->id])}}">
                    @endif
                        <table class="table table-borderless">
                            <h4 class="text-center text-white"><i class="fas fa-home"></i>施設情報</h4>
                            <tr>
                                <th width="30%">施設</th>
                                <td width="70%">{{ $animal->center->name }}</td>
                            </tr>
                            <tr>
                                <th>住所</th>
                                <td>
                                    〒{{ $animal->center->postcode }}<br>
                                    {{ $animal->center->prefName }}{{ $animal->center->address }}
                                </td>
                            </tr>
                            <tr>
                                <th>電話</th>
                                <td>{{ $animal->center->tel }}</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                            </tr>
                        </table>
                    </a>
                </div>
            <div class="button text-right">{!! link_to_route('animals.index', 'もどる', [], ['class' => 'btn']) !!}</div>
        </div>
    </div>

@endsection