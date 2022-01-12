@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bidang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('bidangs.hierarchy') }}" class="btn btn-primary">Lihat Semua Bidang</a>
                        <a href="{{ route('bidangs.create') }}" class="btn btn-success mb-4" style="float: right;">Tambah</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombor Bidang</th>
                                    <th>Tajuk Bidang</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bidangs as $bidang)
                                <tr>
                                    <td><a href="#" >{{ $bidang->number }}</a></td>
                                    <td>{{ $bidang->title }}</td>
                                    <td>
                                        {{ $bidang->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('bidangs.show', $bidang->id) }}" class="btn btn-info">Papar</a>
                                        <a href="{{ route('bidangs.edit', $bidang->id) }}" class="btn btn-warning">Pinda</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align: center;">Tiada Bidang</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection