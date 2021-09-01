@extends('user/layouts.app')

@section('content')

    <div class="row">
        <h1>animal index</h1>


        <div class="animal-index">
            @foreach ($animals as $animal)
                <div class="box">
                	<a href="{{ route('animals.show', ['animal' => $animal->id])}}"><img src="/uploads/{{ $animal->image1 }}" width="250px"></a>
                        @if($animal->animal_type == 0 && $animal->gender == 0)
                            <i class="fas fa-cat fa-2x gender-boy"></i>
                        @elseif($animal->animal_type == 0 && $animal->gender == 1)
                            <i class="fas fa-cat  fa-2x gender-girl"></i>
                        @elseif($animal->animal_type == 1 && $animal->gender == 0)
                            <i class="fas fa-dog  fa-2x gender-boy"></i>
                        @elseif($animal->animal_type == 1 && $animal->gender == 1)
                            <i class="fas fa-dog  fa-2x gender-girl"></i>
                        @endif
                        <span class="text-right">{{ $animal->center->prefName }}</span>

                </div>
            @endforeach
        </div>

    </div>


@endsection