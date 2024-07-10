<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-6">
        <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
            <div class="grid grid-cols-1 gap-4">
                <div class="bg-white shadow-md rounded-2xl p-4">
                    <h2 class="font-poppins text-xl text-primary font-semibold mb-4">Data Antrean Nasabah</h2>
                    <div class="overflow-x-auto rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-primary bg-opacity-10">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 font-poppins uppercase tracking-wider">
                                        Operasional</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 font-poppins uppercase tracking-wider">
                                        Tgl. Data Awal</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 font-poppins uppercase tracking-wider">
                                        Tgl. Data Akhir</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 font-poppins uppercase tracking-wider">
                                        Total Data Antrean</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 font-poppins uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 font-semibold font-poppins whitespace-nowrap">Teller</td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">{{ $tanggalAwalTeller }}</td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">{{ $tanggalAkhirTeller }}</td>
                                    <td class="px-6 py-4 font-semibold font-poppins whitespace-nowrap">{{
                                        $jumlahAntreanTeller }}</td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">
                                        <form action="{{ route('settings.operasional.reset.teller') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-orange-500 hover:bg-orange-700 text-white w-full font-poppins font-semibold py-2 px-4 rounded-lg">
                                                Reset
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 font-semibold font-poppins whitespace-nowrap">Customer Service
                                    </td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">{{ $tanggalAwalCs }}</td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">{{ $tanggalAkhirCs }}</td>
                                    <td class="px-6 py-4 font-semibold font-poppins whitespace-nowrap">{{
                                        $jumlahAntreanCs }}</td>
                                    <td class="px-6 py-4 font-poppins whitespace-nowrap">
                                        <form action="{{ route('settings.operasional.reset.cs') }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="bg-orange-500 hover:bg-orange-700 text-white w-full font-poppins font-semibold py-2 px-4 rounded-lg">
                                                Reset
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-4 gap-0">
                <div class="bg-white mt-4 shadow-md rounded-2xl p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-poppins text-primary font-semibold text-xl">Data Teller</h3>
                        <div class="flex space-x-2">
                            <button
                                class="font-poppins font-semibold bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-lg">
                                Tambah
                            </button>
                            <button
                                class="font-poppins font-semibold bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-lg">
                                Hapus
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2">
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Teller - 1
                        </div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Teller - 2
                        </div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Teller - 3
                        </div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">-</div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">-</div>
                    </div>
                </div>
                <div class="bg-white mt-4 shadow-md rounded-2xl p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-poppins text-primary font-semibold text-xl">Data Customer Service</h3>
                        <div class="flex space-x-2">
                            <button
                                class="font-poppins font-semibold bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded-lg">
                                Tambah
                            </button>
                            <button
                                class="font-poppins font-semibold bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded-lg">
                                Hapus
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2">
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Customer
                            Service - 1</div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Customer
                            Service - 2</div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">Customer
                            Service - 3</div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">-</div>
                        <div class="font-poppins font-reguler border-b border-gray-300 py-2">-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-settings>