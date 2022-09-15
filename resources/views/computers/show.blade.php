@extends('layout')

@section('title', 'Show Comupter')


@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-center pt-8">
            <h1>Comupters</h1>
        </div>

        <div class="mt-8 text-center">
            <p>{{ $computer['name'] }} ( {{ $computer['origin'] }}) - <strong>${{ $computer['price'] }}</strong></p>
        </div>

        <div class="btns">
            <a href="{{ route('computers.edit', $computer -> id) }}" class="edit-btn">edit</a>

            <form action="{{ route('computers.destroy', $computer -> id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" class="delete-btn">
            </form>
        </div>

    </div>
@endsection
