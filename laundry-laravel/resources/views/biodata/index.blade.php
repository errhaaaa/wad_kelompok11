<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/tambah.css') }}">
</head>
<body>
    <form action="{{ route('biodata.store') }}" method="POST" id="form">
        @csrf
        <h2>BIODATA PELANGGAN</h2>
        
        <p type="Nama:">
            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Tulis nama Anda di sini.." required>
        </p>
        
        <p type="Nomor Telepon:">
            <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="Ketik nomor telepon Anda di sini.." required>
        </p>
        
        <p type="Alamat:">
            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Ketik Alamat Anda di sini.." required>
        </p>
        
        <p type="Catatan Penanganan Khusus:">
            <input type="text" name="catatan_khusus" value="{{ old('catatan_khusus') }}" placeholder="Ketik Catatan Tambahan Anda di sini...">
        </p>
        
        <button type="submit" name="submit">Kirim</button>
        
        <div>
            <span class="fa fa-phone"></span>081-234-567-890
            <span class="fa fa-envelope-o"></span> Case9@laundry.com
        </div>
    </form>
</body>
</html>