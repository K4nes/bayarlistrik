<x-layout>
    <div class="flex justify-start mt-6 ml-6">
        <a href="{{ route('halamantarif.index') }}" 
            class="px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-500">
            Kembali
        </a>
    </div>

    <div class="p-4 lg:p-6">
        <div class="bg-white rounded-lg shadow max-w-lg mx-auto">
            <h2 class="text-lg font-medium p-4 bg-gray-100">EDIT TARIF</h2>
            <form action="{{ route('halamantarif.update', $tarif->id) }}" method="POST" class="p-4 space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-gray-700">Golongan Tarif</label>
                    <select name="golongan" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                        <option value="R1" {{ $tarif->golongan == 'R1' ? 'selected' : '' }}>R1</option>
                        <option value="R2" {{ $tarif->golongan == 'R2' ? 'selected' : '' }}>R2</option>
                        <option value="R3" {{ $tarif->golongan == 'R3' ? 'selected' : '' }}>R3</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Daya</label>
                    <select name="daya" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                        <option value="450VA" {{ $tarif->daya == '450VA' ? 'selected' : '' }}>450VA</option>
                        <option value="900VA" {{ $tarif->daya == '900VA' ? 'selected' : '' }}>900VA</option>
                        <option value="1300VA" {{ $tarif->daya == '1300VA' ? 'selected' : '' }}>1300VA</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Tarif per kWh</label>
                    <input type="text" name="tarif_per_kwh" value="{{ $tarif->tarif_per_kwh }}"
                        class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" />
                </div>

                <div class="space-y-2">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
