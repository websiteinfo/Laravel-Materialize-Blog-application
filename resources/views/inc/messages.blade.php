@if(count($errors) > 0)

	@foreach($errors->all() as $error)
	<div class="chip">
		{{$error}}
	</div>
	@endforeach
@endif

@if(session('success'))
	<div class="chip">
		{{session('success')}}
	</div>
@endif


@if(session('error'))
	<div class="chip">
		{{session('error')}}
	</div>
@endif