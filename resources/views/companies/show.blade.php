@extends('layouts.app')

@section('content')

  <div class="container mt-5">

    <div class="row">

      <dvi class="col-md-9 col-lg-9 pull-left">

        @if(session('success'))

          <div class="alert alert-primary">
            {{session('success')}}
          </div>

        @endif

        <main role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
              <div class="container">
                <h1 class="display-3">{{$company->name}}</h1>
                <p>{{$company->description}}</p>
                {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> --}}
              </div>
            </div>

            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                @foreach ($company->products as $product)
                  <div class="col-md-4">
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    <p><a class="btn btn-primary" href="#" role="button">View projects »</a></p>
                  </div>
                @endforeach
              </div>

              <hr>

            </div> <!-- /container -->

          </main>

      </dvi>

      <dvi class="col-md-3 col-lg-3 pull-right">

        <div class="sidebar-module">
          <h4>Actions</h4>
          <ol class="list-unstyled">
            <li><a href="{{route('companies.edit', $company->id)}}">Edit</a></li>
            <li><a href="#">Delete</a></li>
            <li><a href="#">Add new user</a></li>
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
