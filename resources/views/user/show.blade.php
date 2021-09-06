@extends('user/layouts.app')

@section('content')
<div class="mypage">
    <div class="second-title">マイページ</div>
    <table class="table table-borderless">
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

    {!! link_to_route('user.edit', '編集', ['user' => $user->id], ['class' => 'btn btn-block']) !!}

    <div class="second-title"><i class="fas fa-heart"></i>お気に入りの子</div>
    @include('user.animal.box')
</div>

@endsection