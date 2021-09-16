@extends('admin/layouts/app')

@section('content')

    <div class="admin-list">
        <div class="row">
            <table class="table table-borderless">
                <tr>
                    <th>なまえ</th>
                    <th>ニックネーム</th>
                    <th>メールアドレス</th>
                    <th>電話番号</th>
                    <th>都道府県</th>
                </tr>
            @foreach($users as $user)
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->nickname !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->tel !!}</td>
                    <td>{!! $user->prefName !!}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>

@endsection