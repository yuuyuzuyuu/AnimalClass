@extends('center/layouts.app')

@section('content')

    <h1>Center top</h1>
    
    {!! link_to_route('animals.create', '新規投稿', []) !!}

@endsection