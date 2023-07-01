@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
  <div class="row">  
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-book"></i>
        </span> Daftar Buku
        </h3>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
        </nav>
    </div>
    </div>
<a type="button" class="btn btn-gradient-primary" href="{{ url('dashboard/book/create') }}">+ Tambah Buku</a>
   <div class="row mt-4" style="background-color: white">
    <p class="mt-4 h3">Daftar Buku Tersedia</p>
    <table class="table table-bordered mt-4">
        <thead class="table-info">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$book->title}}</td>
              <td>{{$book->stok}}</td>
              <td>
                <button type="button" class="btn btn-gradient-info">View</button>
                <button type="button" class="btn btn-gradient-warning">Edit</button>
                <form action="{{ url('/dashboard/book/destroy', $book->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div> 
</div>
@endsection