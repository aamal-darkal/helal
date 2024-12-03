  <footer id="footer-area">
      <div class="container pb-3">
          <div class="row">
              <div class="col-md-6 footer-widget ps-5">
                  <h4>About The SARC</h4>
                  <p> @lang('helal.intro') </p>
                  <p> @lang('helal.info') </p>
              </div>
              <div class="col-md-6 footer-widget ps-5 about">
                  <h4>About us</h4>
                  <ul class="p-0">
                      <li><a href="#">@lang('helal.about')</a></li>
                      <li><a href="#">@lang('helal.contact')</a></li>
                      <li><a href="#">@lang('helal.Partnership')</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-md-6 footer-widget mt-3">
              <div class="ps-5">
                  <h4>Follow Us</h4>
                  <ul class="d-flex gap-2 text-white p-0">
                      <li><a href="{{ $components['facebook'] }}"><i class="fab fa-facebook"></i></a></li>
                      <li><a href="{{ $components['X-twitter'] }}"><i class="fab fa-x-twitter"></i></a></li>
                      <li><a href="{{ $components['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="{{ $components['linked-in'] }}"><i class="fab fa-linkedin"></i></a></li>
                      <li><a href="{{ $components['youtube'] }}"><i class="fab fa-youtube"></i></a></li>
                      <li><a href="{{ $components['telegram'] }}"><i class="fab fa-telegram-plane"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="footer-copyright py-4 ps-3">
          <div> SARC © 2024 </div>
      </div>
  </footer>
