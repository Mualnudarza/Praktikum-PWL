<div class="container mx-auto p-6">
    <div class="bg-white rounded-3xl shadow-lg p-6">
        <!-- Header Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Data Contact</h2>
            <p class="text-gray-600">Daftar contact yang telah ditambahkan ke dalam database menggunakan komponen Livewire.</p>
        </div>

        <!-- Table Section -->
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                                </svg>
                                Nama
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                                Email
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                No HP
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 01-1.581.814l-4.419-2.944-4.419 2.944A1 1 0 014 16V4zm5 0a1 1 0 00-1 1v6.5a.5.5 0 00.765.424L12 9.348l3.235 2.576A.5.5 0 0016 11.5V5a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                                Instansi
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $contact->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->phone }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ $contact->institution }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-6 px-6 py-4 border-t border-gray-100">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</div>
