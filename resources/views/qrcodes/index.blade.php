@extends('layouts.main')
@section('title')
    QR Code Generator
@endsection

@section('content')
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4 text-center">
            QR Code Generator
        </h1>

        <div class="mb-4">
            <label for="link" class="block text-gray-700 font-medium mb-2">
                Enter URL
            </label>
            <input
                type="text"
                id="link"
                placeholder="https://example.com"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
        </div>

        <div class="text-center mb-4">
            <button
                id="generateBtn"
                class="bg-gradient-to-r from-blue-500 to-blue-700 text-white font-medium px-6 py-2 rounded-lg hover:from-blue-600 hover:to-blue-800 transition duration-300 shadow-md"
            >
                Generate QR Code
            </button>
        </div>

        <div id="qrCodeContainer" class="flex justify-center mt-4"></div>
    </div>

    <script>
        document.getElementById('generateBtn').addEventListener('click', function () {
            const link = document.getElementById('link').value;
            if (link) {
                const qrCodeContainer = document.getElementById('qrCodeContainer');
                qrCodeContainer.innerHTML = '';
                new QRCode(qrCodeContainer, link);
            }
        });
    </script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
@endsection
