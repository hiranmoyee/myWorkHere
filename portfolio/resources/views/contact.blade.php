@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>

    @if(session('success'))
        <script>
            window.addEventListener('load', function() {
                alert('{{ session('success') }}');
            });
        </script>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    @endsection
