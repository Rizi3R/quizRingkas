@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sub Bidang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('sub-bidangs.create') }}" class="btn btn-success mb-4" style="float: right;">Tambah</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombor Sub Bidang</th>
                                    <th>Tajuk Sub Bidang</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subBidangs as $subBidang)
                                <tr>
                                    <td>{{$subBidang->number }}</a></td>
                                    <td>{{ $subBidang->title }}</td>
                                    <td>
                                        {{ $subBidang->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('sub-bidangs.show', $subBidang->id) }}" class="btn btn-info">Papar</a>
                                        <a href="{{ route('sub-bidangs.edit', $subBidang->id) }}" class="btn btn-warning">Pinda</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align: center;">Tiada Sub Bidang</td>
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