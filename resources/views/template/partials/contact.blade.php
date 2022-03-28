<div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">
                <div class="section-title">
                    <h2 class="head-title mb-30">GET IN TOUCH</h2>
                </div>

                <ul class="contact-details">
                    {{-- <li><span>23 Main, Street</span></li> --}}
                    <li><i class="bi bi-geo-alt px-2"></i><span>Dar es Salaam, Tanzania</span></li>
                    <li><i class="bi bi-whatsapp px-2"></i></i><span>+255 685487031</span></li>
                    <li><i class="bi bi-envelope px-2"></i><span>lodgmtui@gmail.com</span></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-3">

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="mt-0">
                  <input type="submit" class="btn btn-default btn-send"  style= "background-color:#212121" onmouseover="hoverBtn(this)"  onmouseout="outBtn(this)"value="Send message">

                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
