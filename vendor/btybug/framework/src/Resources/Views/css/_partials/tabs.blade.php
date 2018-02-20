<div class="d1">
    <h2>Tabs</h2>
    <div class="col-md-12">
        <div class="col-md-6 p-t-34">
            <div class="bty-tab">
                <ul>
                    <li class="active"><a href="#">Tab 1</a></li>
                    <li><a href="#">Tab 2</a></li>
                    <li><a href="#">Tab 3</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <h5>bty-tab</h5>
            <textarea class="form-control" name="" id="" cols="30" rows="5" readonly>
.bty-tab {
    width: auto !important;
    border-bottom: 3px solid #499bc7;
    line-height: 1;
}

.bty-tab > ul > li {
    float: left;
}

.bty-tab > ul > li a {
    z-index: 2;
    padding: 18px 25px 12px 25px !important;
    font-size: 15px;
    font-weight: 400;
    text-decoration: none;
    color: #444444;
    -webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    margin-right: -4px;
}

.bty-tab > ul > li.active > a:after, .bty-tab > ul > li:hover > a:after, .bty-tab > ul > li > a:hover:after {
    background: #499bc7;
}

.bty-tab > ul > li > a:after {
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
    width: 100%;
    height: 120%;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    content: "";
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;
    -webkit-transform: perspective(5px) rotateX(2deg);
    -webkit-transform-origin: bottom;
    -moz-transform: perspective(5px) rotateX(2deg);
    -moz-transform-origin: bottom;
    transform: perspective(5px) rotateX(2deg);
    transform-origin: bottom;
}

.bty-tab:after, .bty-tab > ul:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.bty-tab ul, .bty-tab ul li a {
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

.bty-tab > ul > li.active > a:after, .bty-tab > ul > li:hover > a:after, .bty-tab > ul > li > a:hover:after {
    background: #499bc7;
}

.bty-tab > ul > li.active > a, .bty-tab > ul > li:hover > a, .bty-tab > ul > li > a:hover {
    color: rgb(255, 255, 255);
}
            </textarea>

        </div>
    </div>
    <div class="col-md-12">
        <h4>Tab 2</h4>
        <h5>bty-tab2</h5>
        <div class="bty-tab2">
            <ul>
                <li class="active"><a href="#"><i class="fa fa-fw fa-home"></i>Tab 1</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bars"></i> Tab 2</a></li>
                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Tab 3</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4>Tab 3</h4>
        <h5>bty-tab3</h5>
        <div class="bty-tab3">
            <ul>
                <li class="active"><a href="#bty-tab-1" data-toggle="tab" aria-expanded="true">Tab 1</a>
                </li>
                <li class=""><a href="#bty-tab-2" data-toggle="tab" aria-expanded="false">Tab 2</a></li>
                <li class=""><a href="#bty-tab-3" data-toggle="tab" aria-expanded="false">Tab 3</a></li>
            </ul>
            <div class="bty-tab-content">
                <div class="bty-pane fade active in" id="bty-tab-1">

                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable
                    </p>

                </div>
                <div class="bty-pane fade" id="bty-tab-2">
                    <p>
                        Phasellus et mi neque. Aenean faucibus, tortor nec lacinia lobortis, tellus mi dapibus sem, at
                        ultricies elit sapien non nisl. Nam mollis turpis sed tellus gravida
                    </p>
                </div>
                <div class="bty-pane fade" id="bty-tab-3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis porttitor sem consectetur
                        congue. Ut et posuere nulla. Vivamus elementum nibh eget erat porttitor accumsan eu sed lectus.
                        Proin id bibendum elit. Aliquam eu faucibus mi. Curabitur consectetur volutpat quam ut rutrum.
                        Ut non turpis vel diam laoreet malesuada ut non lectus. Nullam condimentum odio quis risus
                        pharetra, vel tristique lorem lobortis.

                        Aliquam efficitur libero eu eros ornare viverra. Fusce sed consequat justo. Nulla sit amet
                        venenatis dui, vitae condimentum orci. Curabitur a nulla tristique, tempus purus nec, fringilla
                        felis. Proin tellus nisi, volutpat eget augue non, pellentesque ultricies est. Duis feugiat
                        mauris eu lacus efficitur congue. Aenean suscipit aliquam ante, a pulvinar enim sagittis ut.
                        Aenean fringilla tellus sed vestibulum sodales. Sed gravida ipsum interdum, faucibus eros at,
                        pellentesque mauris.

                        Mauris eget consequat purus. Sed eleifend non ipsum at ullamcorper. Aliquam ornare tristique
                        arcu, eget accumsan elit gravida mattis. Suspendisse eleifend vel dolor eu placerat. Vestibulum
                        mollis suscipit lobortis. Ut non orci at lectus porta ullamcorper. Vivamus vel magna lectus. Nam
                        consequat elit ante, in fermentum purus ultricies sed. Aenean vitae molestie turpis, nec
                        porttitor nibh. Donec non nisi lacus. Quisque eget efficitur mauris. Integer et felis leo.
                        Pellentesque ornare facilisis viverra.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>