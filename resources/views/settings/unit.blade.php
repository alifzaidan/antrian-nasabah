<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="mt-2 ">
                    <label for="nama"
                        class="block font-semibold font-poppins text-lg leading-6 text-primary mb-2">Nama Unit</label>
                    <input id="nama" name="nama" type="text" placeholder="Lowokwaru, Malang" required
                        class="block w-full rounded-md border-0 py-2 text-primary shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">
                </div>
            </div>
            <div>
                <div class="mt-2 ">
                    <label for="alamat"
                        class="block font-semibold font-poppins text-lg leading-6 text-primary mb-2">Alamat Unit</label>
                    <textarea id="alamat" name="alamat" type="text" placeholder="Jl. Tlogomas Ruko Megah Jaya No.10, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur, Malang, Jawa Timur, Indonesia 65144" required 
                        class="block w-full rounded-md border-0 py-2 h-32 text-primary shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6"></textarea>
                </div>
            </div>
            <div>
                <div class="mt-2 ">
                    <label for="no_telp"
                        class="block font-semibold font-poppins text-lg leading-6 text-primary mb-2">No Telpon Unit</label>
                    <input id="no_telp" name="no_telp" type="text" placeholder="(0341) 572220" required
                        class="block w-full rounded-md border-0 py-2 text-primary shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">
                </div>
            </div>

            

            <div class="flex justify-end">
                <button type="submit"
                    class=" w-40 text-lg rounded-2xl bg-gradient-to-r from-primary to-secondary py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out">Simpan</button>
            </div>
        </form>
    </div>
</x-settings>