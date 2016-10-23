@extends('skeleton')

@section('layout')
  <section id="main">
    @include('sections.header')
    <div id="main-outlet" class="container">
      @yield('content')
    </div>
    @include('sections.footer')
  </section>
@endsection
