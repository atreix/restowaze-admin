<div class="box-body">
    <div class="">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <strong>Name</strong>
            </div>
            <div class="col-md-2 col-sm-3">
                <strong>Description</strong>
            </div>
            <div class="col-md-4 col-sm-3">
                <strong>Meal type</strong>
            </div>
            <div class="col-md-4 col-sm-3">
                <strong>Price</strong>
            </div>
        </div>
        <div class="row" id="duplicate-menu">
            <div class="col-md-2 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="menu_name[]" placeholder="Name">
                </div>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="menu_desc[]" placeholder="Description">
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="menu_meal-type[]" placeholder="Meal type">
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="menu_price[]" placeholder="Price">
                </div>
            </div>
        </div>
    </div>
    <div class="center">
        <a href="#duplicate-menu" class="btn btn-primary btn-xs duplicate"><i class="fa fa-plus"></i> Add another menu item</a>
    </div>
</div>
