<div class="sidebar">
    <div class="logo-details mt-4">
        <div class="img_wrapper">
            @php
                $system_light_logo = \App\Models\Setting::where('type', 'system_light_logo')->value('description');
                $system_fav_icon = \App\Models\Setting::where('type', 'system_fav_icon')->value('description');
            @endphp
            <img class="logo-lg" height="34px" src="{{ get_system_logo_favicon($system_light_logo, 'light') }}"
                alt="" />
            <img class="logo-sm" height="34px" src="{{ get_system_logo_favicon($system_fav_icon, 'favicon') }}"
                alt="" />
        </div>
    </div>
    <div class="closeIcon">
        <span><i class="fas fa-close"></i></span>
    </div>
    <ul class="nav-links">
        <!-- sidebar title -->
        <li class="nav-links-li">
            <div class="iocn-link">
                <a href="{{ route('admin.dashboard') }}">
                    <div class="sidebar_icon">
                        <i class="fa-solid fa-house-user"></i>
                    </div>
                    <span class="link_name custom_dashboard_color">{{ get_phrase('Dashboard') }} </span>
                </a>
            </div>
        </li>
        <!-- Sidebar menu -->

        <!-- Sidebar menu -->
        <li class="nav-links-li @if (Route::currentRouteName() == 'admin.view.category' ||
                Route::currentRouteName() == 'admin.users' ||
                Route::currentRouteName() == 'admin.user.add' ||
                Route::currentRouteName() == 'admin.user.edit') showMenu @endif">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span class="link_name">{{ get_phrase('User') }} </span>
                </a>
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                        <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                            fill="#fff" opacity="1" />
                    </svg>
                </span>
            </div>
            <ul class="sub-menu">
                <li><a class="@if (Route::currentRouteName() == 'admin.users') Active @endif"
                        href="{{ route('admin.users') }}">{{ get_phrase('Users') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.user.add') Active @endif"
                        href="{{ route('admin.user.add') }}">{{ get_phrase('Create new user') }}</a></li>
            </ul>
        </li>

        <li class="nav-links-li @if (
                Route::currentRouteName() == 'admin.group' ||
                Route::currentRouteName() == 'admin.group.create') showMenu @endif">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <span class="link_name">{{ get_phrase('Group') }} </span>
                </a>
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                        <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                            fill="#fff" opacity="1" />
                    </svg>
                </span>
            </div>
            <ul class="sub-menu">
                <li><a class="@if (Route::currentRouteName() == 'admin.group') Active @endif"
                        href="{{ route('admin.group') }}">{{ get_phrase('Groups') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.group.create') Active @endif"
                        href="{{ route('admin.group.create') }}">{{ get_phrase('Create Group') }}</a></li>
            </ul>
        </li>

 <li class="nav-links-li @if (Route::currentRouteName() == 'admin.view.category' ||
                Route::currentRouteName() == 'admin.page' ||
                Route::currentRouteName() == 'admin.create.category' ||
                Route::currentRouteName() == 'admin.page.create' ||
                Route::currentRouteName() == 'admin.page.edit') showMenu @endif">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <span class="link_name">{{ get_phrase('Page') }} </span>
                </a>
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                        <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                            fill="#fff" opacity="1" />
                    </svg>
                </span>
            </div>
            <ul class="sub-menu">
                <li><a class="@if (Route::currentRouteName() == 'admin.page') Active @endif"
                        href="{{ route('admin.page') }}">{{ get_phrase('Pages') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.page.create') Active @endif"
                        href="{{ route('admin.page.create') }}">{{ get_phrase('Create Page') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.view.category') Active @endif"
                        href="{{ route('admin.view.category') }}">{{ get_phrase('Category') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.create.category') Active @endif"
                        href="{{ route('admin.create.category') }}">{{ get_phrase('Create Category') }}</a></li>
            </ul>
        </li>



        {{-- Fundraiser --}}
        <style>
            .sub-menu .span {
                height: 20px;
                width: 20px;
                display: inline-block;
                background: #e43434;
                text-align: center;
                border-radius: 50%;
                line-height: 20px;
                color: #fff;
                font-size: 11px;
                margin-left: 4px;
              }
          </style>
         






        <!-- menu starts here -->
        <li class="nav-links-li @if (Route::currentRouteName() == 'admin.reported.post.view') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('admin.reported.post.view') }}">
                    <div class="sidebar_icon">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <span class="link_name">
                        {{ get_phrase('Reported Post') }}
                    </span>
                </a>
            </div>
        </li>




        <li class="nav-links-li @if (Route::currentRouteName() == 'admin.about.page.data.view' ||
                Route::currentRouteName() == 'admin.live-video.view' ||
                Route::currentRouteName() == 'admin.privacy.page.data.view' ||
                Route::currentRouteName() == 'admin.term.page.data.view' ||
                Route::currentRouteName() == 'admin.smtp.settings.view' ||
                Route::currentRouteName() == 'admin.system.settings.view' ||
                Route::currentRouteName() == 'admin.settings.payment' ||
                Route::currentRouteName() == 'admin.language.settings' ||
                Route::currentRouteName() == 'admin.about' ||
                Route::currentRouteName() == 'admin.zitsi-video.view' ||
                Route::currentRouteName() == 'admin.settings.amazon_s3' ||
                'admin.languages.edit.phrase' == Route::currentRouteName()) showMenu @endif">
            <div class="iocn-link">
                <a href="#">
                    <div class="sidebar_icon">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <span class="link_name">{{ get_phrase('Settings') }}</span>
                </a>
                <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                        <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                            fill="#fff" opacity="1" />
                    </svg>
                </span>
            </div>
            <ul class="sub-menu">
                <li><a class="@if (Route::currentRouteName() == 'admin.system.settings.view') Active @endif"
                        href="{{ route('admin.system.settings.view') }}">{{ get_phrase('System Setting') }}</a></li>
         
            

                <li><a class="@if (Route::currentRouteName() == 'admin.language.settings' ||
                        'admin.languages.edit.phrase' == Route::currentRouteName()) Active @endif"
                        href="{{ route('admin.language.settings') }}">{{ get_phrase('Language Setting') }}</a></li>
                <li><a class="@if (Route::currentRouteName() == 'admin.smtp.settings.view') Active @endif"
                        href="{{ route('admin.smtp.settings.view') }}">{{ get_phrase('SMTP Setting') }}</a></li>
               
            </ul>
        </li>
    </ul>
</div>
