@extends('layout.app')
@include("components.navbar")
@section('content')
    <div class="container-fluid w-50 mt-5">
        <h2>Contact Me</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn mt-5 btn-secondary text-light">Submit</button>
            <div class="mb-5"></div>
        </form>
    </div>
    <hr class="text-primary">
    <div class="mb-5"></div>
@endsection
@section('footer')
@include("components.footer")
@endsection