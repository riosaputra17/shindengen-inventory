<section id="sidebar">
  <a href="#" class="brand">
    <img src="{{ asset('img/shindengen_logo.png') }}" alt="Shindengen Logo" class="logo full-logo" />
    <img src="{{ asset('img/sdi_icon.png') }}" alt="Shindengen Icon" class="logo icon-logo" />
  </a>

  <ul class="side-menu top">
    <li>
      <a href="{{ url('/') }}">
        <i class="bx bxs-dashboard"></i>
        <span class="text">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/material-in') }}">
        <i class="bx bxs-download"></i>
        <span class="text">Material In</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/material-out') }}">
        <i class="bx bxs-cloud-upload"></i>
        <span class="text">Material Out</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/stock-balance') }}">
        <i class="bx bxs-box"></i>
        <span class="text">Stock Balance</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/reports') }}">
        <i class="bx bxs-report"></i>
        <span class="text">Reports</span>
      </a>
    </li>
  </ul>

  <ul class="side-menu">
    <li>
      <a href="{{ url('/settings') }}">
        <i class="bx bxs-cog"></i>
        <span class="text">Settings</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/logout') }}" class="logout">
        <i class="bx bxs-log-out-circle"></i>
        <span class="text">Logout</span>
      </a>
    </li>
  </ul>
</section>
