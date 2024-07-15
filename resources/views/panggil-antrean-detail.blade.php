<!doctype html>
<html lang="en" class="bg-pattern bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <title>Antrean Nasabah Bank BRI</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="p-8">
    <header
        class="bg-white bg-opacity-50 rounded-2xl shadow-lg p-6 flex flex-col sm:flex-row gap-8 justify-between items-center">
        <div class="flex items-center gap-4">
            <img src="{{asset('icons/microphone-dark.svg')}}" alt="Microphone" class="w-4">
            <h1 class="text-primary font-poppins text-xl">Panggilan Antrean <span class="font-bold">Counter {{
                    $counterId }}</span>
            </h1>
        </div>
        <a href="{{ route('panggil-antrean.index') }}"
            class="flex gap-4 items-center py-2 px-4 bg-gradient-to-r from-primary to-secondary rounded-2xl hover:scale-105 transition duration-300 ease-in-out">
            <img src="{{asset('icons/arrow-simple-left.svg')}}" alt="Arrow" class="w-2">
            <p class="font-poppins font-medium text-lg text-white italic">Back</p>
        </a>
    </header>

    <main>
        <div class="grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-5 my-10">
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Jumlah Antrean</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-1.svg')}}" alt="Jumlah Antrean" class="w-12">
                        <h2 class="text-6xl font-bold font-poppins text-center text-quaternary">{{ $jumlahAntrean }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Antrean Sekarang</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-2.svg')}}" alt="Jumlah Antrean" class="w-12 block">
                        <h2 class="text-5xl font-bold font-poppins text-center text-tertiary">{{ $antreanSekarangFormat
                            }}</h2>
                    </div>
                </div>
            </div>
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Antrean Selanjutnya</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-3.svg')}}" alt="Jumlah Antrean" class="w-12 block">
                        <h2 class="text-5xl font-bold font-poppins text-center text-secondary">{{
                            $antreanSelanjutnyaFormat }}</h2>
                    </div>
                </div>
            </div>
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl flex items-center justify-center gap-4 flex-col p-6 h-full">
                    <h1 class="text-lg font-poppins text-center">Sisa Antrean</h1>
                    <div class="flex gap-4">
                        <img src="{{asset('icons/people-4.svg')}}" alt="Jumlah Antrean" class="w-10">
                        <h2 class="text-6xl font-bold font-poppins text-center text-primary">{{ $sisaAntrean }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 py-2 ">
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl px-4 py-2 h-full">
                    <h1
                        class="my-4 font-poppins font-semibold underline text-2xl text-center text-primary bg-primary bg-opacity-10 rounded-lg py-2">
                        Antrean Belum Dipanggil</h1>
                    <table class="table border w-full text-center">
                        <thead class="bg-primary bg-opacity-10">
                            <tr class="font-poppins font-semibold text-lg">
                                <th class="px-4 py-2">No. Antrean</th>
                                <th class="px-4 py-2">Panggil</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($antreanBelumDipanggil as $antrean)
                            <tr class="font-poppins font-medium text-lg">
                                <td class="px-4 py-3">{{ $kodeOperasional . str_pad($antrean->no_antrean, 3, '0',
                                    STR_PAD_LEFT) }}
                                </td>
                                <td class="px-4 py-3 flex justify-center">
                                    <form
                                        action="{{ $kodeOperasional == 'TL' ? route('panggil-antrean.teller.panggil', $antrean->id) : route('panggil-antrean.cs.panggil', $antrean->id) }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="no_counter" value="{{ $counterId }}">
                                        <button type="submit"
                                            class="bg-primary py-3 px-6 rounded-lg flex items-center justify-center gap-2 hover:scale-105 transition duration-200 ease-in-out">
                                            <img src="{{asset('icons/microphone-light.svg')}}" alt="Microphone"
                                                class="w-3">
                                            <img src="{{asset('icons/rythm.svg')}}" alt="Rythm" class="h-5">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $antreanBelumDipanggil->links() }}
                    </div>
                </div>
            </div>
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-4">
                <div class="bg-white rounded-2xl px-4 py-2 h-full">
                    <h1
                        class="my-4 font-poppins font-semibold underline text-2xl text-center text-primary bg-primary bg-opacity-10 rounded-lg py-2">
                        Antrean Sudah Dipanggil</h1>
                    <table class="table border w-full text-center">
                        <thead class="bg-primary bg-opacity-10">
                            <tr class="font-poppins font-semibold text-lg">
                                <th class="px-4 py-2">No. Antrean</th>
                                <th class="px-4 py-2">No. Counter</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($antreanSudahDipanggil as $antrean)
                            <tr class="font-poppins font-medium text-lg">
                                <td class="px-4 py-3">{{ $kodeOperasional . str_pad($antrean->no_antrean, 3, '0',
                                    STR_PAD_LEFT) }}
                                </td>
                                <td class="px-4 py-3 flex justify-center">
                                    <button
                                        class="text-white text-sm bg-primary py-3 px-6 rounded-lg flex items-center justify-center gap-2">
                                        Counter {{ $antrean->no_counter }}
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $antreanSudahDipanggil->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>