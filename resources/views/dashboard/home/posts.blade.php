@extends('dashboard.home.main')

@section('container')
<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach ( $posts as $post )
        <tr>
          <td>cek</td>
          <td>random</td>
          <td>data</td>
          <td>placeholder</td>
          <td>text</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>


@endsection
