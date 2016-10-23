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
    <div class="panel">
      <div class="panel-heading">
        <h2 class="panel-title">Vinkas CMS</h2>
      </div>
      <div class="panel-body">
        <a href="https://github.com/vinkas0/CMS">GitHub</a>
      </div>
    </div>
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
