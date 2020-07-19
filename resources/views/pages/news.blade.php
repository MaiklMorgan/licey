@extends('layouts.default')
@section('title')@lang('')@endsection
@section('description')@lang('')@endsection

@section('content')


<section>
	<div class="container">
		<div class="h2">{{ $post->title }}</div>

		@if($post->lead)
			<p class="lead">{{ strip_tags($post->lead) }}</p>
		@endif
		
		@if($post->text)
			<main class="section__footer">
				{!! $post->text !!}
			</main>
		@endif


		<h3>
			@lang('Другие новости')
		</h3>

		@if($posts->count())
			<div class="row">
				@foreach($posts as $post)
					<div class="col-xs-4">
						<a href="{{ route('page.news', ['slug' => $post->slug]) }}">
								@if($post->image)										
									<div class="news--blocks">
										<img src="{{ route('imagecache', ['template' => '360x260', 'filename' => $post->image]) }}" alt="{{ $post->title }}" class="img-responsive" />
									</div>
								@else
									<img src="/images/paly.jpg" alt="" class="img-responsive" />
								@endif
							<div class="news--bottom-min offset-top--medium">{{ $post->title }}</div>
						</a>
					</div>
				@endforeach
			</div>
		@endif

		<footer>
			<a href="{{ route('page.newslist') }}" class="">@lang('Смотреть все')</a>
		</footer>
	</div>
</section>


@endsection