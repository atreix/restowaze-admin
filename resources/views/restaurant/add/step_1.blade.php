<div id="step-1" class="content" style="display: block;">
    <form class="form-horizontal form-label-left" method="POST" action="{{ route('add-basic-info') }}">
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="url" id="website" name="website" placeholder="http://www.restowaze.com" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="owner-name">Name of Owner <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="owner-name" name="owner-name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" data-inputmask="'mask': '99/99/9999'" required="required" type="text">
            </div>
        </div>
    </form>
</div>
