<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{ url('home') }}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="{{ url('home') }}" class="simple-text logo-normal">
            {{ __('Jayasa POS') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @role('admin')
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'produk' ? 'active' : '' }}">
                <a href="{{ url('produk') }}">
                    <i class="nc-icon nc-app"></i>
                    <p>{{ __('Produk') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>
                            {{ __('Account Management') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        {{-- <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            @endrole
            @role('user')
            <li class="{{ $elementActive == 'transaction' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'transaction') }}">
                    <i class="nc-icon nc-cart-simple"></i>
                    <p>{{ __('Transaction') }}</p>
                </a>
            </li>
            @endrole
            {{-- <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li> --}}
            {{-- <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li> --}}
            {{-- <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li> --}}
            
            {{-- <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> --}}
            {{-- <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
