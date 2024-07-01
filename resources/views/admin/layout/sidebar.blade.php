<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/panel') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('product') }}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
          <li>
            <a href="{{ route('product.create') }}">
              <i class="bi bi-circle"></i><span>create</span>
            </a>
          </li>

        </ul>
        </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('order') }}">
          <i class="bi bi-envelope"></i>
          <span>Order</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#section" data-bs-toggle="collapse" href="#">
          <i class="bi bi-star"></i><span>Section</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="section" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('section') }}">
              <i class="bi bi-circle"></i><span>view</span>
            </a>
          </li>
          <li>
            <a href="{{ route('section.create') }}">
              <i class="bi bi-circle"></i><span>create</span>
            </a>
          </li>

        </ul>
        </li>


    </ul>

  </aside>
