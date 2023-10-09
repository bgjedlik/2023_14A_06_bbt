@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3 text-center my-4">The Big Bang Theory</h1>
        </div>

        @foreach ($episodes as $episode)

            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="{{ $episode->imageoriginal }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $episode->name }}</h5>
                        <p class="card-text">{!! $episode->summary !!}</p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>



@endsection
