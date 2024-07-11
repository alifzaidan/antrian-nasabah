<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div x-data="{ showModal: false }" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md">
                <p class="text-lg mb-4 font-poppins">Apakah Anda yakin ingin menyimpan perubahan ini?</p>
                <div class="flex justify-end">
                    <button @click="showModal = false"
                        class="mr-2 px-4 py-2 bg-red-600 text-white hover:bg-red-700 rounded-lg font-poppins">Tidak</button>
                    <button @click="showModal = false; $refs.form.submit();"
                        class="px-4 py-2 bg-green-600 text-white hover:bg-green-700 rounded-lg font-poppins">Ya</button>
                </div>
            </div>
        </div>

        <form x-ref="form" class="space-y-6" action="{{ route('settings.unit.update', $unit->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div>
                <div class="mt-2">
                    <label for="nama" class="block font-semibold font-poppins text-lg text-primary mb-2">Nama
                        Unit</label>
                    <input id="nama" name="nama" type="text" placeholder="Lowokwaru, Malang" value="{{ $unit->nama }}"
                        required
                        class="block w-full rounded-md border-0 py-2 text-primary font-poppins shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">
                </div>
            </div>
            <div>
                <div class="mt-2">
                    <label for="alamat" class="block font-semibold font-poppins text-lg text-primary mb-2">Alamat
                        Unit</label>
                    <textarea id="alamat" name="alamat" type="text"
                        placeholder="Jl. Tlogomas Ruko Megah Jaya No.10, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur, Malang, Jawa Timur, Indonesia 65144"
                        required
                        class="block w-full rounded-md border-0 py-2 h-32 text-primary font-poppins shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">{{ $unit->alamat }}</textarea>
                </div>
            </div>
            <div>
                <div class="mt-2">
                    <label for="no_telp" class="block font-semibold font-poppins text-lg text-primary mb-2">No Telpon
                        Unit</label>
                    <input id="no_telp" name="no_telp" type="text" placeholder="(0341) 572220"
                        value="{{ $unit->no_telp }}" required
                        class="block w-full rounded-md border-0 py-2 text-primary font-poppins shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">
                </div>
            </div>

            <div class="flex justify-end">
                <button @click.prevent="showModal = true"
                    class="w-40 text-lg rounded-2xl bg-gradient-to-r from-primary font-poppins to-secondary py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out">Simpan</button>
            </div>
        </form>
    </div>
</x-settings>

<script>
    function submitForm() {
        document.getElementById('myForm').submit();
    }
</script>