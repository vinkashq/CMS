@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Left Widget</h3>
      </div>
      <div class="panel-body">
      </div>
    </div>
  </div>
  <div class="col-md-5">
    @include('blocks.carousel')
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Right Widget</h3>
      </div>
      <div class="panel-body">
      </div>
    </div>
  </div>
</div>
@endsection
