@extends('layouts.main')

@section('title')
    Feedback Form
@endsection

@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Contact Us</h1>
        <form action="{{ route('feedback.send') }}" method="POST" class="space-y-4">
            @csrf
            @method('post')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                >
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Feedback</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    placeholder="Write your feedback"
                    required
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                ></textarea>
            </div>
            <button
                type="submit"
                class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Submit Feedback
            </button>
            @if(session()->has('success'))
                <div class="mb-4 text-green-700 bg-green-100 p-4 rounded-lg border border-green-400">
                    {{ session('success') }}
                </div>
            @endif
        </form>
    </div>
@endsection
