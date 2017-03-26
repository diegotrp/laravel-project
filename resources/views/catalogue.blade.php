@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">

		@each('partial.item', $items, 'item')
		
	</div>

	{{ $items->links() }}

</div>

@endsection

