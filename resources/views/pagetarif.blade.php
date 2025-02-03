<x-layout>
    <div class="flex justify-start mt-6 ml-6">
        <a href="/"
            class="px-4 py-2 text-white transition-colors duration-150 ease-in-out bg-gray-600 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Back
        </a>
    </div>

    <div class="p-4 lg:p-6">
        <div class="flex flex-col lg:grid lg:grid-cols-4 gap-6">
            <!-- Left Form -->
            <div class="lg:col-span-1 w-full">
                <div class="bg-white rounded-lg shadow">
                    <h2 class="text-lg font-medium p-4 bg-gray-100">INPUT TARIF</h2>
                    <form class="p-4 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Golongan Tarif</label>
                            <select class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                                <option value="">R1</option>
                                <option value="">R2</option>
                                <option value="">R3</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Daya</label>
                            <select class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2">
                                <option value="">450VA</option>
                                <option value="">900VA</option>
                                <option value="">1300VA</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tarif per kWh</label>
                            <input type="text"
                                class="mt-1 block w-full border-gray-300 rounded-md bg-gray-100 p-2" />
                        </div>
                        <div class="space-y-2">
                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">SIMPAN</button>
                            <button type="reset"
                                class="w-full bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">RESET</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Table -->
            <div class="lg:col-span-3 w-full">
                <div class="bg-white rounded-lg shadow">
                    <h2 class="text-lg font-medium p-4 bg-gray-100">DATA TARIF</h2>
                    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 p-4">
                        <input type="text" placeholder="Cari Tarif"
                            class="flex-1 border-gray-300 rounded-md bg-blue-200 p-2" />
                        <div class="flex space-x-2">
                            <button class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Cari</button>
                            <button class="bg-red-600 text-white p-2 rounded hover:bg-red-700">Refresh</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">No</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Kode Tarif</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Daya</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Tarif per kWh</th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-900">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-2 text-sm font-medium text-gray-900">1</td>
                                    <td class="px-4 py-2 text-sm font-medium text-gray-900">R1/900VA</td>
                                    <td class="px-4 py-2 text-sm font-medium text-gray-900">900 VA</td>
                                    <td class="px-4 py-2 text-sm font-medium text-gray-900">Rp1.352</td>
                                    <td class="px-4 py-2 text-sm font-medium text-gray-900">
                                        <div class="flex space-x-2">
                                            <button
                                                class="bg-yellow-500 text-white py-1 px-2 rounded hover:bg-yellow-600">Edit</button>
                                            <button
                                                class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-600">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
