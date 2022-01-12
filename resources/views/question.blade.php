@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-book"></i>
                            Answer these question!
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            @forelse($questions as $question)
                            <li>{{ $question->question }}</a>
                                <br>
                                <div class="form-check">
                                    <input type="radio" id="html" name="answer" value="option_1">
                                    <label for="option_1">{{ $question->option_1 }}</label><br>
                                    <input type="radio" id="css" name="answer" value="option_1">
                                    <label for="option_2">{{ $question->option_2 }}</label><br>
                                </div>
                            </li>
                            @empty
                            <li></li>
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