<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{url('/redirect')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('view_category')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Category</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('/view_product')}}" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Add Product</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('/show_product')}}" class="nav-link">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Show Product</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('order')}}" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Order</span>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="/redirect" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
