@extends('user/layouts.app')

@section('content')
    <h1>animal index</h1>

    <div class="row">
        @include('user.animal.box')
    </div>


@endsection