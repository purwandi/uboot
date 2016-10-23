@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <form class="" method="POST" action="/projects">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Project name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Project description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save project</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
