<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customer {
            font-family: Arial, Helvetica, sans-serif;
            text-size: 15pt;


        }

        #customers td {
            text-size: 15pt;

        }


        .rangkasurat {
            width: 800px;
            margin: 0 auto;
            background-color: #ddd;
            height: 500px;
            padding: 20px;
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }

        #kopsurat {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

    </style>
</head>

<body>
    <table id="kopsurat" width="100%">
        <tr>
            <td><img src="<?php echo $pic; ?>" width="100px"></td>
            <td class="tengah">
                <h2>KLINIK KOTA BANDUNG</h2>

                <p>Jalan klinik No. 02 Bandung Telepon 12345, Faximile 7899202</p>
                <p>e-mail : klinik@bandung.go.id</p>
            </td>
        </tr>
    </table>
    <h3 style="text-align: center">Laporan Data Tamu</h3>


    <table class="table table-borderless">

        <tbody style="text-size-10">
            <tr>
                <td>No Rekam Medis</td>
                <td>: {{ $pasien->no_rm }}</td>
                <td>Tanggal Pendaftaran</td>
                <td>: {{ $pasien->tanggal_pendaftaran }}</td>

            </tr>
            <tr>
                <td>NIK</td>
                <td>: {{ $pasien->nik }}</td>
                <td>Nama Pasien</td>
                <td>: {{ $pasien->nama_pasien }}</td>

            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $pasien->jenis_kelamin }}</td>
                <td>No Handphone</td>
                <td>: {{ $pasien->no_hp }}</td>

            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>: {{ $pasien->tempat_lahir }}, {{ $pasien->tanggal_lahir }}</td>
                <td>Alamat</td>
                <td>: {{ $pasien->alamat }}</td>

            </tr>
            <tr>

            </tr>
        </tbody>
    </table>

    <table class="table table-bordered mt-8">
        <thead>

            <tr>
                <th class="text-center">No</th>
                <th>Item</th>
                <th>Harga Satuan</th>
                <th>Kuantitas</th>
                <th>Tanggal</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>

            @foreach ($pemeriksaan as $item)
                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td>{{ $item->tindakan->nama_tindakan }}</td>
                    <td id="harga">Rp. {{ $harga_periksa = $item->tindakan->harga }}</td>
                    <td class="text-center">{{ 1 }}</td>
                    <td>{{ $item->tanggal_pemeriksaan }}</td>
                    <td>Rp. {{ $harga_periksa = $item->tindakan->harga }}</td>
                    <td hidden>Rp. {{ $total_obat += $harga_periksa }}</td>
                </tr>
                <?php $no++; ?>

            @endforeach

            @foreach ($getResep as $item)
                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td>{{ $item->obat->nama_obat }}</td>
                    <td id="harga">Rp. {{ $harga_obat = $item->obat->harga }}</td>
                    <td class="text-center">{{ $jumlah_obat = $item->jumlah }}</td>
                    <td>{{ $item->tanggal_resep }}</td>
                    <td>Rp. {{ $harga_totobat = $jumlah_obat * $harga_obat }}</td>
                    <td hidden>Rp. {{ $total += $harga_totobat }}</td>
                </tr>
                <?php $no++; ?>
            @endforeach
            <tr>
                <td colspan="5" class="text-center">Total</td>

                <td> Rp. {{ $harga_total = $total_obat + $total }}</td>
            </tr>
            <tr></tr>
        </tbody>
    </table>
    <script type="text/javascript">
        window.print();

    </script>

</body>

</html>
