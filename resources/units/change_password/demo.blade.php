<div class="col-md-6">
    <h3>Change Password</h3>
    <div class="chang_password">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label">Old</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="form-control1 icon" name="old-pass" placeholder="Old Password">

                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">New</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="form-control1 icon" name="new-pass" placeholder="New Password">

                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Confirm Password</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="form-control1 icon" name="confirm-pass" placeholder="Confirm Password">

                    </div>
                </div>
            </div>
            <div class="form-group button">
                <button>Save</button>
            </div>
        </form>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js') !!}