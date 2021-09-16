@extends('admin/layouts/app')

@section('content')

    <div class="admin-list">
        <div class="row">
            <table class="table table-borderless">
                <tr>
                    <th>施設</th>
                    <th>メールアドレス</th>
                    <th>電話番号</th>
                    <th>郵便番号</th>
                    <th>都道府県</th>
                    <th>市町村以下</th>
                </tr>
            @foreach($centers as $center)
                <tr>
                    <td>{!! $center->name !!}</td>
                    <td>{!! $center->email !!}</td>
                    <td>{!! $center->tel !!}</td>
                    <td>{!! $center->postcode !!}</td>
                    <td>{!! $center->prefName !!}</td>
                    <td>{!! $center->address !!}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>

@endsection