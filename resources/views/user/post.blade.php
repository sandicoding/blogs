@extends('user.app')

@section('bg_img',Storage::disk('local')->url($post->image))
@section('head')

<link rel="stylesheet" href=" {{ asset('user/css/prism.css') }} ">


@endsection
@section('post-title',$post->title)

@section('subHeading', $post->subtitle)

@section('main-content')
 <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<small>Created at {{ $post->created_at->diffForHumans() }}</small>
                	<small class="pull-right">
                		
							@foreach($post->categories as $name)
								<div class="category">
									<a href=" {{ route('category',$name->name) }} ">{{ $name['name'] }}</a>
								</div>	
							@endforeach
					
                	</small>

                   {!! htmlspecialchars_decode($post->body) !!}

                   {{-- TAg clouds --}}
                   <h3>Tag Clouds</h3>
                   <small class="pull-left">
                		
							@foreach($post->tags as $name)
								<div class="category">
									<a href="{{ route('tag',$name->name) }}">{{ $name['name'] }}</a>
								</div>	
							@endforeach
					
                	</small>
                </div>
            </div>
        </div>
    </article>

    <hr>
    <div class="container">
      <div class="row">
      <div class="col-6">
        @comments(['model' => $post])
      </div>  
      </div>
      
    </div>
@endsection



