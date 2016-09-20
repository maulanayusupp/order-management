<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Navigation</h3>
    <ul class="nav side-menu">
      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="{{ url('komisiku') }}"><i class="fa fa-bank"></i> KomisiKu</a></li>
      <li><a href="{{ url('orderku') }}"><i class="fa fa-tags"></i> OrderKu</a></li>
      <li>
        <a><i class="fa fa-envelope-o"></i> Order 
          @if( (App\Order::where('status','unpaid')->count() > 0) )
          <span class="label label-success">            
            {{ App\Order::where('status','unpaid')->count() }}            
          </span>
          @endif
          <span class="fa fa-chevron-down"></span>
        </a>
        <ul class="nav child_menu">
          <li><a href="{{ url('kelola/order/create') }}">Order</a></li>
          <li>
            <a href="{{ url('kelola/order') }}">Kelola Order
              @if( (App\Order::where('status','unpaid')->count() > 0) )
              <span class="label label-success">            
                {{ App\Order::where('status','unpaid')->count() }}            
              </span>
              @endif
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a><i class="fa fa-money"></i> Komisi 
          @if( (App\PembagianKomisi::count()) > 0)
          <span class="label label-warning">
            {{ App\PembagianKomisi::count() }}
          </span>
          @endif
          <span class="fa fa-chevron-down"></span>
        </a>
      <ul class="nav child_menu">
        <li><a href="{{ url('kelola/komisi/atur') }}">Atur Komisi</a></li>
        <li>
          <a href="{{ url('kelola/pembagian-komisi') }}">Pembagian Komisi
             @if( (App\PembagianKomisi::count()) > 0)
              <span class="label label-warning">
                {{ App\PembagianKomisi::count() }}
              </span>
              @endif
          </a>
        </li>
      </ul>
    </li>     
  </ul>
</div>
</div>