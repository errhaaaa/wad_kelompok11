<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Customer Laundry</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <main class="table">
        <section class="table_header">
            <h1>List Order Customer</h1>
            <a href="{{ url('/') }}" class="btn-tambah">+ Tambah Customer</a>
        </section>
        <section class="table_body">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Catatan Khusus</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($biodata as $item)
                    <tr>
                        <td style="font-weight: bold;">{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_telepon }}</td>
                        <td>{{ $item->catatan_khusus ?: '-' }}</td>
                        <td style="text-align: center; white-space: nowrap;">
                            <a href="{{ route('biodata.edit', $item->no) }}" class="btn-action btn-edit">Edit</a>
                            <form action="{{ route('biodata.destroy', $item->no) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-delete" style="border: none; cursor: pointer; background: none;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 25px;">Belum ada data customer.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>