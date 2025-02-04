<x-layout>
    <div class="flex justify-start mt-6 ml-6">
        <a href="/" class="px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-500">
            Back
        </a>
    </div>

    <div class="p-4 lg:p-6">
        <div class="flex flex-col lg:grid lg:grid-cols-4 gap-6">
            <!-- Left Form -->
            <div class="lg:col-span-1 w-full">
                <div class="bg-white rounded-lg shadow">
                    <h2 class="text-lg font-medium p-4 bg-gray-100">INPUT TARIF</h2>
                    <form action="{{ route('halamantarif.store') }}" method="POST" class="p-4 space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Golongan Tarif</label>
                            <select name="golongan" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                                <option value="R1">R1</option>
                                <option value="R2">R2</option>
                                <option value="R3">R3</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Daya</label>
                            <select name="daya" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                                <option value="450VA">450VA</option>
                                <option value="900VA">900VA</option>
                                <option value="1300VA">1300VA</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tarif per kWh</label>
                            <input type="text" name="tarif_per_kwh"
                                class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" required />
                        </div>
                        <div class="space-y-2">
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
                                SIMPAN
                            </button>
                            <button type="reset" class="w-full bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">
                                RESET
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Table -->
            <div class="lg:col-span-3 w-full">
                <div class="bg-white rounded-lg shadow">
                    <h2 class="text-lg font-medium p-4 bg-gray-100">DATA TARIF</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">No</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Kode Tarif</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Golongan</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Daya</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Tarif per kWh</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($inputtarif as $index => $tarif)
                                    <tr>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">{{ $index + 1 }}</td>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">{{ $tarif->kode_tarif }}</td>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">{{ $tarif->golongan }}</td>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">{{ $tarif->daya }}</td>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">Rp{{ number_format($tarif->tarif_per_kwh) }}</td>
                                        <td class="px-4 py-2 text-sm font-medium text-gray-900">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('halamantarif.edit', $tarif->id) }}" 
                                                    class="bg-yellow-500 text-white py-1 px-2 rounded hover:bg-yellow-600">
                                                    Edit
                                                </a>
                                                <form action="{{ route('halamantarif.destroy', $tarif->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                        class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-600">
                                                        Hapus
                                                    </button>
                                                    </div>
                                                </form>
                                            </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (session('success'))
                            <div class="p-4 bg-green-200 text-green-800 mt-4 rounded">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
