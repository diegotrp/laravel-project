@foreach ($content as $subcontent)
	@foreach ($subcontent as $key => $value)		
		{{ $key }}: {{ $value }} <br>
	@endforeach <br>
@endforeach 
