@extends('layouts.app')

@section('content')

  <div class="container mt-5">

    <div class="row">

      <dvi class="col-md-9 col-lg-9 pull-left">

        <form method="POST" action="{{route('companies.update', $company->id)}}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"value="{{$company->name}}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{$company->description}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </dvi>

      <dvi class="col-md-3 col-lg-3 pull-right">

        <div class="sidebar-module">
          <h4>Actions</h4>
          <ol class="list-unstyled">
            <li><a href="{{route('companies.show', $company->id)}}">View Companies</a></li>
            <li><a href="#">All companies</a></li>
          </ol>
        </div>

        {{-- <div class="sidebar-module">
          <h4>Members</h4>
          <ol class="list-unstyled">
            <li><a href="#">March</a></li>
          </ol>
        </div> --}}

      </dvi>

    </div>

  </div>

@endsection
