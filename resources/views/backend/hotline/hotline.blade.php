@extends('backend.master')

@section('title', 'dashboard')


@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Hotline</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Please Fill Up Form</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif
            <div class="row justify-content-center">
              <form action="{{ url('hotline/store') }}" method="post">
                @csrf
               <div class="form-group ">
                  <label for="hotlineNumber">Hotline Number</label>
                  <input type="hotline" class="form-control" id="hotlineNumber" name="hotline">
                  @error('hotline')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group ">
                  <label for="datetime">Date & Time</label>
                  <input type="datetime" class="form-control" id="datetime" name="datetime">
                  @error('datetime')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
               </div>
               <div class="form-group">
                  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
               </div>
             </form>
           </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection