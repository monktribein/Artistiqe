    <!-- Top Bar Banner -->
    @php
        $topbar_banner = get_setting('topbar_banner');
        $topbar_banner_medium = get_setting('topbar_banner_medium');
        $topbar_banner_small = get_setting('topbar_banner_small');
        $topbar_banner_asset = uploaded_asset($topbar_banner);
    @endphp
    @if ($topbar_banner != null)
        <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner"
            data-value="removed">
            <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset h-40px h-lg-60px">
                <!-- For Large device -->
                <img src="{{ $topbar_banner_asset }}" class="d-none d-xl-block img-fit h-100" alt="{{ translate('topbar_banner') }}">
                <!-- For Medium device -->
                <img src="{{ $topbar_banner_medium != null ? uploaded_asset($topbar_banner_medium) : $topbar_banner_asset }}"
                    class="d-none d-md-block d-xl-none img-fit h-100" alt="{{ translate('topbar_banner') }}">
                <!-- For Small device -->
                <img src="{{ $topbar_banner_small != null ? uploaded_asset($topbar_banner_small) : $topbar_banner_asset }}"
                    class="d-md-none img-fit h-100" alt="{{ translate('topbar_banner') }}">
            </a>
            <button class="btn text-white h-100 absolute-top-right set-session" data-key="top-banner"
                data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
                <i class="la la-close la-2x"></i>
            </button>
        </div>
    @endif
<!--<div class="top-navbar z-1035" style="background:#990000ff; height:40px; display:flex; align-items:center;">-->
<!--    <div class="container" style="padding-right:0;">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col text-right" style="color:#fff; font-weight:600; margin:0; padding-right:0 !important; font-size:16px; display:flex; justify-content:flex-end; align-items:center; gap:10px;">-->

                <!-- SLIDER ANIMATION -->
<!--                <div class="topbar-slider"></div>-->

<!--                Launching Soon-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="top-navbar z-1035" style="background:#990000ff; height:40px; display:flex; align-items:center; padding:0;">
    
    <!-- FULL WIDTH SLIDER -->
    <div class="topbar-slider-container">
        
        <button class="topbar-btn prev">‹</button>

        <div class="topbar-slider">
            <div class="topbar-slide">Launching Soon</div>
            <div class="topbar-slide">New Features Coming</div>
            <div class="topbar-slide">Stay Tuned</div>
        </div>

        <button class="topbar-btn next">›</button>

    </div>
 <div class="topbar-text">
     <h6>
                Launching Soon
                </h6>
            </div>
</div>


    <!-- Top Bar -->
    <div class="top-navbar bg-white z-1035 h-35px h-sm-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col">
                    <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                        
                        
                        <!-- Language switcher 
                        @if (get_setting('show_language_switcher') == 'on')
                            <li class="list-inline-item dropdown mr-4" id="lang-change">

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <span class="">{{ $system_language->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    @foreach (get_all_active_language() as $key => $language)
                                        <li>
                                            <a href="javascript:void(0)" data-flag="{{ $language->code }}"
                                                class="dropdown-item @if ($system_language->code == $language->code) active @endif">
                                                <img src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                    data-src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                    class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                                <span class="language">{{ $language->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif-->

                        <!-- Currency Switcher 
                        @if (get_setting('show_currency_switcher') == 'on')
                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                                @php
                                    $system_currency = get_system_currency();
                                @endphp

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    {{ $system_currency->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    @foreach (get_all_active_currency() as $key => $currency)
                                        <li>
                                            <a class="dropdown-item @if ($system_currency->code == $currency->code) active @endif"
                                                href="javascript:void(0)"
                                                data-currency="{{ $currency->code }}">{{ $currency->name }}
                                                ({{ $currency->symbol }})</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                        
                        
                         <!-- Country Switcher 
                       <li class="list-inline-item dropdown ml-3" id="country-change">
                        @php
                            // Example: function to detect user's country (via IP or default setting)
                            $user_country = session('country', 'India'); // fallback if not detected
                            $countries = ['India', 'United States', 'United Kingdom', 'Canada', 'Australia'];
                        @endphp

                        <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                           data-toggle="dropdown" data-display="static">
                            {{ $user_country }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @foreach ($countries as $country)
                                <li>
                                    <a class="dropdown-item @if ($user_country == $country) active @endif"
                                       href="javascript:void(0)"
                                       data-country="{{ $country }}">
                                       {{ $country }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                      </li>

                    </ul>
                </div>-->
                
                
<!--@php
    $user_country = session('country', 'India');

    // Countries: name + ISO code (lowercase). Make sure these codes match your flag filenames.
    $countries = [
        ['name'=>'India','code'=>'in'],
        ['name'=>'United States','code'=>'us'],
        ['name'=>'United Kingdom','code'=>'england'],
        ['name'=>'Canada','code'=>'ca'],
        ['name'=>'Australia','code'=>'au'],
        ['name'=>'Germany','code'=>'de'],
        ['name'=>'France','code'=>'fr'],
        ['name'=>'Italy','code'=>'it'],
        ['name'=>'Brazil','code'=>'br'],
        ['name'=>'Japan','code'=>'jp'],
        ['name'=>'China','code'=>'cn'],
        ['name'=>'South Africa','code'=>'za'],
    ];

    // helper: return url to first existing file for given code or null
    function flagAssetFor($code) {
        $publicFolder = public_path('assets/img/flags/');
        $exts = ['png','svg','jpg','jpeg','gif'];
        foreach($exts as $ext) {
            $path = $publicFolder . $code . '.' . $ext;
            if (file_exists($path)) {
                return asset('assets/img/flags/' . $code . '.' . $ext);
            }
        }
        return null;
    }

    // find selected
    $selected = collect($countries)->firstWhere('name', $user_country);
    $selectedFlag = $selected ? flagAssetFor($selected['code']) : null;

    // placeholder (use any small icon you have, or a data URI)
    $placeholder = asset('assets/img/flags/placeholder.png'); // make sure placeholder exists
@endphp

<li class="list-inline-item dropdown ml-3" id="country-change">
    <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
       data-toggle="dropdown" data-display="static">
       @if($selectedFlag)
         <img src="{{ $selectedFlag }}" alt="{{ $selected['name'] }} flag" class="country-flag mr-1">
       @else
         <img src="{{ $placeholder }}" alt="flag" class="country-flag mr-1">
       @endif
       {{ $user_country }}
    </a>

    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
        @foreach ($countries as $country)
            @php $flagUrl = flagAssetFor($country['code']) ?? $placeholder; @endphp
            <li>
                <a class="dropdown-item @if ($user_country == $country['name']) active @endif"
                   href="javascript:void(0)"
                   data-country="{{ $country['name'] }}">
                   <img src="{{ $flagUrl }}" alt="{{ $country['name'] }} flag" class="country-flag mr-2">
                   {{ $country['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</li>-->



                <div class="col-6 text-right d-none d-lg-block">
                    <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                        
                        
                        <!--Language switcher 
                        @if (get_setting('show_language_switcher') == 'on')
                            <li class="list-inline-item dropdown mr-4" id="lang-change">

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    <span class="">{{ $system_language->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    @foreach (get_all_active_language() as $key => $language)
                                        <li>
                                            <a href="javascript:void(0)" data-flag="{{ $language->code }}"
                                                class="dropdown-item @if ($system_language->code == $language->code) active @endif">
                                                <img src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                    data-src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                    class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                                <span class="language">{{ $language->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif-->
                        
                        
                        <!--@auth
                            <span
                                class="d-flex align-items-center nav-user-info py-20px @if (isAdmin()) ml-5 @endif"
                                id="nav-user-info">
                                <!-- Image 
                                <span
                                    class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                    @if ($user->avatar_original != null)
                                        <img src="{{ $user_avatar }}"
                                            class="img-fit h-100" alt="{{ translate('avatar') }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                    @else
                                        <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                    @endif
                                </span>
                                <!-- Name 
                                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ $user->name }}</h4>
                            </span>
                        @else
                            <!--Login & Registration 
                            <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image 
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                        viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                            d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                            transform="translate(-2.064 -1.995)" fill="#91919b" />
                                    </svg>
                                </span>
                                <a href="{{ route('user.login') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block pr-2 ml-3">{{ translate('Login') }}</a>
                                <!--<a href="{{ route(get_setting('customer_registration_verify') === '1' ? 'registration.verification' : 'user.registration') }}"
                              {{-- <a href="{{ route('user.registration') }}" --}}
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2"></a>
                            </span>
                        @endauth-->
                        
                       
                        @if (get_setting('helpline_number'))
                            <!-- Helpline -->
                            <li class="list-inline-item ml-3 pl-3 mr-0 pr-0">
                                <a href="tel:{{ get_setting('helpline_number') }}"
                                    class="text-secondary fs-12 d-inline-block py-2">
                                    <span>{{ translate('Helpline') }}</span>
                                    <span>{{ get_setting('helpline_number') }}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="@if (get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white">
         <!--Search Bar -->
        <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025">
            <div class="container">
                <div class="d-flex align-items-center">
                    <!-- top menu sidebar button -->
                    <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active" data-toggle="class-toggle"
                        data-target=".aiz-top-menu-sidebar">
                        <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16">
                            <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2"
                                transform="translate(0 7)" fill="#919199" />
                            <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2"
                                fill="#919199" />
                            <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2"
                                transform="translate(0 14)" fill="#919199" />
                        </svg>

                    </button>
                  <!-- Header -->
<div class="col d-flex align-items-center">

    <!-- Logo -->
    <a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
        @php $header_logo = get_setting('header_logo'); @endphp
        @if ($header_logo != null)
            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}"
                 class="mw-100 h-30px h-md-40px" height="40">
        @else
            <img src="{{ static_asset('assets/img/newnewlogo.jpeg') }}" alt="{{ env('APP_NAME') }}"
                 class="mw-100 h-30px h-md-40px" height="40">
        @endif
    </a>

    <!-- Right side options -->
    <ul class="list-inline mb-0 d-flex align-items-center">

        <!-- Country Switcher 
        <li class="list-inline-item dropdown ml-3" id="country-change">
            @php
                $user_country = session('country', 'India');
                $countries = ['India', 'United States', 'United Kingdom', 'Canada', 'Australia'];
            @endphp
            <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
               data-toggle="dropdown" data-display="static">
                {{ $user_country }}
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                @foreach ($countries as $country)
                    <li>
                        <a class="dropdown-item @if ($user_country == $country) active @endif"
                           href="javascript:void(0)" data-country="{{ $country }}">
                           {{ $country }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>-->
<!-- Currency Switcher -->
                        @if (get_setting('show_currency_switcher') == 'on')
                            <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                                @php
                                    $system_currency = get_system_currency();
                                @endphp

                                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                                    data-toggle="dropdown" data-display="static">
                                    {{ $system_currency->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                    @foreach (get_all_active_currency() as $key => $currency)
                                        <li>
                                            <a class="dropdown-item @if ($system_currency->code == $currency->code) active @endif"
                                                href="javascript:void(0)"
                                                data-currency="{{ $currency->code }}">{{ $currency->name }}
                                                ({{ $currency->symbol }})</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif

        <!-- Language Switcher -->
        @if (get_setting('show_language_switcher') == 'on')
            <li class="list-inline-item dropdown ml-3" id="lang-change">
                <a href="javascript:void(0)" class="dropdown-toggle text-secondary fs-12 py-2"
                   data-toggle="dropdown" data-display="static">
                    <span>{{ $system_language->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                    @foreach (get_all_active_language() as $key => $language)
                        <li>
                            <a href="javascript:void(0)" data-flag="{{ $language->code }}"
                               class="dropdown-item @if ($system_language->code == $language->code) active @endif">
                                <img src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                     data-src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                     class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                <span class="language">{{ $language->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif

    </ul>
</div>

                        <!--<div class="d-none d-xl-block ml-auto mr-0">
                         
                        @auth
                            <span
                                class="d-flex align-items-center nav-user-info py-20px @if (isAdmin()) ml-5 @endif"
                                id="nav-user-info">
                                <!-- Image 
                                <span
                                    class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                    @if ($user->avatar_original != null)
                                        <img src="{{ $user_avatar }}"
                                            class="img-fit h-100" alt="{{ translate('avatar') }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                    @else
                                        <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                                    @endif
                                </span>
                                <!-- Name 
                                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ $user->name }}</h4>
                            </span>
                        @else
                            <!--Login & Registration 
                            <span class="d-flex align-items-center nav-user-info ml-3">
                                <!-- Image 
                                <span
                                    class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                                        viewBox="0 0 19.902 20.012">
                                        <path id="fe2df171891038b33e9624c27e96e367"
                                            d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                            transform="translate(-2.064 -1.995)" fill="#91919b" />
                                    </svg>
                                </span>
                                <a href="{{ route('user.login') }}"
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">{{ translate('Login') }}</a>
                                <a href="{{ route(get_setting('customer_registration_verify') === '1' ? 'registration.verification' : 'user.registration') }}"
                              {{-- <a href="{{ route('user.registration') }}" --}}
                                    class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">{{ translate('Sign up') }}</a>
                            </span>
                        @endauth
                            
                        </div>-->



<style>
.topbar-slider-container {
    display: flex;
    align-items: center;
    justify-content: center; /* FULL CENTER */
    width: 100%;             /* take entire navbar width */
    gap: 400px;
}

.topbar-btn {
    background: transparent;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    padding: 0 5px;
}

.topbar-slider {
    width: auto;             /* text stays centered */
    text-align: center;
    color: #fff;
    font-weight: 600;
    font-size: 16px;
}

.topbar-slide {
    display: none;
}

.topbar-slide.active {
    display: block;
}

.topbar-text {
    color: #fff;
    text-align: right;
    font-size: 16px;
    cursor: pointer;
    padding: 0 5px;
    padding-right: 10px !important;
}

/* Header user row - equal spacing between items */
.header-user-row {
  display: flex;
  align-items: center;         /* ensure vertical centering for all children */
  gap: 1rem;                   /* equal spacing between Login/Cart/Wishlist */
  --header-item-height: 56px;
}

/* Auth / guest block */
.header-user-row .nav-user-info {
  display: flex;
  align-items: center;         /* keep avatar + text in one row, vertically centered */
  gap: 0.5rem;
  padding: 0 0.25rem;
  /* remove forced height if it causes layout issues; fallback to var if you need */
  min-height: calc(var(--header-item-height) - 6px);
  line-height: 1;
}

/* Reset margins on direct children to avoid shifting */
.header-user-row .nav-user-info > * {
  margin: 0 !important;
  vertical-align: middle !important;
}

/* Avatar container fixed size and centered */
.header-user-row .nav-user-img {
  width: 25px;
  height: 25px;
  min-width: 25px;
  min-height: 25px;
  border-radius: 40%;
  overflow: hidden;
  display: inline-flex;        /* inline-flex so it sits well with text anchors */
  align-items: center;
  justify-content: center;
}

/* Make sure images inside avatar fit correctly */
.header-user-row .nav-user-img img,
.header-user-row .nav-user-img svg {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Username styling - small left spacing but do not change vertical alignment */
.header-user-row .nav-user-name {
  margin-left: 0.4rem;
  margin-right: 0;
  display: inline-flex;
  align-items: center;
  line-height: 1;
}

/* Cart wrapper - let gap handle spacing. Remove internal margins/padding that break layout */
.header-user-row .nav-cart-box-wrapper,
.header-user-row .nav-cart-box {
  display: flex;
  align-items: center;
  height: var(--header-item-height);
  padding: 0;
  background: transparent !important;
  box-shadow: none !important;
  border: none !important;
}

/* Wishlist wrapper - remove inline margins and align center */
.header-user-row .wishlist-wrapper {
  display: flex;
  align-items: center;
  height: var(--header-item-height);
  padding: 0;
}

/* Login/Sign-up links alignment: use inline-flex & center so they don't jump up */
.header-user-row .nav-user-info a {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center;
  padding: 0 0.35rem !important;
  height: auto !important;
  line-height: 1 !important;
  text-decoration: none;
}

/* Force anchors and headings to stay inline and centered */
.header-user-row .nav-user-info a,
.header-user-row .nav-user-info h4,
.header-user-row .nav-user-info span {
  display: inline-flex !important;
  align-items: center !important;
  vertical-align: middle !important;
}

/* Neutralize possibly added margin utility classes coming from partials */
.header-user-row .ml-0,
.header-user-row .ml-1,
.header-user-row .ml-2,
.header-user-row .mr-0,
.header-user-row .mr-1,
.header-user-row .mr-2,
.header-user-row .pr-2,
.header-user-row .pl-2 {
  margin-left: 0 !important;
  margin-right: 0 !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
}

/* Responsive: reduce gap slightly on smaller screens */
@media (max-width: 1400px) {
  .header-user-row { gap: 0.75rem; }
}
@media (max-width: 1200px) {
  .header-user-row { gap: 0.5rem; }
}
</style>

<div class="d-none d-xl-flex align-items-center ml-auto mr-0 header-user-row">

    @auth
        <span class="nav-user-info" id="nav-user-info">
            <span class="nav-user-img size-40px rounded-circle overflow-hidden border border-transparent">
                @if ($user->avatar_original != null)
                    <img src="{{ $user_avatar }}" class="img-fit" alt="{{ translate('avatar') }}"
                         onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                @else
                    <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="img-fit" alt="{{ translate('avatar') }}"/>
                @endif
            </span>

            <h4 class="h5 fs-14 fw-700 text-dark nav-user-name mb-0">{{ $user->name }}</h4>
        </span>
    @else
        <!-- Login & Registration -->
        <span class="nav-user-info">
            <span class="nav-user-img size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center">
                <!-- user icon svg (keeps center) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19.902 20.012" aria-hidden="true" focusable="false">
                    <path d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z" transform="translate(-2.064 -1.995)" fill="#91919b"/>
                </svg>
            </span>

            <a href="{{ route('user.login') }}" class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12">
               {{ translate('Login') }}
            </a>
            <span class="mx-1">|</span>

            <a href="{{ route(get_setting('customer_registration_verify') === '1' ? 'registration.verification' : 'user.registration') }}" class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12">
               {{ translate('Sign up') }}
            </a>
        </span>
    @endauth

     @if (Auth::check() && auth()->user()->user_type == 'customer')
    <!-- Cart: partial include only, inside wrapper that doesn't add margin -->
    <div class="nav-cart-box-wrapper">
        @include('frontend.partials.cart.cart')
    </div>
    @endif
    

    @if (Auth::check() && auth()->user()->user_type == 'customer')
    <!-- Wishlist -->
    <div class="wishlist-wrapper d-none d-lg-flex">
        <div id="wishlist">@include('frontend.partials.wishlist')</div>
    </div>
    @endif

</div>



            <!-- Loged in user Menus -->
            <div class="hover-user-top-menu position-absolute top-100 left-0 right-0 z-3">
                <div class="container">
                    <div class="position-static float-right">
                        <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm" style="width:220px;">
                            <ul class="list-unstyled no-scrollbar mb-0 text-left">
                                @if (isAdmin())
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('admin.dashboard') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Dashboard') }}</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('dashboard') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Dashboard') }}</span>
                                        </a>
                                    </li>
                                @endif

                                @if (isCustomer())
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('purchase_history.index') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <g id="Group_25261" data-name="Group 25261"
                                                    transform="translate(-27.466 -542.963)">
                                                    <path id="Path_2953" data-name="Path 2953"
                                                        d="M14.5,5.963h-4a1.5,1.5,0,0,0,0,3h4a1.5,1.5,0,0,0,0-3m0,2h-4a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1"
                                                        transform="translate(22.966 537)" fill="#b5b5bf" />
                                                    <path id="Path_2954" data-name="Path 2954"
                                                        d="M12.991,8.963a.5.5,0,0,1,0-1H13.5a2.5,2.5,0,0,1,2.5,2.5v10a2.5,2.5,0,0,1-2.5,2.5H2.5a2.5,2.5,0,0,1-2.5-2.5v-10a2.5,2.5,0,0,1,2.5-2.5h.509a.5.5,0,0,1,0,1H2.5a1.5,1.5,0,0,0-1.5,1.5v10a1.5,1.5,0,0,0,1.5,1.5h11a1.5,1.5,0,0,0,1.5-1.5v-10a1.5,1.5,0,0,0-1.5-1.5Z"
                                                        transform="translate(27.466 536)" fill="#b5b5bf" />
                                                    <path id="Path_2955" data-name="Path 2955"
                                                        d="M7.5,15.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 532)" fill="#b5b5bf" />
                                                    <path id="Path_2956" data-name="Path 2956"
                                                        d="M7.5,21.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 529)" fill="#b5b5bf" />
                                                    <path id="Path_2957" data-name="Path 2957"
                                                        d="M7.5,27.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 526)" fill="#b5b5bf" />
                                                    <path id="Path_2958" data-name="Path 2958"
                                                        d="M13.5,16.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 531.5)" fill="#b5b5bf" />
                                                    <path id="Path_2959" data-name="Path 2959"
                                                        d="M13.5,22.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 528.5)" fill="#b5b5bf" />
                                                    <path id="Path_2960" data-name="Path 2960"
                                                        d="M13.5,28.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 525.5)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Purchase History') }}</span>
                                        </a>
                                    </li>

                                    @if (addon_is_activated('preorder'))
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('preorder.order_list') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.002" viewBox="0 0 16 16.002">
                                                <path id="Union_63" data-name="Union 63" d="M14072,894a8,8,0,1,1,8,8A8.011,8.011,0,0,1,14072,894Zm1,0a7,7,0,1,0,7-7A7.007,7.007,0,0,0,14073,894Zm10.652,3.674-3.2-2.781a1,1,0,0,1-.953-1.756V889.5a.5.5,0,1,1,1,0v3.634a1,1,0,0,1,.5.863c0,.015,0,.029,0,.044l3.311,2.876a.5.5,0,0,1,.05.7.5.5,0,0,1-.708.049Z" transform="translate(-14072 -885.998)" fill="#b5b5bf"/>
                                              </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Preorder List') }}</span>
                                        </a>
                                    </li>
                                    @endif

                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('digital_purchase_history.index') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16"
                                                viewBox="0 0 16.001 16">
                                                <g id="Group_25262" data-name="Group 25262"
                                                    transform="translate(-1388.154 -562.604)">
                                                    <path id="Path_2963" data-name="Path 2963"
                                                        d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z"
                                                        transform="translate(1318.79 478.5)" fill="#b5b5bf" />
                                                    <path id="Path_2964" data-name="Path 2964"
                                                        d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z"
                                                        transform="translate(1324 486)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Downloads') }}</span>
                                        </a>
                                    </li>
                                    @if (get_setting('conversation_system') == 1)
                                        <li class="user-top-nav-element border border-top-0" data-id="1">
                                            <a href="{{ route('conversations.index') }}"
                                                class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16">
                                                    <g id="Group_25263" data-name="Group 25263"
                                                        transform="translate(1053.151 256.688)">
                                                        <path id="Path_3012" data-name="Path 3012"
                                                            d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z"
                                                            transform="translate(-1178 -341)" fill="#b5b5bf" />
                                                        <path id="Path_3013" data-name="Path 3013"
                                                            d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1"
                                                            transform="translate(-1182 -337)" fill="#b5b5bf" />
                                                        <path id="Path_3014" data-name="Path 3014"
                                                            d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                            transform="translate(-1181 -343.5)" fill="#b5b5bf" />
                                                        <path id="Path_3015" data-name="Path 3015"
                                                            d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1"
                                                            transform="translate(-1181 -346.5)" fill="#b5b5bf" />
                                                    </g>
                                                </svg>
                                                <span
                                                    class="user-top-menu-name has-transition ml-3">{{ translate('Conversations') }}</span>
                                            </a>
                                        </li>
                                    @endif

                                    @if (get_setting('wallet_system') == 1)
                                        <li class="user-top-nav-element border border-top-0" data-id="1">
                                            <a href="{{ route('wallet.index') }}"
                                                class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                    height="16" viewBox="0 0 16 16">
                                                    <defs>
                                                        <clipPath id="clip-path1">
                                                            <rect id="Rectangle_1386" data-name="Rectangle 1386"
                                                                width="16" height="16" fill="#b5b5bf" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_8102" data-name="Group 8102"
                                                        clip-path="url(#clip-path1)">
                                                        <path id="Path_2936" data-name="Path 2936"
                                                            d="M13.5,4H13V2.5A2.5,2.5,0,0,0,10.5,0h-8A2.5,2.5,0,0,0,0,2.5v11A2.5,2.5,0,0,0,2.5,16h11A2.5,2.5,0,0,0,16,13.5v-7A2.5,2.5,0,0,0,13.5,4M2.5,1h8A1.5,1.5,0,0,1,12,2.5V4H2.5a1.5,1.5,0,0,1,0-3M15,11H10a1,1,0,0,1,0-2h5Zm0-3H10a2,2,0,0,0,0,4h5v1.5A1.5,1.5,0,0,1,13.5,15H2.5A1.5,1.5,0,0,1,1,13.5v-9A2.5,2.5,0,0,0,2.5,5h11A1.5,1.5,0,0,1,15,6.5Z"
                                                            fill="#b5b5bf" />
                                                    </g>
                                                </svg>
                                                <span
                                                    class="user-top-menu-name has-transition ml-3">{{ translate('My Wallet') }}</span>
                                            </a>
                                        </li>
                                    @endif
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="{{ route('support_ticket.index') }}"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.001"
                                                viewBox="0 0 16 16.001">
                                                <g id="Group_25259" data-name="Group 25259"
                                                    transform="translate(-316 -1066)">
                                                    <path id="Subtraction_184" data-name="Subtraction 184"
                                                        d="M16427.109,902H16420a8.015,8.015,0,1,1,8-8,8.278,8.278,0,0,1-1.422,4.535l1.244,2.132a.81.81,0,0,1,0,.891A.791.791,0,0,1,16427.109,902ZM16420,887a7,7,0,1,0,0,14h6.283c.275,0,.414,0,.549-.111s-.209-.574-.34-.748l0,0-.018-.022-1.064-1.6A6.829,6.829,0,0,0,16427,894a6.964,6.964,0,0,0-7-7Z"
                                                        transform="translate(-16096 180)" fill="#b5b5bf" />
                                                    <path id="Union_12" data-name="Union 12"
                                                        d="M16414,895a1,1,0,1,1,1,1A1,1,0,0,1,16414,895Zm.5-2.5V891h.5a2,2,0,1,0-2-2h-1a3,3,0,1,1,3.5,2.958v.54a.5.5,0,1,1-1,0Zm-2.5-3.5h1a.5.5,0,1,1-1,0Z"
                                                        transform="translate(-16090.998 183.001)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3">{{ translate('Support Ticket') }}</span>
                                        </a>
                                    </li>
                                @endif
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="{{ route('logout') }}"
                                        class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                            viewBox="0 0 16 15.999">
                                            <g id="Group_25503" data-name="Group 25503"
                                                transform="translate(-24.002 -377)">
                                                <g id="Group_25265" data-name="Group 25265"
                                                    transform="translate(-216.534 -160)">
                                                    <path id="Subtraction_192" data-name="Subtraction 192"
                                                        d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                        transform="translate(-11803.999 -2367)" fill="#d43533" />
                                                </g>
                                                <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1"
                                                    height="8" rx="0.5" transform="translate(31.5 377)"
                                                    fill="#d43533" />
                                            </g>
                                        </svg>
                                        <span
                                            class="user-top-menu-name text-primary has-transition ml-3">{{ translate('Logout') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
       
    <script>
 let index = 0;
const slides = document.querySelectorAll(".topbar-slide");

const showSlide = () => {
    slides.forEach((s, i) => s.classList.toggle("active", i === index));
};

document.querySelector(".prev").addEventListener("click", () => {
    index = (index - 1 + slides.length) % slides.length;
    showSlide();
});

document.querySelector(".next").addEventListener("click", () => {
    index = (index + 1) % slides.length;
    showSlide();
});

showSlide();


(function () {
  var trigger = document.getElementById('nav-user-info');
  var container = document.querySelector('.hover-user-top-menu');

  if (!trigger || !container) return;

  function open() {
    container.classList.add('show');
    container.style.display = 'block';
    document.addEventListener('click', onDocClick);
    document.addEventListener('keydown', onEsc);
  }
  function close() {
    container.classList.remove('show');
    container.style.display = 'none';
    document.removeEventListener('click', onDocClick);
    document.removeEventListener('keydown', onEsc);
  }
  function onDocClick(e) {
    if (!container.contains(e.target) && !trigger.contains(e.target)) close();
  }
  function onEsc(e) {
    if (e.key === 'Escape') close();
  }

  trigger.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    container.classList.contains('show') ? close() : open();
  });

  // CSS fallbacks
  var style = document.createElement('style');
  style.textContent = `
    .hover-user-top-menu{display:none;}
    .hover-user-top-menu.show{display:block;}
  `;
  document.head.appendChild(style);
})();
</script>

    
    <!-- Top Menu Sidebar -->
    <div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
            data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
        <div class="collapse-sidebar c-scrollbar-light text-left">
            <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                data-target=".aiz-top-menu-sidebar">
                <i class="las la-times la-2x text-primary"></i>
            </button>
            @auth
                <span class="d-flex align-items-center nav-user-info pl-4">
                    <!-- Image -->
                    <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                        @if ($user->avatar_original != null)
                            <img src="{{ $user_avatar }}" class="img-fit h-100" alt="{{ translate('avatar') }}"
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="image" alt="{{ translate('avatar') }}"
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avatar-place.png') }}';">
                        @endif
                    </span>
                    <!-- Name -->
                    <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0">{{ $user->name }}</h4>
                </span>
            @else
                <!--Login & Registration -->
                <span class="d-flex align-items-center nav-user-info pl-4">
                    <!-- Image -->
                    <span
                        class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                            viewBox="0 0 19.902 20.012">
                            <path id="fe2df171891038b33e9624c27e96e367"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                transform="translate(-2.064 -1.995)" fill="#91919b" />
                        </svg>
                    </span>

                    <a href="{{ route('user.login') }}"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3">{{ translate('Login') }}</a>
                    <a href="{{ route(get_setting('customer_registration_verify') === '1' ? 'registration.verification' : 'user.registration') }}"
                    {{-- <a href="{{ route('user.registration') }}" --}}
                        class="text-reset opacity-60 hov-opacity-100 hov-text-primary fs-12 d-inline-block py-2 pl-2">{{ translate('Registration') }}</a>
                </span>
            @endauth
            <hr>
            <ul class="mb-0 pl-3 pb-3 h-100">
                @if (get_setting('header_menu_labels') != null)
                    @foreach (json_decode(get_setting('header_menu_labels'), true) as $key => $value)
                        <li class="mr-0">
                            <a href="{{ json_decode(get_setting('header_menu_links'), true)[$key] }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            @if (url()->current() == json_decode(get_setting('header_menu_links'), true)[$key]) active @endif">
                                {{ translate($value) }}
                            </a>
                        </li>
                    @endforeach
                @endif
                @auth
                    @if (isAdmin())
                        <hr>
                        <li class="mr-0">
                            <a href="{{ route('admin.dashboard') }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links">
                                {{ translate('My Account') }}
                            </a>
                        </li>
                    @else
                        <hr>
                        <li class="mr-0">
                            <a href="{{ route('dashboard') }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                {{ areActiveRoutes(['dashboard'], ' active') }}">
                                {{ translate('My Account') }}
                            </a>
                        </li>
                    @endif
                    @if (isCustomer())
                        <li class="mr-0">
                            <a href="{{ route('customer.all-notifications') }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                {{ areActiveRoutes(['customer.all-notifications'], ' active') }}">
                                {{ translate('Notifications') }}
                            </a>
                        </li>
                        <li class="mr-0">
                            <a href="{{ route('wishlists.index') }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                {{ areActiveRoutes(['wishlists.index'], ' active') }}">
                                {{ translate('Wishlist') }}
                            </a>
                        </li>
                        <li class="mr-0">
                            <a href="{{ route('compare') }}"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                {{ areActiveRoutes(['compare'], ' active') }}">
                                {{ translate('Compare') }}
                            </a>
                        </li>
                    @endif
                    <hr>
                    <li class="mr-0">
                        <a href="{{ route('logout') }}"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-primary header_menu_links">
                            {{ translate('Logout') }}
                        </a>
                    </li>
                @endauth
            </ul>
            <br>
            <br>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script type="text/javascript">
            function show_order_details(order_id) {
                $('#order-details-modal-body').html(null);

                if (!$('#modal-size').hasClass('modal-lg')) {
                    $('#modal-size').addClass('modal-lg');
                }

                $.post('{{ route('orders.details') }}', {
                    _token: AIZ.data.csrf,
                    order_id: order_id
                }, function(data) {
                    $('#order-details-modal-body').html(data);
                    $('#order_details').modal();
                    $('.c-preloader').hide();
                    AIZ.plugins.bootstrapSelect('refresh');
                });
            }
        </script>
    @endsection
