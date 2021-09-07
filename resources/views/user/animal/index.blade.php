@extends('user/layouts.app')

@section('content')
    <div class="second-title">わんにゃん一覧</div>

    <div class="row">
        <div class="animal-index">
            @include('user.animal.box')
            {{ $animals->links() }}
        </div>
    </div>
@endsection