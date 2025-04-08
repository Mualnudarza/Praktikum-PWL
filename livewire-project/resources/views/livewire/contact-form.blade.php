<div class="container mx-auto p-6">
    <div class="bg-white rounded-3xl shadow-lg p-8 max-w-md mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Form Contact</h2>
            <p class="text-gray-500 text-sm">Silahkan isi form contact dibawah ini</p>
        </div>

        <!-- Form Section -->
        <form wire:submit.prevent="submit" class="space-y-4">
            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                    </svg>
                </div>
                <input type="text" id="name" wire:model="name" 
                    placeholder="Masukkan nama anda"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500">
                @error('name')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                </div>
                <input type="email" id="email" wire:model="email" 
                    placeholder="Masukkan email anda"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500">
                @error('email')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </div>
                <input type="text" id="phone" wire:model="phone" 
                    placeholder="Masukkan nomor telepon"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500">
                @error('phone')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="relative">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1.581.814l-4.419-2.944-4.419 2.944A1 1 0 014 16V4zm5 0a1 1 0 00-1 1v6.5a.5.5 0 00.765.424L12 9.348l3.235 2.576A.5.5 0 0016 11.5V5a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="institution" wire:model="institution" 
                    placeholder="Masukkan nama instansi"
                    class="pl-10 w-full py-3 rounded-xl border-gray-200 bg-gray-50 focus:border-orange-500 focus:ring-orange-500">
                @error('institution')
                    <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" 
                class="w-full py-3 px-4 bg-orange-400 hover:bg-orange-500 text-white font-medium rounded-xl transition duration-200">
                Kirim Contact
            </button>
        </form>

        @if (session()->has('message'))
            <div class="mt-4 p-4 rounded-md bg-green-50 text-green-800 text-center">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
