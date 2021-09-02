@extends('center/layouts.app')

@section('content')
<h1>センターマイページ</h1>
<table class="table table-borderless">
    <tr>
        <th>施設名</th>
        <td>{{ $center -> name }}</td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{ $center -> tel }}</td>
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
    @if(Auth::id('center') === $center->center_id)
        {!! link_to_route('center.edit', '編集', ['center' => $center->id], ['class' => 'btn btn-block']) !!}
    @endif

@endsection