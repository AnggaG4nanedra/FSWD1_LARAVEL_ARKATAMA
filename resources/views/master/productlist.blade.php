@extends('layouts.main')

@section('content')
    <h1>Data Product</h1>

    <div class="table-responsive">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($nama as $n )
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $n }}</td>
                    <td>-</td>
                </tr>
            @endforeach
            @forelse ($nama as $n)
                
            @empty
                <tr>
                    <td class="text-center" colspan="3">Data tidak ada</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <p>
        @if (count($nama) == 1)
            Terdapat 1 Produk
        @elseif (count($nama) > 1)
            Terdapat Bebeberapa Produk Diatas
        @else
            Produk Tidak Tersedia
        @endif
    </p>
    
@endsection