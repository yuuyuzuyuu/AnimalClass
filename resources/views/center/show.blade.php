@extends('layouts.app')

@section('content')
<div class="mypage">
    <div class="row">
        <div class="col-7">
            <div class="mypage-content">
                <p class="second-title"><i class="fas fa-paw"></i>{{ $center -> name }}</p>
                <table class="table table-borderless">
                    <tr>
                        <th width="30%">電話番号</th>
                        <td width="70%">{{ $center -> tel }}</td>
                    </tr>
                    <tr>
                        <th>郵便番号</th>
                        <td>〒{{ $center -> postcode }}</td>
                    </tr>
                    <tr>
                        <th>都道府県</th>
                        <td>{{ $center -> PrefName }}</td>
                    </tr>
                    <tr>
                        <th>都道府県以下住所</th>
                        <td>{{ $center -> address }}</td>
                    </tr>
                    <tr>
                        <th>SNS</th>
                        <td>
                            @if ($center->homepage)
                                <a href="{{ $center->homepage }}"><i class="fas fa-home fa-2x"></i></a>
                            @endif
                            @if ($center->instagram)
                                <a href="{{ $center->instagram }}"><i class="fab fa-instagram fa-2x"></i></a>
                            @endif
                            @if ($center->twitter)
                                <a href="{{ $center->twitter }}"><i class="fab fa-twitter fa-2x"></i></a>
                            @endif
                            @if ($center->facebook)
                                <a href="{{ $center->facebook }}"><i class="fab fa-facebook fa-2x"></i></a>
                            @endif
                        </td>
                    </tr>
                </table>
                @if (Auth::id() === $center->id && Auth::guard('center')->check())
                    {!! link_to_route('center.edit', '編集', ['center' => $center->id], ['class' => 'btn btn-block']) !!}
                @endif
            </div>
        </div>
        <!--<div class="col-5">-->
        <!--    <p>チャットボタン</p>-->
            <!--<td><a href="/chat/{{$center->id}}"><button type="button" class="btn">Chat</button></a></td>-->

        <!--</div>-->
    </div>

        <div class="second-title"><i class="fas fa-gift"></i>この施設のわんにゃん</div>
        <div class="animal-index">
            @include('user.animal.box')
            {{ $animals->links() }}
        </div>
</div>
@endsection
