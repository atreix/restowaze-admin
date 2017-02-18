<div class="x_panel">
    <div class="file-uploaded-images">
        @if ( !empty($images) )
            @foreach ($images as $image)
            <div class="image">
                <figure><i class="fa fa-close"></i></figure>
                <img src="{{ $image->path }}" alt="">
            </div>
            @endforeach
        @endif
    </div>
    <div class="file-upload-previews"></div>
    <div class="file-upload">
        <div class="MultiFile-wrap" id="MultiFile1"><input type="file" name="files[]" class="file-upload-input with-preview MultiFile-applied MultiFile" multiple="" title="Click to add files" maxlength="10" accept="gif|jpg|png" id="MultiFile1_F1" value=""></div>
        <span>Click or drag images here</span>
    </div>
    <!--<div class="x_title">
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
        <form action="{{ url('/upload/gallery') }}" class="dropzone"></form>
        <br />
        <br />
        <br />
        <br />
    </div>-->
</div>
