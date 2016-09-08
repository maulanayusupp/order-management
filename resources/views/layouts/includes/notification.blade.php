<li role="presentation" class="dropdown">
  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-envelope-o"></i> Order
    @if( (App\Order::count()) > 0)
      <span class="badge bg-green">
        {{ App\Order::count() }}
      </span>
    @endif
  </a>
  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
    <?php $order_data = App\Order::where('status', 'unpaid')->orderBy('first_name', 'desc')->take(5)->get(); ?>
    @foreach($order_data as $data_order)
      <li>
        <a href = "{{ route('order.show', encrypt($data_order->id))}}">
          <span class="image"><img src="{{ asset('images/img.png') }}" alt="Profile Image" /></span>
          <span>
            <span>{{ $data_order->first_name ." ".$data_order->last_name}}</span>
          </span>
          <span class="message">
            <span class="pull-left">{{ date("d F Y, H:i", strtotime($data_order->created_at)) }}</span>
          </span>
        </a>
      </li>
    @endforeach
    <li>
      <div class="text-center">
        <a href="{{ url('kelola/order') }}">
          <strong>Lihat semua order</strong>
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </li>
  </ul>
</li>

<li role="presentation" class="dropdown">
  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-money"></i> Komisi
    @if( (App\PembagianKomisi::count()) > 0)
      <span class="badge bg-orange">
        {{ App\PembagianKomisi::count() }}
      </span>
    @endif
  </a>
  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
    <li>
      <a>
        <span class="image"><img src="{{ asset('images/img.png') }}" alt="Profile Image" /></span>
        <span>
          <span>John Smith</span>
          <span class="time">3 mins ago</span>
        </span>
        <span class="message">
          Film festivals used to be do-or-die moments for movie makers. They were where...
        </span>
      </a>
    </li>
    <li>
      <div class="text-center">
        <a href="{{ url('kelola/komisi') }}">
          <strong>lihat semua komisi</strong>
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </li>
  </ul>
</li>