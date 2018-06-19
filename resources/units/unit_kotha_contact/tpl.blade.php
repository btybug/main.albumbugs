    <div class="contact-us-page">
        <div class="post-thumb">
            <img src="http://www.pawstexarkana.org/images/about.jpg" alt="">
        </div>
        <div class="post-content">
            <div class="entry-header text-center text-uppercase">

                <h2 class="text-left">contact us</h2>
            </div>
            <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirtempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctusest
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elised
                    diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sdiam
                    voluptua. At vero eos et accusam.
                </p>

            </div>

            <div class="leave-comment">
                <h4>SEND MASSAGE</h4>
                <form class="form-horizontal contact-form" method="post" action="">
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Write Massage"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn send-btn"> SEND MASSAGE</button>
                </form>
            </div>
        </div>
    </div>

{!! BBstyle($_this->path.DS.'css'.DS.'style.css') !!}