<form class="form-horizontal form-label-left" method="POST" action="{{ url('/admin/resto/add/menu') }}" novalidate>
{!! csrf_field() !!}
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
                    <input type="text" class="form-control" name="name[]" placeholder="Name">
                </div>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="description[]" placeholder="Description">
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="form-group">
                    <select class="form-control" name="type[]">
                        <option value="">Select meal type</option>
                        <option value="1">Starter</option>
                        <option value="2">Soup</option>
                        <option value="3">Main Course</option>
                        <option value="4">Desert</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="price[]" placeholder="Price">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-footer">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-4">
        <a href="#duplicate-menu" class="btn btn-default duplicate"><i class="fa fa-plus"></i> Add another menu item</a>
        <button class="btn btn-info"> Save </button>
    </div>
</div>
</form>
