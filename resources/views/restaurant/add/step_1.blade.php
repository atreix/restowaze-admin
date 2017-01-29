<div id="step-1" class="content" style="display: block;">
    <form class="form-horizontal form-label-left" method="POST" action="{{ route('add-basic-info') }}" novalidate>
        {{ csrf_field() }}
        <h4> Basic Information</h4>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
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
                <input type="text" id="owner-name" name="owner_name" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-established">Date Established <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input id="date-established" name="date_established" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
            </div>
        </div>
        <hr>
        <h4> Contact Information</h4>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone"> Phone #
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="phone" name="phone" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile"> Mobile #
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="mobile" name="mobile" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website"> Address <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map"></i></span>
                    <textarea id="address" required="required" class="form-control" name="address"></textarea>
                </div>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Cancel</button>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>
