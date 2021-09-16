@extends('admin/layouts/app')

@section('content')

    <p>{!! link_to_route('admin.user', 'ユーザー一覧', [], ['class' => 'btn']) !!}</p>
    <p>{!! link_to_route('admin.center', '施設一覧', [], ['class' => 'btn']) !!}</p>

@endsection