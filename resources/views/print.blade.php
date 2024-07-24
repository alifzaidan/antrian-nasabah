<!doctype html>
<html lang="en" class="bg-white text-black">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Nomor Antrian</title>
    <style>
        @media print {
            @page {
                size: 58mm auto;
                margin: 0;
            }

            body {
                width: 58mm;
                margin: 0;
            }
        }

        .content {
            width: 58mm;
            text-align: center;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="content">
    <div class="p-2 my-8">
        <p>.</p>
        <p>===================</p>
        <p class="font-poppins text-xs mt-2">{{ $tanggalFormat }}</p>
        <p class="font-poppins text-xs mb-6">{{ $jamFormat }}</p>
        <p class="font-poppins text-sm font-semibold">BRI Unit {{ $unit[0]->nama }}</p>
        <p class="font-poppins text-xs">Nomor Antrean Teller:</p>
        <p class="text-3xl mt-6 font-bold border border-black rounded-lg py-4">{{ $antreanSelanjutnyaFormat }}</p>
        <p class="font-poppins mb-6 mt-2 text-xs">*Sisa Antrean Teller: <span class="font-bold">{{ $sisaAntrean
                }}</span></p>
        <p class="font-poppins text-xs mb-2">Terimakasih Sudah Mempercayakan Transaksi Anda Pada Bank BRI</p>
        <p>===================</p>
        <p>.</p>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>