@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sub-Sub Bidang</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('sub-sub-bidangs.create') }}" class="btn btn-success mb-4" style="float: right;">Tambah</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombor Sub-Sub Bidang</th>
                                    <th>Tajuk Sub-Sub Bidang</th>
                                    <th>Status</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subsubBidangs as $subsubBidang)
                                <tr>
                                    <td>{{$subsubBidang->number }}</a></td>
                                    <td>{{ $subsubBidang->title }}</td>
                                    <td>
                                        {{ $subsubBidang->status ? 'Aktif' : 'Tidak Aktif' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('sub-sub-bidangs.show', $subsubBidang->id) }}" class="btn btn-info">Papar</a>
                                        <a href="{{ route('sub-sub-bidangs.edit', $subsubBidang->id) }}" class="btn btn-warning">Pinda</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" style="text-align: center;">Tiada Sub-Sub Bidang</td>
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