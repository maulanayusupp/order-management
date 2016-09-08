<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Navigation</h3>
    <ul class="nav side-menu">
      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li>
        <a><i class="fa fa-envelope-o"></i> Order 
          @if( (App\Order::count()) > 0)
            <span class="label label-success">            
              {{ App\Order::count() }}            
            </span>
          @endif
          <span class="fa fa-chevron-down"></span>
        </a>
        <ul class="nav child_menu">
          <li><a href="{{ url('kelola/order/create') }}">Order</a></li>
          <li><a href="{{ url('kelola/order') }}">Kelola Order</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-money"></i> Komisi 
          @if( (App\PembagianKomisi::count()) > 0)
            <span class="label label-warning">
              {{ App\PembagianKomisi::count() }}
            </span>
          @endif
        <span class="fa fa-chevron-down"></span>
      </a>
        <ul class="nav child_menu">
          <li><a href="{{ url('kelola/komisi/atur') }}">Atur Komisi</a></li>
          <li><a href="{{ url('kelola/komisi') }}">Pembagian Komisi</a></li>
        </ul>
      </li>     
    </ul>
  </div>
</div>