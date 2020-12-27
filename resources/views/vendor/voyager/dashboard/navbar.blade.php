<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('voyager.posts.index') }}"
                                data-toggle="tooltip" data-placement="top" title="İçerik Ekle"><i
                                    class="ficon bx bx-file"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('voyager.pages.index') }}"
                                data-toggle="tooltip" data-placement="top" title="Yeni Sayfa"><i
                                    class="ficon bx bx-sidebar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('voyager.categories.index') }}"
                                data-toggle="tooltip" data-placement="top" title="Kategoriler"><i
                                    class="ficon bx bx-align-middle"></i></a></li>
                    </ul>
                     @include('vendor.voyager.dashboard.partials.quick-menu') 
                </div>
                <ul class="nav navbar-nav float-right">
                    
                    
                    <!-- @include('vendor.voyager.dashboard.partials.header-language') -->

                    
                    <!-- @include('vendor.voyager.dashboard.partials.header-search') -->

                    
                    <!-- @include('vendor.voyager.dashboard.partials.header-notification') -->

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-status text-muted">{{ Auth::user()->email }}</span>
                            </div>
                            <span>
                                <img class="round" src="{{ $user_avatar }}" alt="avatar" height="40" width="40">
                            </span>
                        </a>
                        <?php $nav_items = config('voyager.dashboard.navbar_items'); ?>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            @if(is_array($nav_items) && !empty($nav_items))
                                @foreach($nav_items as $name => $item)
                                        @if(isset($item['route']) && $item['route'] == 'voyager.logout')
                                        <form action="{{ route('voyager.logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="dropdown-divider mb-0"></div>
                                            
                                            <button type="submit" class="btn btn-link">
                                                <i class="bx bx-power-off mr-50"></i> 
                                                {{__($name)}}
                                            </button>
                                        </form>
                                        @else
                                        <a href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : (isset($item['route']) ? $item['route'] : '#') }}"
                                         {!! isset($item['classes']) && !empty($item['classes']) ? 'class="dropdown-item '.$item['classes'].'"' : 'class="dropdown-item"' !!}  
                                         {!! isset($item['target_blank']) && $item['target_blank'] ? 'target="_blank"' : '' !!}>
                                            @if(isset($item['icon_class']) && !empty($item['icon_class']))
                                            <i class="{!! $item['icon_class'] !!}"></i>
                                            @endif
                                            {{__($name)}}
                                        </a>
                                        @endif
                                @endforeach
                            @endif
                            
                        </div>

                    </li>
           
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                        class="ficon bx bx-fullscreen"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


