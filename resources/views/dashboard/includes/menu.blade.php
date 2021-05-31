 <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="{{ url('immobporto') }}" class="icon-home">
        </a>
        <a href="{{ url('immobporto') }}" class="simple-text logo-normal">
          ImmobPorto
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{ route('dashboard') }}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
        @if(Auth::user()->role == "Admin")
          <li>
            <a href="{{ route('user.index') }}">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Users Management</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons ui-1_simple-add"></i>  
              <p>Add User</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons business_bank"></i>
              <p>Bid Management</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons shopping_box"></i>
              <p>Ask Management</p>
            </a>
          </li>
          <li>
            <a href="{{ route('user.edit', [Auth::user()->id]) }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        
        @elseif(Auth::user()->role == "Agent")
                <li>
                    <a href="#">
                        <i class="now-ui-icons business_bank"></i>
                        <p>Bid Management</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="now-ui-icons shopping_box"></i>
                        <p>Ask Management</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
          
          @else
                <li>
                    <a href="#">
                        <i class="now-ui-icons shopping_box"></i>
                        <p>Ask Management</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
          @endif
        
        </ul>
      </div>
    </div>