<div class="d1">
    <h2>Horizontal Menu</h2>
    <div class="col-md-12">
        <div class="col-md-7 p-t-34">
            <div class="bty-horizontal-menu-1">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-fw fa-home"></i>Menu 1</a></li>
                    <li class="has-sub"><a href="#"><i class="fa fa-fw fa-bars"></i>
                            Menu 2</a>
                        <ul>
                            <li class="has-sub"><a href="#">Menu 2.1</a>
                                <ul>
                                    <li><a href="#">Menu 2.1.1</a></li>
                                    <li><a href="#">Menu 2.2.2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu 2.2</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Menu 3</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-phone"></i> Menu 4</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">
            <h5>bty-horizontal-menu-1</h5>
            <textarea class="form-control" name="" id="" cols="30" rows="5" readonly>
.bty-horizontal-menu-1,
.bty-horizontal-menu-1 ul,
.bty-horizontal-menu-1 ul li,
.bty-horizontal-menu-1 ul li a,
.bty-horizontal-menu-1 #menu-button {
    margin: 0;
    padding: 0;
    border: 0;
    list-style: none;
    line-height: 1;
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.bty-horizontal-menu-1:after,
.bty-horizontal-menu-1 > ul:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.bty-horizontal-menu-1 #menu-button {
    display: none;
}

.bty-horizontal-menu-1 {
    display: inline-block;
    width: auto;
    border-radius: 5px;
    font-family: 'Open Sans', Helvetica, sans-serif;
    background: #499bc7;
    background: -o-linear-gradient(top, #70b0d3, #3686b1);
    background: -ms-linear-gradient(top, #70b0d3, #3686b1);
    background: -webkit-linear-gradient(top, #70b0d3, #3686b1);
    background: -moz-linear-gradient(top, #70b0d3, #3686b1);
    background: linear-gradient(to bottom, #70b0d3, #3686b1);
    box-shadow: inset 0 -3px 0 #337da5, inset 0 -3px 3px #3480a9, inset 0 2px 2px #9bc8e0, inset 1px 0 2px #3889b5, inset -1px 0 2px #3889b5, 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.06), 0 3px 3px rgba(0, 0, 0, 0.17), 2px 1px 2px rgba(0, 0, 0, 0.05), -2px 1px 2px rgba(0, 0, 0, 0.05);
}

.bty-horizontal-menu-1.align-center > ul {
    font-size: 0;
    text-align: center;
}

.bty-horizontal-menu-1.align-center ul ul {
    text-align: left;
}

.bty-horizontal-menu-1.align-center > ul > li {
    display: inline-block;
    float: none;
}

.bty-horizontal-menu-1.align-right > ul > li {
    float: right;
}

.bty-horizontal-menu-1.align-right ul ul {
    text-align: right;
}

.bty-horizontal-menu-1 > ul > li {
    float: left;
}

.bty-horizontal-menu-1 > ul > li > a {
    padding: 20px 25px;
    font-size: 13px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    font-weight: 700;
    text-decoration: none;
    -webkit-transition: color .2s ease;
    -moz-transition: color .2s ease;
    -ms-transition: color .2s ease;
    -o-transition: color .2s ease;
    transition: color .2s ease;
}

.bty-horizontal-menu-1 > ul > li:hover > a,
.bty-horizontal-menu-1 > ul > li > a:hover,
.bty-horizontal-menu-1 > ul > li.active > a {
    color: #cae5fd;
}

.bty-horizontal-menu-1 > ul > li.has-sub > a {
    padding-right: 40px;
}

.bty-horizontal-menu-1 ul > li.has-sub > a:after {
    content: '';
    position: absolute;
    right: 5px;
    top: 17.5px;
    display: block;
    width: 18px;
    height: 18px;
    border-radius: 9px;
    background: #499bc7;
    background: -webkit-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -ms-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -moz-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -o-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: linear-gradient(to bottom, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    box-shadow: inset 0 -1px 1px #3583ad, inset 0 2px 1px #84bbd9;
    background-size: 36px 36px;
    background-position: 0 0;
    background-repeat: no-repeat;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    -ms-transition: all 0.1s ease-out;
    -o-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
}

.bty-horizontal-menu-1 ul > li.has-sub:hover > a:after {
    background-position: 0 -18px;
}

.bty-horizontal-menu-1 ul > li.has-sub > a:before {
    content: '';
    position: absolute;
    right: 11px;
    top: 25.5px;
    display: block;
    width: 0;
    height: 0;
    border: 3px solid transparent;
    border-top-color: #ffffff;
    z-index: 99;
}

.bty-horizontal-menu-1 ul > li.has-sub:hover > a:before {
    border-top-color: #286382;
}

.bty-horizontal-menu-1 ul ul {
    position: absolute;
    left: -9999px;
    opacity: 0;
    -webkit-transition: top .2s ease, opacity .2s ease;
    -moz-transition: top .2s ease, opacity .2s ease;
    -ms-transition: top .2s ease, opacity .2s ease;
    -o-transition: top .2s ease, opacity .2s ease;
    transition: top .2s ease, opacity .2s ease;
    z-index: 100;
}

.bty-horizontal-menu-1 > ul > li > ul {
    top: 91px;
    padding-top: 8px;
    border-radius: 5px;
}

.bty-horizontal-menu-1 > ul > li:hover > ul {
    left: auto;
    top: 51px;
    opacity: 1;
}

.bty-horizontal-menu-1.align-right > ul > li:hover > ul {
    right: 0;
}

.bty-horizontal-menu-1 ul ul ul {
    top: 40px;
}

.bty-horizontal-menu-1 ul ul > li:hover > ul {
    top: 0;
    left: 178px;
    padding-left: 10px;
    opacity: 1;
}

.bty-horizontal-menu-1.align-right ul ul > li:hover > ul {
    left: auto;
    right: 178px;
    padding-left: 0;
    padding-right: 10px;
    opacity: 1;
}

.bty-horizontal-menu-1 ul ul li a {
    width: 180px;
    padding: 12px 25px;
    font-size: 13px;
    font-weight: 700;
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    color: #ffffff;
    text-decoration: none;
    background: #499bc7;
    -webkit-transition: color .2s ease;
    -moz-transition: color .2s ease;
    -ms-transition: color .2s ease;
    -o-transition: color .2s ease;
    transition: color .2s ease;
}

.bty-horizontal-menu-1 ul ul li:hover > a,
.bty-horizontal-menu-1 ul ul li > a:hover,
.bty-horizontal-menu-1 ul ul li.active > a {
    color: #cae5fd;
}

.bty-horizontal-menu-1 ul ul li:first-child > a {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    box-shadow: inset 0 2px 2px #8bbfdb;
}

.bty-horizontal-menu-1 ul ul li:last-child > a {
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    box-shadow: inset 0 -3px 0 #3a8fbc, inset 0 -3px 3px #3480a9, 0 1px 1px rgba(0, 0, 0, 0.03), 0 2px 2px rgba(0, 0, 0, 0.05), 0 2px 3px rgba(0, 0, 0, 0.13);
}

.bty-horizontal-menu-1 ul ul > li.has-sub > a:after {
    right: 12px;
    top: 9.5px;
    background: #499bc7;
    background: -webkit-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -ms-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -moz-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: -o-linear-gradient(top, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    background: linear-gradient(to bottom, #60a8ce 0%, #55a1cb 25%, #3b92c0 50%, #60a8ce 75%, #55a1cb 100%);
    box-shadow: inset 0 -1px 1px #3583ad, inset 0 2px 1px #84bbd9;
    background-size: 36px 36px;
    background-position: 0 0;
    background-repeat: no-repeat;
}

.bty-horizontal-menu-1.align-right ul ul > li.has-sub > a:after {
    right: auto;
    left: 12px;
}

.bty-horizontal-menu-1 ul ul > li.has-sub:hover > a:after {
    background-position: 0 -18px;
}

.bty-horizontal-menu-1 ul ul > li.has-sub > a:before {
    top: 15.5px;
    right: 16px;
    border-top-color: transparent;
    border-left-color: #ffffff;
}

.bty-horizontal-menu-1.align-right ul ul > li.has-sub > a:before {
    top: 15.5px;
    right: auto;
    left: 16px;
    border-top-color: transparent;
    border-right-color: #ffffff;
    border-left-color: transparent;
}

.bty-horizontal-menu-1 ul ul > li.has-sub:hover > a:before {
    border-top-color: transparent;
    border-left-color: #2e7195;
}
            </textarea>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 1</h4>
        <h5>bty-horizontal-menu-1</h5>
        <div class="bty-horizontal-menu-1">
            <ul>
                <li><a href="#" target="_blank"><i class="fa fa-fw fa-home"></i>Menu 1</a></li>
                <li class="has-sub"><a href="#"><i class="fa fa-fw fa-bars"></i>
                        Menu 2</a>
                    <ul>
                        <li class="has-sub"><a href="#">Menu 2.1</a>
                            <ul>
                                <li><a href="#">Menu 2.1.1</a></li>
                                <li><a href="#">Menu 2.2.2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu 2.2</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Menu 3</a></li>
                <li><a href="#"><i class="fa fa-fw fa-phone"></i> Menu 4</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 2</h4>
        <h5>bty-horizontal-menu-2</h5>
        <p>No dropdown</p>
        <div class="bty-horizontal-menu-2">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 3</h4>
        <h5>bty-horizontal-menu-3</h5>
        <div class="bty-horizontal-menu-3">
            <ul>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a>
                    <ul>
                        <li><a href="#">Menu 2.1</a></li>
                        <li><a href="#">Menu 2.2</a></li>
                        <li><a href="#">Menu 2.3</a></li>
                        <li><a href="#">Menu 2.4</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 3</a>
                    <ul>
                        <li><a href="#">Menu 3.1</a></li>
                        <li><a href="#">Menu 3.2</a>
                            <ul>
                                <li><a href="#">Menu 3.2</a></li>
                                <li><a href="#">Menu 3.3</a></li>
                                <li><a href="#">Menu 3.4</a></li>
                                <li><a href="#">Menu 3.5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu 3.3</a></li>
                        <li><a href="#">Menu 3.4</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a>
                    <ul>
                        <li><a href="#">Menu 5.1</a></li>
                        <li><a href="#">Menu 5.2</a></li>
                        <li><a href="#">Menu 5.3</a></li>
                        <li><a href="#">Menu 5.4</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 6</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 4</h4>
        <h5>bty-horizontal-menu-4</h5>
        <div class="bty-horizontal-menu-4">
            <ul>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a>
                    <ul>
                        <li><a href="#">Menu 2.1</a></li>
                        <li><a href="#">Menu 2.2</a></li>
                        <li><a href="#">Menu 2.3</a></li>
                        <li><a href="#">Menu 2.4</a></li>
                        <li><a href="#">Menu 2.5</a>
                            <ul>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Level 2</a>
                                    <ul>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a>
                                            <ul>
                                                <li><a href="#">Level 4</a></li>
                                                <li><a href="#">Level 4</a></li>
                                                <li><a href="#">Level 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Menu 3</a></li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 5</h4>
        <h5>bty-horizontal-menu-5</h5>
        <div class="bty-horizontal-menu-5">
            <ul>
                <li><a href="#"><i class="fa fa-fw fa-home"></i><br/>Menu 1</a></li>
                <li><a href="#"><i class="fa fa-fw fa-home"></i><br/>Menu 2</a></li>
                <li><a href="#"><i class="fa fa-fw fa-home"></i><br/>Menu 3</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-fw fa-home"></i>Menu 3.1</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-home"></i>Menu 3.2</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-home"></i>Menu 3.3</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-fw fa-home"></i><br/>Menu 4</a></li>
                <li><a href="#"><i class="fa fa-fw fa-home"></i><br/>Menu 5</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Horizontal Menu 6</h4>
        <h5>bty-horizontal-menu-6</h5>
        <div class="bty-horizontal-menu-6">
            <ul>
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a>
                    <ul>
                        <li><a href="#">Menu 3.1</a></li>
                        <li><a href="#">Menu 3.2</a></li>
                        <li><a href="#">Menu 3.3</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
    </div>
</div>