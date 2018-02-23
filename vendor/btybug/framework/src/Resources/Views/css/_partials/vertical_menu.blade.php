<div class="d1">
    <h2>Vertical Menu</h2>
    <div class="col-md-12">
        <div class="col-md-6 p-t-34">
            <div class="bty-vertical-menu-1">
                <nav>
                    <ul>
                        <li><a href="#"><i class="fa fa-bus" aria-hidden="true"></i><span>Menu 1</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i><span>Menu 2</span></a></li>
                        <li class="dropdown" rel="1"><a href="#"><i class="fa fa-child"
                                                                    aria-hidden="true"></i><span>Menu 3</span>
                                <ul class="dropdown-1">
                                    <li><a href="#"><i class="fa fa-certificate"
                                                       aria-hidden="true"></i><span>Menu 3.1</span></a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"
                                                       aria-hidden="true"></i><span>Menu 3.2</span></a></li>
                                    <li><a href="#"><i class="fa fa-diamond"
                                                       aria-hidden="true"></i><span>Menu 3.3</span></a></li>
                                </ul>
                            </a></li>
                        <li class="dropdown" rel="2"><a href="#"><i class="fa fa-circle-o-notch"
                                                                    aria-hidden="true"></i><span>Menu 4</span>
                                <ul class="dropdown-2">
                                    <li><a href="#"><i class="fa fa-certificate"
                                                       aria-hidden="true"></i><span>Menu 4.1</span></a></li>
                                    <li><a href="#"><i class="fa fa-diamond"
                                                       aria-hidden="true"></i><span>Menu 4.2</span></a></li>
                                </ul>
                            </a></li>
                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Menu 5</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-6">
            <h5>bty-vertical-menu-1</h5>
            <textarea class="form-control" name="" id="" cols="30" rows="5" readonly>
                .bty-vertical-menu-1 > nav {
    width: 225px;
    height: 100%;
    background: #262626;
    border-right: 1px solid #293649;
}

.bty-vertical-menu-1 > nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.bty-vertical-menu-1 > nav ul li {
    position: relative;
    display: block;
    width: 100%;
    height: 60px;
    border-bottom: 1px solid #293649;
}

.bty-vertical-menu-1 > nav ul li.active {
    background: #2e2e2e;
}

.bty-vertical-menu-1 > nav ul li.dropdown:before {
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    content: "\f054";
    position: absolute;
    margin: 20px 0 0 0;
    left: 85%;
    color: #aaa;
}

.bty-vertical-menu-1 > nav ul li:hover:after {
    width: 225px;
}

.bty-vertical-menu-1 > nav ul li:after {
    content: " ";
    position: absolute;
    z-index: 1;
    width: 0px;
    height: 2px;
    margin: -2px 0 0 0;
    background: #126CA1;
    -webkit-transition: 150ms ease all;
    -moz-transition: 150ms ease all;
    -ms-transition: 150ms ease all;
    -o-transition: 150ms ease all;
    transition: 150ms ease all;
}

.bty-vertical-menu-1 > nav ul li a {
    display: block;
    width: 100%;
    line-height: 60px;
    padding: 0 15px;
    text-decoration: none;
    color: #aaa;
    -webkit-transition: 150ms ease all;
    -moz-transition: 150ms ease all;
    -ms-transition: 150ms ease all;
    -o-transition: 150ms ease all;
    transition: 150ms ease all;
}

.bty-vertical-menu-1 > nav ul li a:hover {
    background: #2e2e2e;
    color: #eee;
}

.bty-vertical-menu-1 > nav ul li a i,
.bty-vertical-menu-1 > nav ul li a span {
    display: inline-block;
}

.bty-vertical-menu-1 > nav ul li a i {
    position: absolute;
    margin: 22px 0 0 0;
    font-size: 1.3em;
}

.bty-vertical-menu-1 > nav ul li a span {
    margin: 0 0 0 35px;
    font-size: 0.85em;
}

.bty-vertical-menu-1 > nav ul li ul[class*="dropdown-"] {
    position: absolute;
    display: none;
    margin: -61px 0 0 225px;
}

.bty-vertical-menu-1 > nav ul li ul[class*="dropdown-"] li {
    width: 225px;
    background: #171717;
}

.bty-vertical-menu-1 > nav ul li ul[class*="dropdown-"] li a:hover {
    background: #1f1f1f;
}
            </textarea>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Vertical menu 1</h4>
        <h5>bty-vertical-menu-1</h5>
        <div class="bty-vertical-menu-1">
            <nav>
                <ul>
                    <li><a href="#"><i class="fa fa-bus" aria-hidden="true"></i><span>Menu 1</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o-notch" aria-hidden="true"></i><span>Menu 2</span></a></li>
                    <li class="dropdown" rel="1"><a href="#"><i class="fa fa-child"
                                                                aria-hidden="true"></i><span>Menu 3</span>
                            <ul class="dropdown-1">
                                <li><a href="#"><i class="fa fa-certificate"
                                                   aria-hidden="true"></i><span>Menu 3.1</span></a></li>
                                <li><a href="#"><i class="fa fa-clock-o"
                                                   aria-hidden="true"></i><span>Menu 3.2</span></a></li>
                                <li><a href="#"><i class="fa fa-diamond"
                                                   aria-hidden="true"></i><span>Menu 3.3</span></a></li>
                            </ul>
                        </a></li>
                    <li class="dropdown" rel="2"><a href="#"><i class="fa fa-circle-o-notch"
                                                                aria-hidden="true"></i><span>Menu 4</span>
                            <ul class="dropdown-2">
                                <li><a href="#"><i class="fa fa-certificate"
                                                   aria-hidden="true"></i><span>Menu 4.1</span></a></li>
                                <li><a href="#"><i class="fa fa-diamond"
                                                   aria-hidden="true"></i><span>Menu 4.2</span></a></li>
                            </ul>
                        </a></li>
                    <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Menu 5</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Vertical menu 2</h4>
        <h5>bty-vertical-menu-2</h5>
        <div class="bty-vertical-menu-2">
            <ul>
                <li><a href="#">Menu 1</a>
                    <ul>
                        <li><a href="#">Menu 1.1</a></li>
                        <li><a href="#">Menu 1.2</a></li>
                        <li><a href="#">Menu 1.3</a></li>
                        <li><a href="#">Menu 1.4</a></li>
                    </ul>
                </li>
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
                        <li><a href="#">Menu 3.2</a></li>
                        <li><a href="#">Menu 3.3</a></li>
                        <li><a href="#">Menu 3.4</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Vertical menu 3</h4>
        <h5>bty-vertical-menu-3</h5>
        <div class="bty-vertical-menu-3">
            <ul>
                <li>
                    <div><i class="fa fa-paint-brush"></i>Menu 1<i class="fa fa-chevron-down"></i></div>
                    <ul>
                        <li><a href="#">Menu 1.1</a></li>
                        <li><a href="#">Menu 1.2</a></li>
                        <li><a href="#">Menu 1.3</a></li>
                        <li><a href="#">Menu 1.4</a></li>
                    </ul>
                </li>
                <li class="default open">
                    <div><i class="fa fa-code"></i>Menu 2<i class="fa fa-chevron-down"></i></div>
                    <ul>
                        <li><a href="#">Menu 2.1</a></li>
                        <li><a href="#">Menu 2.2</a></li>
                        <li><a href="#">Menu 2.3</a></li>
                    </ul>
                </li>
                <li>
                    <div><i class="fa fa-mobile"></i>Menu 3<i class="fa fa-chevron-down"></i></div>
                    <ul>
                        <li><a href="#">Menu 3.1</a></li>
                        <li><a href="#">Menu 3.2</a></li>
                        <li><a href="#">Menu 3.3</a></li>
                        <li><a href="#">Menu 3.4</a></li>
                    </ul>
                </li>
                <li>
                    <div><i class="fa fa-globe"></i>Menu 4<i class="fa fa-chevron-down"></i></div>
                    <ul>
                        <li><a href="#">Menu 4.1</a></li>
                        <li><a href="#">Menu 4.2</a></li>
                        <li><a href="#">Menu 4.3</a></li>
                        <li><a href="#">Menu 4.4</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Vertical menu 4</h4>
        <h5>bty-vertical-menu-4</h5>
        <div class="bty-vertical-menu-4">
            <nav>
                <ul class="bty-menu4">
                    <li>
                        <a href="">
                            <i class="fa fa-home"></i>
                            <strong>Menu 1</strong>
                            <small>description</small>
                        </a>
                    </li>
                    <li>
                        <a href="" class="active">
                            <i class="fa fa-edit"></i>
                            <strong>Menu 2</strong>
                            <small>description</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-gift"></i>
                            <strong>Menu 3</strong>
                            <small>description</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-globe"></i>
                            <strong>Menu 4</strong>
                            <small>description</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-comments-o"></i>
                            <strong>Menu 5</strong>
                            <small>description</small>
                        </a>
                        <ul>
                            <li><a href="#"><i class="fa fa-globe"></i>Menu 5.1</a></li>
                            <li>
                                <a href="#"><i class="fa fa-group"></i>Menu 5.2</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-female"></i>Menu 5.2.1</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-male"></i>Menu 5.2.2</a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-leaf"></i>Menu 5.2.2.1</a></li>
                                            <li><a href="#"><i class="fa fa-tasks"></i>Menu 5.2.2.2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-female"></i>Menu 5.2.3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-trophy"></i>Menu 5.2</a></li>
                            <li><a href="#"><i class="fa fa-certificate"></i>Menu 5.3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-picture-o"></i>
                            <strong>description</strong>
                            <small>description</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-envelope-o"></i>
                            <strong>Menu 7</strong>
                            <small>description</small>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>