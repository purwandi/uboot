@extends('layouts.master')

@section('content')
  <div class="board-content project-full-screen">
    <div class="clearfix">
      <div class="position-relative">
        @include('board.section-project-column')
      </div>
    </div>
  </div>
@stop
