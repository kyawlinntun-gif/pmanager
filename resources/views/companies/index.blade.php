@extends('layouts/app')

@section('content')

  <div class="container mt-4">
    <div class="card">
      <h5 class="card-header bg-primary">Companies</h5>
      <div class="card-body p-0">
        <ul class="list-group list-group-flush">
          @foreach($companies as $company)
            <li class="list-group-item px-5"><a href="{{route('companies.show', $company->id)}}">{{$company->name}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

@endsection
