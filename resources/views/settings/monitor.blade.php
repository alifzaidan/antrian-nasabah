<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div x-data="{ open: false }" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <div class="mt-2">
                    <label for="runningtext" class="block font-semibold font-poppins text-lg leading-6 text-primary mb-2">Running Text</label>
                    <input id="runningtext" name="runningtext" type="text" placeholder="Selamat Datang di Unit Lowokwaru" required
                        class="block w-full rounded-md border-0 py-2 text-primary shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-tertiary sm:leading-6">
                </div>
            </div>

            <div>
                <label for="Video" class="block font-semibold font-poppins text-lg leading-6 text-primary mb-2">Video</label> 
                <a href="#" @click="open = true" class="flex w-40 justify-center rounded-2xl bg-gradient-to-r from-primary to-secondary py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out font-poppins text-lg">Tambah</a>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <!-- Contoh video yang sudah ditambahkan -->
                    <div class="bg-primary bg-opacity-5 rounded-lg p-4 ring-1 ring-primary justify-center ">
                        <h2 class="text-center font-poppins mb-2">BRIMO</h2>
                        <div class="aspect-video w-full bg-white rounded-xl"></div>
                        <div class="flex justify-evenly mt-2 gap-2 ">
                            <a href="#" class="font-poppins bg-red-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-red-700 transition duration-200">Hapus</a>
                            <a href="#" class="font-poppins bg-green-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-green-700 transition duration-200">Tampilkan</a>
                        </div>
                    </div>
                    <div class="bg-primary bg-opacity-5 rounded-lg p-4 ring-1 ring-primary justify-center ">
                        <h2 class="text-center font-poppins mb-2">CBP Rupiah</h2>
                        <div class="aspect-video w-full bg-white rounded-xl"></div>
                        <div class="flex justify-evenly mt-2 gap-2 ">
                            <a href="#" class="font-poppins bg-red-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-red-700 transition duration-200">Hapus</a>
                            <a href="#" class="font-poppins bg-green-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-green-700 transition duration-200">Tampilkan</a>
                        </div>
                    </div><div class="bg-primary bg-opacity-5 rounded-lg p-4 ring-1 ring-primary justify-center ">
                        <h2 class="text-center font-poppins mb-2">Cinta Bangga Paham</h2>
                        <div class="aspect-video w-full bg-white rounded-xl"></div>
                        <div class="flex justify-evenly mt-2 gap-2 ">
                            <a href="#" class="font-poppins bg-red-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-red-700 transition duration-200">Hapus</a>
                            <a href="#" class="font-poppins bg-green-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-green-700 transition duration-200">Tampilkan</a>
                        </div>
                    </div><div class="bg-primary bg-opacity-5 rounded-lg p-4 ring-1 ring-primary justify-center ">
                        <h2 class="text-center font-poppins mb-2">Pesta Rakyat Simpedes</h2>
                        <div class="aspect-video w-full bg-white rounded-xl"></div>
                        <div class="flex justify-evenly mt-2 gap-2 ">
                            <a href="#" class="font-poppins bg-red-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-red-700 transition duration-200">Hapus</a>
                            <a href="#" class="font-poppins bg-green-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-green-700 transition duration-200">Tampilkan</a>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak video jika diperlukan -->
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="w-40 text-lg rounded-2xl bg-gradient-to-r from-primary to-secondary py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out">Simpan</button>
            </div>
        </form>

        <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-4 rounded-lg" style="width: 400px; height: 420px;">
                <form action="#" method="POST" enctype="multipart/form-data" x-data="{ files: [] }" @dragover.prevent @drop.prevent="files = $event.dataTransfer.files">
                    <h1 class="font-poppins font-semibold text-xl text-primary">Tambah Video</h1>
                    <div>
                        <label for="title" class="block font-poppins text-md text-primary">Judul Video</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-tertiary focus:ring-tertiary sm:text-sm">
                    </div>
                    <div class="mt-4">
                        <label for="video" class="block font-poppins text-md text-primary">Upload Video</label>
                        <div class="mt-1 flex justify-center items-center flex-col px-6 pt-5 pb-6 border-2 h-48 border-gray-300 border-dashed rounded-md" @dragover.prevent @drop.prevent="handleDrop($event)">
                            <div class="space-y-1 text-center" x-data @dragover.prevent @drop.prevent="handleDrop($event)">
                                <img class="mx-auto" src="{{ asset('icons/upload.svg') }}" alt="Upload Video">
                                <div class="text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 hover:text-indigo-500 focus-without:outline-none ">
                                        <span class="font-poppins">Upload a file</span>
                                        <input id="file-upload" name="video" type="file" class="sr-only" @change="files = $event.target.files" accept="video/*">
                                    </label>
                                    <p class="pl-1 font-poppins">or drag and drop files here</p>
                                </div>
                                <template x-if="files.length">
                                    <div>
                                        <p x-text="files[0].name"></p>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button type="button" @click="open = false; files = []" class="mr-2 inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 font-poppins">Batal</button>
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 font-poppins">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-settings>
