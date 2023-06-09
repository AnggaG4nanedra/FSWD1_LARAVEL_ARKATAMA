@extends('layouts.main')

@section('content')
    <h1>Data Customer</h1>
   
    <div class="table-responsive">
        <a class="btn btn-primary" href="/customer-create">Tambah Data</a>
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($customer as $c)
                <tr class="">
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>
                        {{ $c->nama }} <br>
                        @if ($c->order != 'null' )
                            @foreach ( $c->order as $o)
                                Tanggal Order : {{ $o->tanggal_order }}

                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="/customer-edit/{{ $c->id }}" class="btn btn-primary">Edit</a><br>
                        <a href="/customer-delete/{{ $c->id }}}" class="btn btn-danger mt-2">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="3">Data tidak ada</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    
@endsection