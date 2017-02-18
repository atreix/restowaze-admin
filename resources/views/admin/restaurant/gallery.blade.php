<div class="x_panel">
    <div class="x_title">
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form action="{{ url('/admin/resto/upload/gallery', $restoInfo->id) }}" method="post" enctype="multipart/form-data" >
            {!! csrf_field() !!}
            <input type="file" name="gallery" />
            <input type="submit" name="submitForm" value="Upload Image" />
        </form>
        <br />
        <br />
        <br />
        <br />
    </div>
</div>
