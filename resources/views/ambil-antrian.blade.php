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

<body class="px-10 md:px-20 xl:px-40 py-10 h-screen">
    <header
        class="bg-white bg-opacity-50 rounded-2xl shadow-lg p-6 flex flex-col sm:flex-row gap-8 justify-between items-center">
        <img src="{{asset('img/logo-bri.png')}}" alt="Logo BRI" class="h-16">
        <div class="text-primary font-poppins">
            <h1>Senin, 01 Juli 2024</h1>
            <h1 class="font-bold text-5xl">09.25</h1>
        </div>
    </header>

    <main class="h-3/4">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-10 my-10 h-full">
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-8 flex flex-col">
                <h2 class="text-4xl  font-bold font-poppins text-center text-primary">Teller</h2>
                <div class="bg-white rounded-2xl my-6 p-6 grow sm:relative flex flex-col items-center justify-center">
                    <h3 class="text-xl font-poppins sm:absolute top-4 italic">Antrean Sekarang :</h3>
                    <p class="text-5xl lg:text-7xl font-bold font-poppins">TL002</p>
                </div>
                <button
                    class="bg-gradient-to-r from-primary to-secondary py-4 lg:py-6 rounded-2xl font-poppins font-semibold text-2xl lg:text-3xl text-white hover:scale-105 transition duration-300 ease-in-out">Ambil
                    Nomor</button>
            </div>
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-8 flex flex-col">
                <h2 class="text-4xl  font-bold font-poppins text-center text-tertiary">Customer Services</h2>
                <div class="bg-white rounded-2xl my-6 p-6 grow sm:relative flex flex-col items-center justify-center">
                    <h3 class="text-xl font-poppins sm:absolute top-4 italic">Antrean Sekarang :</h3>
                    <p class="text-5xl lg:text-7xl font-bold font-poppins">CS001</p>
                </div>
                <button
                    class="bg-gradient-to-r from-tertiary to-quaternary py-4 lg:py-6 rounded-2xl font-poppins font-semibold text-2xl lg:text-3xl text-white hover:scale-105 transition duration-300 ease-in-out">Ambil
                    Nomor</button>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#antrian').load('{{ route('ambil-antrian.index') }}');
            $('#insert').on('click', function() {
                $.ajax({
                    type: 'POST'
                    , url: '{{ route('ambil-antrian.store') }}'
                    , success: function(result) {
                        if (result === 'Sukses') {
                            // $('#antrian').load('{{ route('ambil-antrian.index') }}').fadeIn('slow');
                            console.log("Sukses");
                        }
                    }
                    , error: function(xhr, status, error) {
                        console.log("Error: " + xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>