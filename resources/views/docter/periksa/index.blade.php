@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Dokter')
@section('content_header_title', 'Periksa')
@section('content_body')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('periksa.create') }}" class="btn btn-primary">Tambah Periksa</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($obat as $obat)
                        <tr>
                            <td>{{ $obat->id }}</td>
                            <td>{{ $obat->nama }}</td>
                            <td>
                                <a href="{{ route('obat.edit', $obat->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
 