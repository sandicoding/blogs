@extends('admin.layouts.app')

@section('main-content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Category
        <small>Pengelolaan CCategory</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> category</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">create category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @include('includes.messages')
            
            <form role="form" action="{{ route('category.update', $category->id) }}" method="post">
             {{ csrf_field() }}
              {{ method_field('PATCH') }} 
              <div class="box-body">
              	<div class="col-lg-offset-4 col-md-4">
                <div class="form-group">
                  <label for="name">Category Title</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="name category">
                </div>
                <div class="form-group">
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" placeholder="slug category">

                </div>
                
              <!-- /.box-body -->
			
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
      	</div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection 