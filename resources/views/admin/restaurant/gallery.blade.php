<div class="x_panel">
    <div class="x_title">
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
    
    	<div class="popup-gallery">
		
			<hr>
			@foreach ($gallery as $item) 
				
			<a href="{{ Config::get('app.url') }}/app/{{ $item['path'] }}" title="{{ $item['name'] }}"><img 
			src="{{ Config::get('app.url') }}/app/{{ $item['path'] }}" width="75" height="75"></a>
			
			@endforeach
		</div>
		<div>        

		<hr>

		<form action="{{ url('/admin/resto/upload/gallery', $restoInfo->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="file" name="gallery[]" multiple/>
            <input type="submit" name="submitForm" value="Upload Image" />
        </form> 
        </div> 
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
