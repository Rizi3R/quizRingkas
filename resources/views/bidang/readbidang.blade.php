@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-file"></i>
                            Membaca Dasar Keselamatan ICT
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            @forelse($bidangs as $bidang)
                            <li>
                                <h3><b>Bidang &nbsp;{{ $bidang->number }} :&nbsp; {{ $bidang->title }}</b></h3>

                                <ul>
                                    <br>
                                    @foreach($bidang->subBidangs as $subBidang)
                                    <li>
                                        <h4><b>{{ $subBidang->number }} &nbsp; {{ $subBidang->title }}</b></h4>
                                        <h5><b>Objektif :
                                                <br></b></h5>
                                        <h5>{!! $subBidang->description !!}</h5>

                                        @endforeach
                                </ul>
                                <ul>
                                    <br>
                                    </br>
                                    @foreach($subBidang->subsubBidangs as $subsubBidang)
                                    <li>

                                        <h4><b>{{ $subsubBidang->number }} &nbsp; {{ $subsubBidang->title }}</b></h4>
                                        <h5><b>Objektif :
                                                <br></b></h5>
                                        <h5>{!! $subsubBidang->description !!}</h5>

                                        <br>
                                        </br>
                                        @endforeach
                                </ul>
                            </li>
                            <br>
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