@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Vehicles</h2>
    </div>
    <div class="content">
        @foreach($vehicles as $vehicle)
           <article class="element">
                <h3>{{$vehicle->registration}}</h3>
                <div>
                    <h4>Tolls</h4>
                    @foreach($vehicle->tolls as $toll)
                        <p>{{$toll->name}}. {{$toll->city}}</p>
                    @endforeach
                    <h4>Spent</h4>
                    <p>${{$vehicle->spent}}</p>
                </div>
           </article>
        @endforeach
    </div>
@endsection
