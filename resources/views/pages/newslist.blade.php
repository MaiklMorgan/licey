@extends('layouts.default')

@section('content')


<section>
	<div class="container">
		@if($posts->count())
			<div class="row">
				@foreach($posts as $post)
					<div class="col-md-4">
						<a href="{{ route('page.news', ['slug' => $post->slug]) }}">
							@if($post->image)
								<img src="{{ route('imagecache', ['template' => '360x260', 'filename' => $post->image]) }}" alt="{{ $post->title }}" class="img-responsive" />
							@else
								<img src="/images/paly.jpg" alt="" class="img-responsive" />
							@endif
							<div class="offset-top-small">
								<div class="news--bottom-min offset-top--medium">{{ $post->title }}</div>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		@endif

		@if($posts->links())
			<div class="offset-top--medium offset-top-xs--small">
				{{ $posts->links() }}
			</div>
		@endif
	</div>
</section>
			
@endsection

