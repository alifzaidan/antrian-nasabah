<x-settings>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div x-data="{ open: false, files: [], showConfirm: false, selectedVideo: '', uploadProgress: 0 }" class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="#" method="POST" class="space-y-6" @submit.prevent="showConfirm = true">
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
                    <!-- Konten Video -->
                    <template x-for="(video, index) in ['BRIMO', 'CBP Rupiah', 'Cinta Bangga Paham', 'Pesta Rakyat Simpedes']" :key="index">
                        <div class="bg-primary bg-opacity-5 rounded-lg p-4 ring-1 ring-primary justify-center" :class="selectedVideo === video ? 'bg-opacity-20' : 'bg-opacity-5'">
                            <h2 class="text-center font-poppins mb-2" x-text="video"></h2>
                            <div class="aspect-video w-full bg-white rounded-xl"></div>
                            <div class="flex justify-evenly mt-2 gap-2">
                                <button type="button" :disabled="selectedVideo === video" @click="if (selectedVideo !== video) selectedVideo = ''; selectedVideo = video" :class="selectedVideo === video ? 'opacity-50 cursor-not-allowed' : ''" class="font-poppins bg-red-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-red-700 transition duration-200">
                                    Hapus
                                </button>
                                <button type="button" @click="selectedVideo === video ? selectedVideo = '' : selectedVideo = video" :class="selectedVideo === video ? 'opacity-50 cursor-not-allowed' : ''" class="font-poppins bg-green-600 py-2 px-4 rounded-xl w-full text-white text-center hover:bg-green-700 transition duration-200">
                                    Tampilkan
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <button type="reset" @click="selectedVideo = ''" class="w-40 text-lg rounded-2xl bg-gray-500 py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out">Reset</button>
                <button type="submit" class="w-40 text-lg rounded-2xl bg-gradient-to-r from-primary to-secondary py-3 font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary hover:scale-105 transition duration-300 ease-in-out">Simpan</button>
            </div>
        </form>

        <div x-show="open" @click.away="open = false" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-4 rounded-lg" style="width: 400px; height: 420px;">
                <form @submit="uploadVideo">
                    <h1 class="font-poppins font-semibold text-xl text-primary">Tambah Video</h1>
                    <div>
                        <label for="title" class="block font-poppins text-md text-primary">Judul Video</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-tertiary focus:ring-tertiary sm:text-sm">
                    </div>
                    <div class="mt-4">
                        <label for="video" class="block font-poppins text-md text-primary">Upload Video</label>
                        <div class="mt-1 flex justify-center items-center flex-col px-6 pt-5 pb-6 border-2 h-48 border-gray-300 border-dashed rounded-md" @dragover.prevent @drop.prevent="files = $event.dataTransfer.files">
                            <div class="space-y-1 text-center">
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
                    <div x-show="uploadProgress > 0" class="mt-4">
                        <label class="block font-poppins text-md text-primary">Upload Progress</label>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" :style="{ width: uploadProgress + '%' }"></div>
                        </div>
                        <p x-text="uploadProgress + '%'"></p>
                    </div>
                    <div class="mt-4 flex justify-end">
                        <button type="button" @click="open = false; files = []" class="mr-2 inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 font-poppins">Batal</button>
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 font-poppins">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div x-show="showConfirm" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
            <div class="bg-white p-4 rounded-lg shadow-xl">
                <p class="font-poppins mb-4 text-lg">Apakah Anda yakin untuk menyimpan perubahan ini?</p>
                <div class="flex justify-end mt-4">
                    <button @click="showConfirm = false" class="mr-2 inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Tidak</button>
                    <button @click="showConfirm = false; open = false; submitForm()" class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Ya</button>
                </div>
            </div>
        </div>
    </div>    
</x-settings>

<script>
    function submitForm() {
        document.querySelector('form').submit();
    }
    function uploadVideo() {
        let formData = new FormData();
        formData.append('title', document.querySelector('#title').value);
        formData.append('video', document.querySelector('#file-upload').files[0]);

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        formData.append('_token', csrfToken);

        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/upload-video', true);

        xhr.upload.addEventListener('progress', function(e) {
            if (e.lengthComputable) {
                let percentComplete = (e.loaded / e.total) * 100;
                document.querySelector('[x-data]').__x.$data.uploadProgress = percentComplete;
            }
        });

        xhr.addEventListener('load', function() {
            if (xhr.status === 200) {
                alert('Upload successful!');
                document.querySelector('[x-data]').__x.$data.open = false;
                document.querySelector('[x-data]').__x.$data.files = [];
                document.querySelector('[x-data]').__x.$data.uploadProgress = 0;
            } else {
                console.log(xhr.status)
                alert('Upload failed!');
            }
        });

        xhr.send(formData);
    }
    
</script>
