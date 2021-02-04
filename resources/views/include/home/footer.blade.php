<footer>
    <div class="img" style="background: url(/image/img/wave-footer.png);"></div>
    <div class="container">
      <div class="grid1">
        <div class="colom">
          <div class="konten">
            <p><span>PT Bakrieland Development Tbk</span> is an integrated property company that puts the implementation of good
              corporate governance in its operations and is committed to implement corporate sustainability providing
              added values to all stakeholders.</p>
              <img src="image/img/footer.png" alt="">
          </div>
        </div>
        <div class="colom">
          <div class="row1">
            <i class="material-icons-outlined">location_on</i>
            <p>Wisma Bakrie 1, 6th floor
              Jl. HR Rasuna Said Kav. B-1
              Jakarta, Indonesia 12920</p>
          </div>
          <div class="row1">
            <i class="material-icons-outlined">local_phone</i>
            <p>+6221 525 7835</p>
          </div>
          <div class="row1">
            <i class="material-icons-outlined">print</i>
            <p>+6221 522 5063</p>
          </div>
          <div class="row1">
            <i class="material-icons-outlined">attach_email</i>
            <p>corporate.info@bakrieland.com</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <menu>
      <div class="container2">
        <div class="kiri">
          <a href="#">2018 &copy; Copyright PT. Bakrieland Development, Tbk</a>
        </div>
        <ul>
            <li><a href="#">Career</a></li>
            <li><a href="#">H.R.I.S</a></li>
            <li><a href="#">Webmail</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Contact Us</a></li>

            @guest
            <li>
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>

            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li>
                <a href="{{ url('/home') }}" style="color: #E27026">{{ Auth::user()->name }}</a>
            </li>
            <li>
                <a href="{{ url('/home') }}" style="color: #E27026">Dashboard</a>
            </li>
            <li>
                <a href="">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </a>
            </li>
            @endguest
         </ul>
      </div>
    </menu>
  </footer>
