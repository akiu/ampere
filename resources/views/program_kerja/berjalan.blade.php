@extends('layouts.frontend')

@section('content')
    <section class="ui container page">

        <h2 class="ui header">Program Kerja <span>Sedang Berjalan</span></h2>

        @include('program_kerja.table')

    </section>
@endsection
