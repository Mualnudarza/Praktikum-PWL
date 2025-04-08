<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center">Feedback Data</h1>
        </header>

        <main>
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Feedback Form</h2>
                <livewire:feedback-form />
            </div>

            {{-- <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Contact Form</h2>
                <livewire:contact-form />
            </div> --}}

            <div>
                <livewire:tampil-data />
            </div>
        </main>
    </div>

    @livewireScripts
</body>
</html>
