<div class="col-md-9">
    <div class="profile-main">
        <div class="profile-about">
            <div class="about-head">
                <h3>
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    About me
                </h3>
                <p>
                    {{Auth::user()->about}}
                </p>
            </div>
            <div class="about-bottom col-md-6">
                <h3>User details</h3>
                <table>
                    <tbody>
                    <tr>
                        <td class="td-1">First Name</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->f_name}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Last Name</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->l_name}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Address</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->address}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Zip Code</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->post_code}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Phone</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->phone_number}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Email</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->email}}</td>
                    </tr>
                    <tr>
                        <td class="td-1">Website</td>
                        <td class="td-2">:</td>
                        <td class="td-3">{{Auth::user()->website}}</td>
                    </tr>

                    </tbody>
                </table>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css',$_this) !!}
{!! BBscript($_this->path.DS.'js'.DS.'custom.js',$_this) !!}