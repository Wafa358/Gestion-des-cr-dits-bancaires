  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <div class="mt-3 space-y-1">
      <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
      </x-responsive-nav-link>

      <!-- Authentication -->
      <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
              {{ __('Log Out') }}
          </x-responsive-nav-link>
      </form>
  </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
          <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                  <a href="{{ route('dashboard') }}">
                      <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                  </a>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                  
              </div>
          </div>
          <div class="input-group input-group-lg mb-3">
            <div class="input-group-prepend">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
               Wafa Hajji 
              </button>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="{{ route('profile.edit') }}">Profile </a></li>
                <li class="dropdown-item"><a href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </div>
            <!-- /btn-group -->
            <input type="text" class="form-control">
          </div>
          

          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
             
          </div>
      </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
      <div class="pt-2 pb-3 space-y-1">
         
      </div>

      <!-- Responsive Settings Options -->
      <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
         

      </div>
  </div>

    </ul>
  </nav>
  <!-- /.navbar -->

