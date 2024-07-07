<!doctype html>
<html lang="en" class="bg-pattern-dark bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <title>Antrean Nasabah Bank BRI</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body>
    <main class="min-h-screen">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-10 p-8 min-h-screen pb-24">
            <div class="flex flex-col gap-4">
                <div class="flex gap-8 justify-between items-center">
                    <div>
                        <img src="{{asset('img/logo-bri-light.png')}}" alt="Logo BRI" class="h-16">
                        <p class="font-poppins font-medium text-white mt-2">Melayani Dengan Setulus Hati</p>
                    </div>
                    <div class="text-white font-poppins">
                        <h1>Senin, 01 Juli 2024</h1>
                        <h1 class="font-bold text-5xl">09.25</h1>
                    </div>
                </div>
                <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 grow">
                    <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                        <h1 class="text-lg font-poppins text-center">Jumlah Antrean</h1>
                        <div class="flex gap-4">
                            <img src="{{asset('icons/people-1.svg')}}" alt="Jumlah Antrian" class="w-12">
                            <h2 class="text-6xl font-bold font-poppins text-center text-quaternary">3</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 aspect-video">
            </div>

            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4 h-">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Total Antrean</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-1.svg')}}" alt="Jumlah Antrian" class="w-12">
                        <h2 class="text-6xl font-bold font-poppins text-center text-quaternary">3</h2>
                    </div>
                </div>
            </div>

            <div class="bg-white bg-opacity-75 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Sisa Antrean</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-1.svg')}}" alt="Jumlah Antrian" class="w-12">
                        <h2 class="text-6xl font-bold font-poppins text-center text-quaternary">3</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-4 w-full p-4 bg-white bg-opacity-75 font-poppins font-semibold text-lg text-center ">
            Selamat Datang di Kantor
            Cabang Malang
            Sutoyo</div>
    </main>
</body>

</html>