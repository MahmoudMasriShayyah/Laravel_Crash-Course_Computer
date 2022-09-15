@extends('layout')

@section('title', 'Comupters')


@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-2">
            <a href="{{ route('computers.create') }}">
                <button class="btn btn-primary mx-auto">+ Add Computer</button>
            </a>
        </div>
        <div class="flex justify-center">
            <h1>Comupters</h1>
        </div>

        <div class="text-center">
            @if (count($computers) > 0)
                <ul class="p-0">
                    @foreach ($computers as $computer)
                        <a class="text-decoration-none" href="{{ route('computers.show', ['computer' => $computer['id']]) }}">
                            <li>
                                <p class="mb-1">{{ $computer['name'] }} ( {{ $computer['origin'] }}) - <strong>${{ $computer['price'] }}</strong></p>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @else
                <p>There's no Computers to display</p>
            @endif
        </div>
    </div>
@endsection
