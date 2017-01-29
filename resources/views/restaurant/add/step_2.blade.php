<div id="step-2" class="content">
    <form class="form-horizontal form-label-left" method="POST" action="{{ route('add-contact-info') }}">
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile"> Mobile #
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="mobile" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website"> Address <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="address" required="required" class="form-control" name="address"></textarea>
            </div>
        </div>
    </form>
</div>
