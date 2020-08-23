<li class="nav-item ">
    <a href="{{ route('cp.users.index') }}" class="nav-link {{ Request::is('cp/users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            @lang('models/users.plural')
        </p>
        <span class="pull-right-container">
          <small class="label pull-right bg-red">*</small>
        </span>
    </a>
</li>

<li class="nav-item ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
            @lang('Reservations')
        </p>
        <span class="pull-right-container">
          <small class="label pull-right bg-red">*</small>
        </span>
    </a>
</li>

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      @lang('Requests')
      <i class="fas fa-angle-left right"></i>
    </p>
    <span class="pull-right-container">
      <small class="label pull-right bg-red">*</small>
    </span>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Reservations')</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      @lang('Settings')
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Rooms')</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Services')</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Trips')</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      @lang('Accommodation')
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Customers')</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('New Checkin')</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      @lang('Reports')
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Treasury')</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>@lang('Profits')</p>
      </a>
    </li>
  </ul>
</li>