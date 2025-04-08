<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Laravel Livewire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <header class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Praktikum Laravel Livewire</h1>
            <p class="text-gray-600">Mahasiswa dapat membangun aplikasi sistem informasi transaksional berbasis web menggunakan Laravel, lengkap dengan fitur otentikasi dan manajemen konten.</p>
        </header>

        <main class="max-w-7xl mx-auto space-y-12">
            <!-- Forms Section - Side by Side -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Feedback Form - Left Side -->
                <div class="bg-white rounded-3xl shadow-xl p-1">
                    <livewire:feedback-form />
                </div>

                <!-- Contact Form - Right Side -->
                <div class="bg-white rounded-3xl shadow-xl p-1">
                    <livewire:contact-form />
                </div>
            </div>

            <!-- Data Display Section - Below Forms -->
            <div class="bg-white rounded-3xl shadow-xl p-1">
                <livewire:tampil-data />
            </div>
        </main>
    </div>

    @livewireScripts
</body>
</html>
