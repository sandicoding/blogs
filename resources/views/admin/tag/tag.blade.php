@extends('admin.layouts.app')

@section('main-content')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tag</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tag</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
              	<div class="col-lg-offset-4 col-md-4">
                <div class="form-group">
                  <label for="name">Tag Title</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="slug">Tag Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="sub title">
                </div>
                
              <!-- /.box-body -->
			
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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