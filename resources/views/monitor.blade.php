<!doctype html>
<html lang="en" class="bg-pattern-dark bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <title>Antrean Nasabah Bank BRI</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <main class="min-h-screen">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-5 p-8 min-h-screen pb-24">
            <div class="flex flex-col gap-6">
                <div class="flex gap-8 justify-between items-center">
                    <div>
                        <img src="{{ asset('img/logo-bri-light.png') }}" alt="Logo BRI" class="h-16">
                        <p class="font-poppins font-medium text-white text-lg mt-1">Melayani Dengan Setulus Hati</p>
                    </div>
                    <div class="text-white font-poppins text-xl text-right" id="time">
                        <h1 id="date"></h1>
                        <h1 class="font-bold text-5xl" id="clock"></h1>
                    </div>
                </div>
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 flex-1">
                    <div class="bg-white rounded-2xl px-16 h-full gap-4 flex flex-col justify-center">
                        <div class="flex items-center justify-between w-full">
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900">Nomor Antrean</h1>
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900">Counter</h1>
                        </div>
                        <div class="h-[3px] w-full bg-blue-900 my-4"></div>
                        <div class="flex items-center justify-between w-full">
                            <h2 class="text-7xl font-bold font-poppins text-orange-500">CS001</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            <h2 class="text-7xl font-bold font-poppins text-orange-500">3</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 flex-1">
                    <div class="bg-white rounded-2xl flex items-center justify-center gap-1 flex-col p-1 h-full">
                        <video id="videoPlayer" class="w-full rounded-2xl" autoplay muted loop>
                            <source src="{{ asset('video/example.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 flex-1">
                    <div class="bg-white rounded-2xl px-16 h-full gap-4 flex flex-col justify-center">
                        <div class="flex items-center justify-between w-full">
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900">Nomor Antrean</h1>
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900">Counter</h1>
                        </div>
                        <div class="h-[3px] w-full bg-blue-900 my-4"></div>
                        <div class="flex items-center justify-between w-full">
                            <h2 class="text-7xl font-bold font-poppins text-orange-500">TL001</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            <h2 class="text-7xl font-bold font-poppins text-orange-500">2</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 h-full flex-1">
                    <div class="bg-white rounded-2xl flex flex-col items-center justify-center gap-4 p-6 h-full">
                        <div class="flex flex-col items-center">
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900 text-center leading-tight">
                                Sisa Antrean
                                <span class="block text-2xl" style="margin-top: 2px;">Customer Service</span>
                            </h1>
                        </div>
                        <div class="flex flex-row items-center gap-4">
                            <img src="{{ asset('icons/people-1.svg') }}" alt="Jumlah Antrian" class="w-18">
                            <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">3</h2>
                        </div>
                    </div>
                </div>
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 h-full flex-1">
                    <div class="bg-white rounded-2xl flex flex-col items-center justify-center gap-4 p-6 h-full">
                        <div class="flex flex-col items-center">
                            <h1 class="text-2xl font-semibold font-poppins text-blue-900 text-center leading-tight">
                                Sisa Antrean
                                <span class="block text-2xl" style="margin-top: 2px;">Teller</span>
                            </h1>
                        </div>
                        <div class="flex flex-row items-center gap-4">
                            <img src="{{ asset('icons/people-1.svg') }}" alt="Jumlah Antrian" class="w-18">
                            <h2 class="text-7xl font-bold font-poppins text-center text-quaternary">3</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-4 w-full px-8 py-4 bg-white bg-opacity-75 font-poppins font-semibold text-2xl">
            <div class="marquee">
                <span>Selamat Datang di Kantor Cabang Malang Sutoyo</span>
            </div>
        </div>
    </main>
    <script>
        const dateElement = document.getElementById('date');
        const clockElement = document.getElementById('clock');

        function updateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            dateElement.innerHTML = now.toLocaleDateString('id-ID', options);
            clockElement.innerHTML = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        }

        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>

</html>
