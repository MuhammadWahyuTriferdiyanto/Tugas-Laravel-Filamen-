<x-filament-panels::page>
    <style>
        /* Container untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1rem;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 8px;
        }

        /* Header tabel */
        thead tr {
            background-color: #ff8800; /* Warna oranye */
            color: #000000; /* Warna hitam */
            text-align: left;
            font-weight: bold;
        }

        /* Sel header */
        th {
            padding: 12px;
            text-transform: uppercase;
            font-size: 0.9rem;
            border-bottom: 2px solid #000000; /* Garis bawah hitam */
        }

        /* Sel data */
        td {
            padding: 12px;
            border-bottom: 1px solid #e5e5e5; /* Garis bawah abu-abu */
            color: #000000; /* Warna teks hitam */
            text-align: left;
        }

        /* Baris bergantian */
        tbody tr:nth-child(even) {
            background-color: #fff4e0; /* Warna oranye muda */
        }

        /* Baris hover */
        tbody tr:hover {
            background-color: #ffe4b2; /* Warna oranye terang */
            cursor: pointer;
        }

        /* Judul utama */
        h2 {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #000000; /* Warna teks hitam */
            text-align: left;
        }

        /* Margin antar tabel */
        table + h2 {
            margin-top: 40px;
        }
    </style>

    <h2 class="text-2xl font-bold">Laporan Dosen</h2>
    <table class="table-auto w-full border-collapse">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\Dosen::all() as $dosen)
                <tr>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="text-2xl font-bold">Laporan Mata Kuliah</h2>
    <table class="table-auto w-full border-collapse">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\Makul::all() as $makul)
                <tr>
                    <td>{{ $makul->kode }}</td>
                    <td>{{ $makul->nama }}</td>
                    <td>{{ $makul->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament-panels::page>
