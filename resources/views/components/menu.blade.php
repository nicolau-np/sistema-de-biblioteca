<div>
    <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="{{asset('assets/neutro/images/user.png')}}" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
              <span class="text-secondary text-small">{{ Auth::user()->nivel_acesso }}</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        @foreach ($menu as $item)
        @if(!$item['dropdown'])
        <li class="nav-item {{ $item['type']==$type ? 'active': null }}">
            <a class="nav-link" href="{{ $item['url'] }}">
              <span class="menu-title">{{ $item['label'] }}</span>
              <i class="{{ $item['icon'] }}"></i>
            </a>
          </li>
          @endif
        @endforeach



      </ul>
</div>
