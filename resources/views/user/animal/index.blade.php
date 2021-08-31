@extends('user/layouts.app')

@section('content')

    <div class="row">
        <h1>animal index</h1>


        <div class="animal-index">
            @foreach ($animals as $animal)
                <div class="box">
                	<img src="/uploads/{{ $animal->image1 }}" width="250px"><br>
                        @if($animal->animal_type == 0 && $animal->gender == 0)
                            <i class="fas fa-cat fa-2x gender-boy"></i>
                        @elseif($animal->animal_type == 0 && $animal->gender == 1)
                            <i class="fas fa-cat  fa-2x gender-girl"></i>
                        @elseif($animal->animal_type == 1 && $animal->gender == 0)
                            <i class="fas fa-dog  fa-2x gender-boy"></i>
                        @elseif($animal->animal_type == 1 && $animal->gender == 1)
                            <i class="fas fa-dog  fa-2x gender-girl"></i>
                        @endif
                    {!! link_to_route('animals.show', $animal->name, ['animal' => $animal->id]) !!}

                </div>
            @endforeach
        </div>

    </div>


@endsection