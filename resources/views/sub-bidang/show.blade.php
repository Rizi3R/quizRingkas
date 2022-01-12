@extends('layouts.app')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Papar Sub Bidang</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @include('sub-bidang.fields')
                    <div style="text-align: center;">
                        <button type="button" onclick="window.history.back()" class="btn btn-danger">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection