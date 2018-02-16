<h3>My Details</h3>
<div class="my_details">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-md-2 control-label">Username</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-secret"></i>
                        </span>
                    <input type="text" class="form-control1 icon" name="username" placeholder="username">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Email</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-at"></i>
                        </span>
                    <input type="email" class="form-control1 icon" name="email" placeholder="email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">First Name</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                    <input type="text" class="form-control1 icon" name="f_name" placeholder="first name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Last Name</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                    <input type="text" class="form-control1 icon" name="l_name" placeholder="last name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Address</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-address-card"></i>
                        </span>
                    <input type="text" class="form-control1 icon" name="address" placeholder="address">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Phone Number</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </span>
                    <input type="tel" class="form-control1 icon" name="phone_number" placeholder="phone number">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Website</label>
            <div class="col-md-8">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-globe"></i>
                        </span>
                    <input type="text" class="form-control1 icon" name="website" placeholder="website">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">About</label>
            <div class="col-sm-8">
                <textarea name="about" cols="50" rows="4" class="form-control1" title="Enter your text here..." placeholder="about"></textarea>
            </div>
        </div>

        <div class="form-group button">
            <a href="#">Back</a>
            <a href="#">Save</a>
        </div>
    </form>
</div>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js') !!}