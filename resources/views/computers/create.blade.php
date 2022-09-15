@extends('layout')

@section('title', 'Create Comupter')


@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
            <h1>Create a new comupter</h1>
        </div>

        <div class="flex justify-center">
            <form action="{{ route('computers.store') }}" method="post">
                @csrf {{-- cross-site request forgery --}}
                <div>
                    <label for="computer-name">Computer Name</label>
                    <input type="text" name="computer-name" id="computer-name" value="{{ old('computer-name') }}" class="border-gray-800">
                    @error('computer-name')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="computer-origin">Computer Origin</label>
                    <input type="text" name="computer-origin" id="computer-origin" value="{{ old('computer-origin') }}" class="bg-border">
                    @error('computer-origin')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="computer-price">Computer Price</label>
                    <input type="text" name="computer-price" id="computer-price" value="{{ old('computer-price') }}" class="bg-border">
                    @error('computer-price')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection
