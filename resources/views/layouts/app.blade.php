@extends('skeleton')

@section('layout')
  <section id="main">
    @include('sections.header')
    <div id="main-outlet" class="wrap">
      @yield('content')
    </div>
    @include('sections.footer')
  </section>
@endsection
