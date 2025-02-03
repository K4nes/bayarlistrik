<x-layout>
    <div class="flex justify-start mt-6 ml-6">
        <a href="/daftarpelanggan" class="px-4 py-2 text-white transition-colors duration-150 ease-in-out bg-gray-600 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back
        </a>
    </div>

    <div class="p-4 lg:p-6">
        <div class="flex flex-col lg:grid lg:grid-cols-4 gap-6">
            <!-- Left Form -->
            <div class="lg:col-span-1 w-full">
                <div class="bg-white rounded-lg shadow">
                    <h2 class="text-lg font-medium p-4 bg-gray-100">EDIT PELANGGAN</h2>
                    <form action="/daftarpelanggan/{{ $pelanggan->id_pelanggan }}" method="POST" class="p-4 space-y-4">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="nomor" class="block text-sm font-medium text-gray-700">ID PELANGGAN</label>
                            <input type="text" name="nomor" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" value="{{ old('nomor', $pelanggan->id_pelanggan) }}" readonly />
                            @error('nomor') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="no_meter" class="block text-sm font-medium text-gray-700">NO METER</label>
                            <input type="text" name="no_meter" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" value="{{ old('no_meter', $pelanggan->no_meter) }}" />
                            @error('no_meter') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="nama_pelanggan" class="block text-sm font-medium text-gray-700">NAMA PELANGGAN</label>
                            <input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}" />
                            @error('nama_pelanggan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">ALAMAT</label>
                            <textarea name="alamat" rows="3" placeholder="Masukkan Alamat Pelanggan" class="mt-1 block w-full border focus:border-gray-900 focus:ring focus:ring-gray-900 rounded-md border-gray-300 p-2">{{ old('alamat', $pelanggan->alamat) }}</textarea>
                            @error('alamat') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="id_tarif" class="block text-sm font-medium text-gray-700">JENIS TARAF</label>
                            <select name="id_tarif" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                                <option value="rumah" {{ old('id_tarif', $pelanggan->id_tarif) == 'rumah' ? 'selected' : '' }}>RUMAH</option>
                                <option value="kantor" {{ old('id_tarif', $pelanggan->id_tarif) == 'kantor' ? 'selected' : '' }}>KANTOR</option>
                                <option value="industri" {{ old('id_tarif', $pelanggan->id_tarif) == 'industri' ? 'selected' : '' }}>INDUSTRI</option>
                            </select>
                            @error('id_tarif') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="tgl_bayar" class="block text-sm font-medium text-gray-700">Tanggal Bayar</label>
                            <input type="date" name="tgl_bayar" class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" value="{{ old('tgl_bayar', $pelanggan->tgl_bayar) }}" placeholder="dd/mm/yy" />
                            @error('tgl_bayar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="space-y-2">
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">SIMPAN</button>
                            <button type="reset" class="w-full bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
