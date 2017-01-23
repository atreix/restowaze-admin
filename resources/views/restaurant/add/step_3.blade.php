<div id="step-3" class="content">
    <form class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/resto/add') }}">
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
                <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
    </form>
</div>
