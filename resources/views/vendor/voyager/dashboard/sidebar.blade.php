<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="brand-logo"><img width="26" height="26"
                            src="{{ voyager_asset('images/logo-icon-light.png') }}"
                            alt="{{ Voyager::setting('admin.title', 'Dentopol') }}">
                    </div>
                    <h2 class="brand-text mb-0">
                        {{ Voyager::setting('admin.title', 'Dentopol') }}
                    </h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" nav-item">
                <a href="{{ route('voyager.dashboard') }}">
                    <i class="menu-livicon" data-icon="desktop"></i>
                    <span class="menu-title" data-i18n="">Başlangıç</span>
                </a>
            </li>
            <!--
            <li class=" nav-item">
                <a href="{{ route('voyager.roles.index') }}"> 
                    <i class="menu-livicon" data-icon="unlock"></i>
                    <span class="menu-title" data-i18n="">Yetkilendirme</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('voyager.users.index') }}">
                    <i class="menu-livicon" data-icon="users"></i>
                    <span class="menu-title" data-i18n="">Kullanıcılar</span>
                </a>
            </li>
        -->
            <li class=" nav-item">
                <a href="{{ route('voyager.media.index') }}">
                    <i class="menu-livicon" data-icon="music"></i>
                    <span class="menu-title" data-i18n="">Medya</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('voyager.posts.index') }}">
                    <i class="menu-livicon" data-icon="grid"></i>
                    <span class="menu-title" data-i18n="">İçerikler</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('voyager.pages.index') }}">
                    <i class="menu-livicon" data-icon="notebook"></i>
                    <span class="menu-title" data-i18n="">Sayfalar</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="{{ route('voyager.categories.index') }}">
                    <i class="menu-livicon" data-icon="share"></i>
                    <span class="menu-title" data-i18n="">Kategoriler</span>
                </a>
            </li>


            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-menu-arrow-bottom"></i><span class="menu-title" data-i18n="Menu Levels">Ayarlar</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('voyager.settings.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Sayfa Ayarları</span></a>
                    </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Kullanıcılar</span></a>
                        <ul class="menu-content">
                            <li><a href="{{ route('voyager.users.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Kullanıcı Listesi</span></a>
                            </li>
                            <li><a href="{{ route('voyager.roles.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Yetkilendirme</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('voyager.menus.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Menü Düzenle</span></a>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-menu-arrow-bottom"></i><span class="menu-title" data-i18n="Menu Levels">Root</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('voyager.database.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Database</span></a></li>
                    <li><a href="{{ route('voyager.bread.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">BREAD</span></a></li>
                    <li><a href="{{ route('voyager.hooks') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Hooks</span></a></li>
                    <li><a href="{{ route('voyager.compass.index') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Compass</span></a></li>
                </ul>
            </li>




        </ul>
    </div>
</div>
<!-- END: Main Menu-->
