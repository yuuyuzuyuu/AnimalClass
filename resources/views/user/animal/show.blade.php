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
            @if(Auth::guard('user')->check())
                @include('user.animal.favorite_button')
            @endif
            <div class="second-title">New Information</div>
            @include('center.information.information')
            @include('center.information.form')
        </div>

        <div class="col-md-6">
            <div class="show-box">
                <table class="table table-borderless">
                    <tr>
                        <th>なまえ</th>
                        <td>{{ $animal->name }}</td>
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
                </table>

                @if(Auth::id('center') === $animal->center_id)
                    {!! link_to_route('animals.edit', '編集', ['animal' => $animal->id], ['class' => 'btn']) !!}
                    {!! Form::model($animal, ['route' => ['animals.destroy', $animal->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn']) !!}
                    {!! Form::close() !!}
                @endif
                </div>

            <a href="{{ route('center.show', ['center' => $animal->center->id])}}">
                <div class="show-box">
                    <table class="table table-borderless">
                        <h4 class="text-center text-white"><i class="fas fa-home"></i>施設情報</h4>
                        <tr>
                            <th>施設</th>
                            <td>{{ $animal->center->name }}</td>
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
                </div>
            </a>
            <div class="button text-right">{!! link_to_route('animals.index', 'BACK') !!}</div>
        </div>
    </div>



@endsection