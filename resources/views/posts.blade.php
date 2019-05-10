<div class="container">
	@foreach ($posts as $post)
		
	<h1>{{$post->products->name}} </h1>
	@endforeach
</div>