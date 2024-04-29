@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-user-urls :shortenedURLs=$shortenedURLs></x-user-urls>
            </div>
        </div>
    </div>
@endsection
