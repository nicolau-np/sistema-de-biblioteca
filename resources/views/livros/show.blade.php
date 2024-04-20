@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="column"><span>Título:</span>{{ $livro->titulo }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
