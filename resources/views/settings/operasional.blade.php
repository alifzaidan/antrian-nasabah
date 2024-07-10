<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-6">
        <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
            <div class="grid grid-cols-1 gap-4 mt-0">
                <div class="bg-white shadow-md rounded-2xl p-4">
                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <h3 class="font-poppins text-primary font-semibold text-xl">Operasional</h3>
                        </div>
                        <div>
                            <h3 class="font-poppins text-primary font-semibold text-xl">Tgl. Data Awal</h3>
                        </div>
                        <div>
                            <h3 class="font-poppins text-primary font-semibold text-xl">Tgl. Data Akhir</h3>
                        </div>
                        <div>
                            <h3 class="font-poppins text-primary font-semibold text-xl">Total Data Antrean</h3>
                        </div>
                        <div></div>
                        <div class="font-poppins text-primary font-semibold border-b border-gray-300 py-2">
                            Teller
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            02/01/2024
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            02/02/2024
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            30
                        </div>
                        <div class="flex justify-center space-x">
                            <button class="bg-orange-500 hover:bg-orange-700 text-white w-full font-poppins font-semibold py-2 px-4 rounded-lg">
                                Reset
                            </button>
                        </div>
                        <div class="font-poppins text-primary font-semibold border-b border-gray-300 py-2">
                        Customer Service
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            02/01/2024
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            02/02/2024
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">
                            30
                        </div>
                        <div class="flex justify-center space-x">
                            <button class="bg-orange-500 hover:bg-orange-700 text-white w-full font-poppins font-semibold py-2 px-4 rounded-lg">
                                Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-0">
                <div class="bg-white mt-4 shadow-md rounded-2xl p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-poppins text-primary font-semibold text-xl">No. Teller</h3>
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
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Teller - 1
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Teller - 2
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Teller - 3
                        </div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">-</div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">-</div>
                    </div>
                </div>
                <div class="bg-white mt-4 shadow-md rounded-2xl p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-poppins text-primary font-semibold text-xl">No. Customer Service</h3>
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
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Customer
                            Service - 1</div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Customer
                            Service - 2</div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">Customer
                            Service - 3</div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">-</div>
                        <div class="font-poppins text-primary font-reguler border-b border-gray-300 py-2">-</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-settings>