<!doctype html>
<html lang="en" class="h-full bg-pattern-dark bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <title>Antrean Nasabah Bank BRI</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <main class="min-h-screen">
        <div class="grid grid-cols-2 grid-flow-row auto-rows-min gap-5 p-8 min-h-screen">
            {{-- Jam --}}
            <div class="flex gap-8 justify-between items-end">
                <div>
                    <img src="{{ asset('img/logo-bri-light.png') }}" alt="Logo BRI" class="h-16">
                    <p class="font-poppins font-medium text-white text-lg mt-1">Melayani Dengan Setulus Hati</p>
                </div>
                <div class="text-white font-poppins text-xl w-52 lg:text-left text-center" id="time">
                    <h1 id="date"></h1>
                    <h1 class="font-bold text-5xl" id="clock"></h1>
                </div>
            </div>
            {{-- Video --}}
            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 row-span-2">
                <div class="bg-white aspect-video rounded-xl flex items-center justify-center w-full p-2 h-full">
                    <video id="videoPlayer" class="rounded-xl h-full" autoplay muted loop>
                        <source src="{{ asset($video->path) }}" type="video/mp4">
                    </video>
                </div>
            </div>
            {{-- Antrean Teller --}}
            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl px-16 py-2 h-full gap-4 flex flex-col justify-center">
                    <div class="flex items-center justify-between w-full">
                        <h1 class="text-2xl font-semibold font-poppins text-primary">Nomor Antrean</h1>
                        <h1 class="text-2xl font-semibold font-poppins text-primary">Counter</h1>
                    </div>
                    <div class="h-[3px] w-full bg-primary my-4"></div>
                    <div class="flex items-center justify-between w-full">
                        <h2
                            class="{{ $antreanTellerFormat == 'Belum ada' ?  'text-5xl' : 'text-7xl'}} font-bold font-poppins text-tertiary">
                            {{ $antreanTellerFormat }}</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        <h2 class="text-7xl font-bold font-poppins text-tertiary">{{ $antreanTellerCounter }}</h2>
                    </div>
                </div>
            </div>
            {{-- Antrian CS --}}
            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl px-16 py-8 h-full gap-4 flex flex-col justify-center">
                    <div class="flex items-center justify-between w-full">
                        <h1 class="text-2xl font-semibold font-poppins text-primary">Nomor Antrean</h1>
                        <h1 class="text-2xl font-semibold font-poppins text-primary">Counter</h1>
                    </div>
                    <div class="h-[3px] w-full bg-primary my-4"></div>
                    <div class="flex items-center justify-between w-full">
                        <h2
                            class="{{ $antreanCsFormat == 'Belum ada' ?  'text-5xl' : 'text-7xl'}} font-bold font-poppins text-tertiary">
                            {{ $antreanCsFormat }}</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        <h2 class="text-7xl font-bold font-poppins text-tertiary">{{ $antreanCsCounter }}</h2>
                    </div>
                </div>
            </div>
            {{-- Sisa Teller & CS --}}
            <div class="grid grid-cols-2 gap-6">
                <div x-data="{ currentSlide: 0, slides: 2, interval: null }"
                    x-init="interval = setInterval(() => { currentSlide = (currentSlide + 1) % slides }, 5000)"
                    class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 h-full flex-1 relative">
                    <div
                        class="relative bg-white rounded-2xl flex flex-col items-center justify-center gap-4 p-6 h-full">
                        <div x-show="currentSlide === 0" x-transition:enter="transition transform ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="flex flex-col gap-2 items-center">
                            <h1 class="text-2xl text-center font-semibold font-poppins text-primary leading-tight">
                                Jumlah Antrean<br>Teller
                            </h1>
                            <div class="flex gap-4">
                                <img src="{{ asset('icons/people-1.svg') }}" alt="Jumlah Antrian" class="w-18">
                                <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">{{
                                    $jumlahAntreanTeller }}</h2>
                            </div>
                        </div>
                        <div x-show="currentSlide === 1" x-transition:enter="transition transform ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="flex flex-col gap-2 items-center">
                            <h1 class="text-2xl text-center font-semibold font-poppins text-primary leading-tight">
                                Sisa Antrean<br>Teller
                            </h1>
                            <div class="flex gap-4">
                                <img src="{{ asset('icons/people-1.svg') }}" alt="Sisa Antrian" class="w-18">
                                <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">{{
                                    $sisaAntreanTeller }}</h2>
                            </div>
                        </div>
                        <div class="absolute bottom-4 flex justify-center space-x-2">
                            <template x-for="i in slides" :key="i">
                                <div :class="{'bg-primary': currentSlide === i-1, 'bg-gray-300': currentSlide !== i-1}"
                                    class="w-2 h-2 rounded-full"></div>
                            </template>
                        </div>
                    </div>
                </div>
                <div x-data="{ currentSlide: 0, slides: 2, interval: null }"
                    x-init="interval = setInterval(() => { currentSlide = (currentSlide + 1) % slides }, 5000)"
                    class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 h-full flex-1 relative">
                    <div
                        class="relative bg-white rounded-2xl flex flex-col items-center justify-center gap-4 p-6 h-full">
                        <div x-show="currentSlide === 0" x-transition:enter="transition transform ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="flex flex-col gap-2 items-center">
                            <h1 class="text-2xl text-center font-semibold font-poppins text-primary leading-tight">
                                Jumlah Antrean<br>Customer Services
                            </h1>
                            <div class="flex gap-4">
                                <img src="{{ asset('icons/people-1.svg') }}" alt="Jumlah Antrian" class="w-18">
                                <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">{{
                                    $jumlahAntreanCs }}</h2>
                            </div>
                        </div>
                        <div x-show="currentSlide === 1" x-transition:enter="transition transform ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="flex flex-col gap-2 items-center">
                            <h1 class="text-2xl text-center font-semibold font-poppins text-primary leading-tight">
                                Sisa Antrean<br>Customer Services
                            </h1>
                            <div class="flex gap-4">
                                <img src="{{ asset('icons/people-1.svg') }}" alt="Sisa Antrian" class="w-18">
                                <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">{{
                                    $sisaAntreanCs }}
                                </h2>
                            </div>
                        </div>
                        <div class="absolute bottom-4 flex justify-center space-x-2">
                            <template x-for="i in slides" :key="i">
                                <div :class="{'bg-primary': currentSlide === i-1, 'bg-gray-300': currentSlide !== i-1}"
                                    class="w-2 h-2 rounded-full"></div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="w-full px-8 py-4 bg-white rounded-xl bg-opacity-75 font-poppins font-semibold text-2xl col-span-2">
                @if($unit[0]->running_text)
                <div class="marquee">
                    <span>{{ $unit[0]->running_text }}</span>
                </div>
                @else
                <p class="text-center text-red-600 italic">Silahkan edit running text pada menu settings</p>
                @endif
            </div>
        </div>
    </main>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const currentDate = new Intl.DateTimeFormat('id-ID', options).format(now);
    
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
    
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
    
            document.getElementById('date').textContent = currentDate;
            document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>

</html>