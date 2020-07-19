@extends('layouts.default')
@section('title')@lang('123')@endsection
@section('description')@lang('efewe')@endsection

@section('content')

<section class="section">
	<div class="container">
		<header class="section__part section__part--default section__header color-white">
			<h1>h1</h1>
		</header>

		<main class="section__aprt">
			<div class="row">
				<div class="col-md-6">
					<div class="box box--offset-medium fz-large color-white fw-regular">
						<p class="fw-regular fz-mediumer ff-alt lh-smaller">@lang('lead text text text')</p>
					</div>
				</div>
			</div>
		</main>	
		<div class="box lh-medium_ offset-top--xlarge offset-top--xs-medium">
			<button data-toggle="modal" data-target="#collbackModal" class="btn btn-default">@lang('узнать подробнее')</button>
		</div>
		<h3><a href="{{ route('page.newslist') }}">news</a></h3>
	</div>
</section>

@endsection