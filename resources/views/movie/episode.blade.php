@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center my-4">List by episode</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2">
                @foreach ($seasons as $season)
                    @if ($s != $season->season)
                        @php
                            $className = 'btn-primary';
                        @endphp
                    @else
                        @php
                            $className = 'btn-outline-primary';
                        @endphp
                    @endif
                    <a href="{{ url('') }}/list-by-episode/{{ $season->season }}/1"
                        class="btn {{ $className }} w-100 mb-2">Season {{ $season->season }}</a>
                @endforeach
            </div>
            <div class="col-12 col-md-10">
                @foreach ($numbers as $number)
                    <a href="{{ url('') }}/list-by-episode/{{ $s }}/{{ $number->number }}"
                        class="btn btn-primary">{{ $number->number }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
