@extends('user/layouts.app')

@section('content')
    <div class="second-title">わんにゃん一覧</div>

    <div class="row">
        @include('user.animal.box')
    </div>
@endsection