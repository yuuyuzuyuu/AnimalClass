@if (count($animals) > 0)
    @foreach ($animals as $animal)
        @if (Auth::guard('center')->check())
            <a href="{{ route('animals.show', ['animal' => $animal->id])}}">
        @elseif(Auth::guard('user')->check())
            <a href="{{ route('user.animals.show', ['id' => $animal->id])}}">
        @else
            <a href="{{ route('signup.get')}}">
        @endif
                <div class="box">
                    <div class="box-image">
                        @if($animal->active_status == 0)
                    	    @if($animal->image2)
                    	        <img src="{{ $animal->image2 }}" width="250px" height="177px">
                    	    @endif
                    	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                    	@elseif($animal->active_status == 1)
                    	    @if($animal->image2)
                    	        <img src="{{ $animal->image2 }}" width="250px" height="177px">
                    	    @endif
                    	    <img src="{{ $animal->image1 }}" width="250px" height="177px">
                    	    <p>募集終了</p>
                    	@endif
                    </div>
    
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
            </a>
    @endforeach
@else
    <p>新着情報はありません</p>
@endif