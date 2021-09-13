@extends('layouts.app')

@section('content')
<div class="mypage">
    <div class="row">
        <div class="col-7">
            <div class="mypage-content">
                <div class="second-title"><i class="fas fa-paw"></i>マイページ</div>
                <table class="table table-borderless">
                    <tr>
                        <th width="30%">なまえ</th>
                        <td width="70%">{{ $user -> name }}</td>
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
            </div>
        </div>
    </div>

        <div class="second-title"><i class="fas fa-heart"></i>お気に入りの子</div>
        <div class="animal-index">
            @include('user.animal.box')
            {{ $animals->links() }}
        </div>
</div>

@endsection