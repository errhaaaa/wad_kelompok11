<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="{{ asset('css/tambah.css') }}">
</head>
<body>
    <form action="{{ route('biodata.update', $biodata->no) }}" method="POST" id="form">
        @csrf
        @method('PUT')
        
        <h2>EDIT DATA PELANGGAN</h2>
        
        <p type="Nama:">
            <input type="text" name="nama" value="{{ old('nama', $biodata->nama) }}" required>
        </p>
        
        <p type="Nomor Telepon:">
            <input type="text" name="no_telepon" value="{{ old('no_telepon', $biodata->no_telepon) }}" required>
        </p>
        
        <p type="Alamat:">
            <input type="text" name="alamat" value="{{ old('alamat', $biodata->alamat) }}" required>
        </p>
        
        <p type="Catatan Penanganan Khusus:">
            <input type="text" name="catatan_khusus" value="{{ old('catatan_khusus', $biodata->catatan_khusus) }}">
        </p>
        
        <button type="submit" name="update">Simpan Perubahan</button>
        
        <div style="margin-top: 10px; text-align: center;">
            <a href="{{ route('biodata.daftar') }}" style="color: #666; text-decoration: none; font-size: 14px;">Batal</a>
        </div>
    </form>
</body>
</html>