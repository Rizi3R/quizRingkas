@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Bidang & Sub Bidang
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            @forelse($bidangs as $bidang)
                            <li>{{ $bidang->number }} &nbsp; <a href="#">{{ $bidang->title }}</a>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                ({{ $bidang->status ? 'Aktif' : 'Tidak Aktif' }})
                                <br>
                                <a style="width: 50px; float:right;" href="{{ route('bidangs.edit', $bidang->id) }}" class="btn btn-block btn-warning btn-xs">Pinda</a>
                                </br>
                                <ul>
                                    @foreach($bidang->subBidangs as $subBidang)
                                    <li>{{ $subBidang->number }} &nbsp; <a href="#">{{ $subBidang->title }}</a>
                                        &emsp;&emsp;&emsp;&emsp;
                                        ({{ $subBidang->status ? 'Aktif' : 'Tidak Aktif' }})</li>
                                    <br>
                                    <a style="width: 50px; float:right;" href="{{ route('bidangs.edit', $bidang->id) }}" class="btn btn-block btn-warning btn-xs">Pinda</a>
                                    </br>
                                    @endforeach
                                </ul>
                                <ul>
                                    @foreach($subBidang->subsubBidangs as $subsubBidang)
                                    <li>{{ $subsubBidang->number }} &nbsp; <a href="#">{{ $subsubBidang->title }}</a>
                                        &emsp;
                                        ({{ $subsubBidang->status ? 'Aktif' : 'Tidak Aktif' }})</li>
                                    <br>
                                    <a style="width: 50px; float:right;" href="{{ route('bidangs.edit', $bidang->id) }}" class="btn btn-block btn-warning btn-xs">Pinda</a>
                                    </br>
                                    @endforeach
                                </ul>
                            </li>
                            @empty
                            <li>Tiada Bidang & Sub Bidang</li>
                            @endforelse
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection