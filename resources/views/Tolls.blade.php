@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Tolls</h2>
    </div>
    <div class="content">
        @foreach($tolls as $toll)
           <article class="element">
                <h3>{{$toll->name}}</h3>
                <div>
                    <h4>vehicles</h4>
                    @foreach($toll->vehicles as $vehicle)
                        <p>{{$vehicle->vehicleType->type}}. {{$vehicle->registration}}</p>
                    @endforeach
                    <h4>Total earned</h4>
                    <p>${{$toll->earned}}</p>
                </div>
           </article>
        @endforeach
    </div>
@endsection
