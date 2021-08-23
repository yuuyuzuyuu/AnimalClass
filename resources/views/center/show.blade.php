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

</table>

{!! link_to_route('center.edit', '編集', ['center' => $center->id], ['class' => 'btn btn-block']) !!}

<h3>▶予定</h3>

@endsection