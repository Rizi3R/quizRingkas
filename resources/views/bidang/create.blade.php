@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Bidang</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <form action="{{ route('bidangs.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        @include('bidang.fields')
                        <div style="text-align: center;">
                            <button type="button" onclick="window.history.back()" class="btn btn-danger">Kembali</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection