<!doctype html>
<html lang="en" class="bg-pattern bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Antrean Nasabah Bank BRI</title>
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="px-10 md:px-20 xl:px-40 py-10 h-screen">
    <header
        class="bg-white bg-opacity-50 rounded-2xl shadow-lg p-6 flex flex-col sm:flex-row gap-8 justify-between items-center">
        <img src="{{asset('img/logo-bri-dark.png')}}" alt="Logo BRI" class="h-14">
        <div class="text-primary font-poppins w-52 sm:text-left text-center">
            <h1 id="date">Senin, 01 Juli 2024</h1>
            <h1 class="font-bold text-5xl" id="clock">00.00</h1>
        </div>
    </header>

    <main class="h-3/4">
        <div class="grid sm:grid-cols-2 grid-cols-1 gap-8 my-8 h-full">
            <div class="bg-primary bg-opacity-10 rounded-2xl shadow-lg p-8 flex flex-col">
                <h2 class="text-4xl  font-bold font-poppins text-center text-primary">Teller</h2>
                <div class="bg-white rounded-2xl my-6 p-6 grow sm:relative flex flex-col items-center justify-center">
                    <h3 class="text-xl font-poppins sm:absolute top-4 italic">Antrean Sekarang :</h3>
                    <p id="antrean" class="text-5xl lg:text-7xl text-center font-bold font-poppins">
                        {{ $nomorAntrean == 'TL000' ? '0' : $nomorAntrean }}
                    </p>
                    <p hidden id="antreanTerakhir" class="text-5xl lg:text-7xl font-bold font-poppins">
                        {{ $nextAntrean }}
                    </p>
                </div>
                <form id="addAntrean" action="{{ route('ambil-antrean.store') }}">
                    @csrf
                    <input hidden type="date" name="tanggal" value="{{ $tanggal }}">
                    <input hidden type="number" name="no_antrean" value="{{ $nextAntrean }}">
                    <input hidden type="number" name="status" value="0">
                    <button
                        class="bg-gradient-to-r from-primary to-secondary py-4 lg:py-6 w-full rounded-2xl font-poppins font-semibold text-2xl lg:text-3xl text-white hover:scale-105 transition duration-300 ease-in-out">Ambil
                        Nomor</button>
                </form>
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

    <script>
        document.getElementById('addAntrean').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response;
            })
            .then(data => {
                console.log('Success:', data);
                console.log(formData.get('no_antrean'));
                const formattedNumber = 'TL' + String(formData.get('no_antrean')).padStart(3, '0');
                document.getElementById('antrean').textContent = formattedNumber;
                document.getElementById('antreanTerakhir').textContent = parseInt(document.getElementById('antreanTerakhir').textContent) + 1
                document.querySelector('input[name="no_antrean"]').value = document.getElementById('antreanTerakhir').textContent;
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    </script>
</body>

</html>