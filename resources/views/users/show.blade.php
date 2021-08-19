@extends('layouts.app')

@section('content')
<h1>マイページ</h1>
<table class="table">
    <tr>
        <th>なまえ</th>
        <td>{{ $user -> name }}</td>
    </tr>
    <tr>
        <th>ニックネーム</th>
        <td>{{ $user -> nickname }}</td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{ $user -> email }}</td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{ $user -> tel }}</td>
    </tr>
    <tr>
        <th>居住都道府県</th>
        <td>{{ $user -> prefName }}</td>
    </tr>
</table>

@endsection