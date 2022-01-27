<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark" style="background-color:#DA0037  ;" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <div class="text-center">
            <img src="{{ asset('telkomsel') }}/img/telkomsel-logo-white.png" class="" alt=" ..."
                style="height: 2.75rem;">
        </div>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder"
                                    src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&size=800">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            @role('Karyawan')
                                <img src="{{ asset('telkomsel') }}/img/telkomsel-logo-only.png">
                                <img src="{{ asset('telkomsel') }}/img/telkomsel-logo-red.png">
                            @endrole
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                            aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                {{-- Home --}}
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="fas fa-home"></i> {{ __('Home') }}
                    </a>
                </li>

                {{-- SUPER ADMIN --}}
                @role('Super Admin')
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('super-admin.dashboard.index') }}">
                            <i class="ni ni-tv-2"></i> {{ __('Dashboard') }}
                        </a>
                    </li>

                    @if (auth()->user()->can('permission_access') || auth()->user()->can('role_access') || auth()->user()->can('user_access'))
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-examples">
                                <i class="fas fa-cogs"></i>
                                <span class="nav-link-text">{{ __('Setup & Settings') }}</span>
                            </a>

                            <div class="collapse " id="navbar-examples">
                                <ul class="nav nav-sm flex-column">
                                    @can('permission_access')
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('admin/cities') ? 'active' : '' }}"
                                                href="{{ route('super-admin.user-management.permissions.index') }}">
                                                {{ __('Permission Management') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('role_access')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('super-admin.user-management.roles.index') }}">
                                                {{ __('Role Management') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('user_access')
                                        <li class="nav-item">
                                            <a class="nav-link" href="/super-admin/daftar-role">
                                                {{ __('Daftar Role') }}
                                            </a>
                                        </li>
                                    @endcan
                                    <li class="nav-item">
                                        <a class="nav-link" href="/super-admin/daftar-karyawan">
                                            {{ __('Daftar Karyawan') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    @if (auth()->user()->can('loginLog_access'))
                        <li class="nav-item">
                            <a class="nav-link" href="#log" data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="navbar-examples">
                                <i class="fas fa-history"></i>
                                <span class="nav-link-text">{{ __('Log') }}</span>
                            </a>
                            <div class="collapse" id="log">
                                <ul class="nav nav-sm flex-column">
                                    @can('loginLog_access')
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('super-admin.log.loginLog.index') }}">
                                                {{ __('Login log') }}
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endif
                @endrole

                    @if (auth()->user()->can('learning_syllabus_access')
                    && auth()->user()->can('learning_syllabus_approve'))
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('learning-syllabus*') ? 'active' : '' }}" href="#learning-syllabus" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="learning-syllabus">
                                <i class="fas fa-book"></i>
                                <span class="nav-link-text">{{ __('Learning Syllabus') }}</span>
                            </a>
                            <div class="collapse" id="learning-syllabus">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-syllabus/job-families*') ? 'active' : '' }}"
                                            href="{{ route('learning-syllabus.job-families.index') }}">
                                            {{ __('Syllabus Directory') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-syllabus/request-syllabus*') ? 'active' : '' }}"
                                            href="{{ route('learning-syllabus.request-syllabus.index') }}">
                                            {{ __('Request Syllabus') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @else
                    @can('learning_syllabus_access')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-syllabus/job-families*') ? 'active' : '' }}"
                            href="{{ route('learning-syllabus.job-families.index') }}">
                            <i class="fas fa-book"></i> {{ __('Syllabus Directory') }}
                        </a>
                    </li>
                    @endcan

                    @can('learning_syllabus_approve')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('learning-syllabus/request-syllabus*') ? 'active' : '' }}"
                                href="{{ route('learning-syllabus.request-syllabus.index') }}">
                                <i class="fas fa-edit"></i> {{ __('Request Syllabus') }}
                            </a>
                        </li>
                    @endcan
                @endif

                @php
                    $user_atasan = \App\Models\Employee::where('nik_atasan', Auth::user()->employee->nik)->count();
                    $hcbp = \App\Models\Hcbp::where('nik', Auth::user()->employee->nik)->count();
                @endphp

                @if ($user_atasan > 0 || auth()->user()->can('csp_access') ||
                auth()->user()->can('idp_period_access') ||
                auth()->user()->can('training_request_access')
                || $hcbp > 0)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-need-analysis*') ? 'active' : '' }}"
                           href="#learning-need-analysis" data-toggle="collapse" role="button"
                           aria-expanded="true" aria-controls="learning-need-analysis">
                           <i class="fas fa-chalkboard-teacher"></i>
                            <span class="nav-link-text">{{ __('Learning Need Analysis') }}</span>
                        </a>
                        <div class="collapse" id="learning-need-analysis">
                            <ul class="nav nav-sm flex-column">
                                @can('csp_access')
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-need-analysis/csp*') ? 'active' : '' }}"
                                        href="{{ route('learning-need-analysis.csp.index') }}">
                                            {{ __('CSP') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('idp_period_access')
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-need-analysis/idp-period*') ? 'active' : '' }}"
                                            href="{{ route('learning-need-analysis.idp-period.index') }}">
                                            {{ __('IDP Period') }}
                                        </a>
                                    </li>
                                @endcan
                                {{-- <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/user-needs*') ? 'active' : '' }}" href="/learning-design/learning-need-analysis/user-needs">
                                        {{ __('User Needs') }}
                                    </a>
                                </li> --}}

                                {{-- For atasan hcbp only --}}
                                @if ($user_atasan > 0)
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-need-analysis/idp*') ? 'active' : '' }}"
                                        href="{{ route('learning-need-analysis.idp.index') }}">
                                            {{ __('IDP') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-need-analysis/user-needs*') ? 'active' : '' }}"
                                            href="{{ route('learning-need-analysis.user-needs.index') }}">
                                            {{ __('User Needs') }}
                                        </a>
                                    </li>
                                @endif
                                @if (auth()->user()->can('training_request_access')  || $hcbp > 0)
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('learning-need-analysis/user-needs/request-training*') ? 'active' : '' }}"
                                            href="{{ route('learning-need-analysis.user-needs.request-training.index') }}">
                                            {{ __('Request Training') }}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                @endif

                @if (auth()->user()->can('curriculum_access')
                && auth()->user()->can('curriculum_approve'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('curriculum*') ? 'active' : '' }}" href="#curriculum" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="curriculum">
                            <i class="fas fa-book"></i>
                            <span class="nav-link-text">{{ __('Curriculum') }}</span>
                        </a>
                        <div class="collapse" id="curriculum">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('curriculum*') ? 'active' : '' }}" href="{{ route('curriculum.index') }}">
                                        {{ __('Curriculum Directory') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('curriculum/request-curriculum*') ? 'active' : '' }}" href="{{ route('curriculum.request-curriculum.index') }}">
                                        {{ __('Request Curriculum') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    @if (auth()->user()->can('curriculum_access'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('curriculum*') ? 'active' : '' }}" href="{{ route('curriculum.index') }}">
                            <i class="fas fa-pencil-ruler"></i> {{ __('Curriculum') }}
                        </a>
                        </li>
                    @endif

                    @if (auth()->user()->can('curriculum_approve'))
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('curriculum/request-curriculum*') ? 'active' : '' }}" href="{{ route('curriculum.request-curriculum.index') }}">
                                <i class="fas fa-pencil-ruler"></i> {{ __('Request Curriculum') }}
                            </a>
                        </li>
                    @endif
                @endif



                {{-- @if($user_atasan > 0 || )
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-need-analysis*') ? 'active' : '' }}"
                           href="#manage-learning-need-analysis" data-toggle="collapse" role="button"
                           aria-expanded="true" aria-controls="learning-design-learning-need-analysis">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-link-text">{{ __('Learning Need Analysis') }}</span>
                        </a>
                        <div class="collapse " id="manage-learning-need-analysis">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ route('learning-need-analysis.idp.index') }}">
                                        {{ __('IDP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/user-needs*') ? 'active' : '' }}" href="/learning-design/learning-need-analysis/user-needs">
                                        {{ __('User Needs') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif --}}


                @can('master_data_access')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('master-data*') ? 'active' : '' }}"
                           href="#collapse-master-data" data-toggle="collapse" role="button" aria-expanded="true"
                           aria-controls="collapse-master-data">
                            <i class="fas fa-cogs"></i>
                            <span class="nav-link-text">{{ __('Master Data') }}</span>
                        </a>
                        <div class="collapse " id="collapse-master-data">
                            <ul class="nav nav-sm flex-column">
                                @can('master_data_access')
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('master-data/levels*') ? 'active' : '' }}"
                                           href="{{ route('master-data.levels.index') }}">
                                            {{ __('Levels') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('master-data/statuses*') ? 'active' : '' }}"
                                           href="{{ route('master-data.statuses.index') }}">
                                            {{ __('Statuses') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('master-data/locations*') ? 'active' : '' }}"
                                           href="{{ route('master-data.locations.index') }}">
                                            {{ __('Locations') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('master-data/organization-units*') ? 'active' : '' }}"
                                           href="{{ route('master-data.organization-units.index') }}">
                                            {{ __('Organization Units') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endcan
                @if (auth()->user()->can('competency_access') || auth()->user()->can('vendor_access'))
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('setup-settings*') ? 'active' : '' }}"
                           href="#collapse-setup" data-toggle="collapse" role="button" aria-expanded="true"
                           aria-controls="collapse-setup">
                            <i class="fas fa-cogs"></i>
                            <span class="nav-link-text">{{ __('Setup & Settings') }}</span>
                        </a>
                        <div class="collapse " id="collapse-setup">
                            <ul class="nav nav-sm flex-column">
                                @can('competency_access')
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('setup-settings/competencies*') ? 'active' : '' }}"
                                           href="{{ route('setup-settings.competencies.index') }}">
                                            {{ __('Competencies') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('vendor_access')
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('setup-settings/vendors*') ? 'active' : '' }}"
                                           href="{{ route('setup-settings.vendors.index') }}">
                                            {{ __('Vendors') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                @endif

                {{-- I do not have Atasan Learning Design or a Learning Design role --}}

                {{-- @unlessrole('Atasan Learning Design|Learning Design')

                    @if ($users->count() > 0)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('learning-design/learning-need-analysis*') ? 'active' : '' }}"
                                href="{{ route('learning-design.learning-need-analysis.home.index') }}">
                                <i class="fas fa-chart-line"></i> {{ __('Learning Need Analysis') }}
                            </a>
                        </li>
                    @endif
                @endunlessrole --}}

                {{-- ATASAN LEARNING DESIGN --}}
                {{-- @role('Atasan Learning Design')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-syllabus*') ? 'active' : '' }}" href="#atasan-learning-design-learning-syllabus" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="atasan-learning-design-learning-syllabus">
                            <i class="fas fa-book"></i>
                            <span class="nav-link-text">{{ __('Learning Syllabus') }}</span>
                        </a>
                        <div class="collapse" id="atasan-learning-design-learning-syllabus">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-syllabus/job-families*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.learning-syllabus.job-families.index') }}">
                                        {{ __('Syllabus Directory') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-syllabus/request-syllabus*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.learning-syllabus.request-syllabus.index') }}">
                                        {{ __('Request Syllabus') }}

                                        <span class="badge badge-muted text-black ml-4">{{ $count }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-need-analysis*') ? 'active' : '' }}"
                            href="#learning-design-learning-need-analysis" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="learning-design-learning-need-analysis">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-link-text">{{ __('Learning Need Analysis') }}</span>
                        </a>
                        <div class="collapse " id="learning-design-learning-need-analysis">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('learning-design.learning-need-analysis.idp.index') }}">
                                        {{ __('IDP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/user-needs*') ? 'active' : '' }}" href="/learning-design/learning-need-analysis/user-needs">
                                        {{ __('User Needs') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole --}}

                {{-- @role('Learning Design')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-syllabus/job-families*') ? 'active' : '' }}"
                            href="{{ route('learning-design.learning-syllabus.job-families.index') }}">
                            <i class="fas fa-book"></i> {{ __('Learning Syllabus') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-need-analysis*') ? 'active' : '' }}"
                            href="#learning-design-learning-need-analysis" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="learning-design-learning-need-analysis">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-link-text">{{ __('Learning Need Analysis') }}</span>
                        </a>
                        <div class="collapse " id="learning-design-learning-need-analysis">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/csp*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.learning-need-analysis.csp.index') }}">
                                        {{ __('CSP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('learning-design.learning-need-analysis.idp.index') }}">
                                        {{ __('IDP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('learning-design.learning-need-analysis.idp-pool.index') }}">
                                        {{ __('IDP Pool') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/user-needs*') ? 'active' : '' }}" href="/learning-design/learning-need-analysis/user-needs">
                                        {{ __('User Needs') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole --}}

                {{-- I am either an Atasan Learning Design or a Learning Design or both! --}}

                {{-- @hasanyrole('Atasan Learning Design|Learning Design')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learning-design.kurikulum.index') }}">
                            <i class="fas fa-pencil-ruler"></i> {{ __('Learning Design') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-report">
                            <i class="fas fa-database"></i> {{ __('Data & Report') }}
                        </a>
                    </li>
                    @can('master_data_access')
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#collapse-master-data" data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="collapse-master-data">
                                <i class="fas fa-cogs"></i>
                                <span class="nav-link-text">{{ __('Master Data') }}</span>
                            </a>
                            <div class="collapse " id="collapse-master-data">
                                <ul class="nav nav-sm flex-column">
                                    @can('master_data_access')
                                        <li class="nav-item">
                                            <a class="nav-link "
                                                href="{{ route('master-data.levels.index') }}">
                                                {{ __('Levels') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('master-data.statuses.index') }}">
                                                {{ __('Statuses') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('master-data.locations.index') }}">
                                                {{ __('Locations') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('master-data.organization-units.index') }}">
                                                {{ __('Organization Units') }}
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan
                    @if (auth()->user()->can('competency_access') || auth()->user()->can('vendor_access'))
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('learning-design/setup-settings*') ? 'active' : '' }}"
                                href="#collapse-setup" data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="collapse-setup">
                                <i class="fas fa-cogs"></i>
                                <span class="nav-link-text">{{ __('Setup & Settings') }}</span>
                            </a>
                            <div class="collapse " id="collapse-setup">
                                <ul class="nav nav-sm flex-column">
                                    @can('competency_access')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('setup-settings.competencies.index') }}">
                                                {{ __('Competencies') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @can('vendor_access')
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('setup-settings.vendors.index') }}">
                                                {{ __('Vendors') }}
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endif
                @endhasanyrole --}}

                {{-- LEARNING DESIGN
                @role('Learning Design')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-syllabus/job-families*') ? 'active' : '' }}"
                            href="{{ route('learning-design.learning-syllabus.job-families.index') }}">
                            <i class="fas fa-book"></i> {{ __('Learning Syllabus') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/learning-need-analysis*') ? 'active' : '' }}"
                            href="#learning-design-learning-need-analysis" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="learning-design-learning-need-analysis">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-link-text">{{ __('Learning Need Analysis') }}</span>
                        </a>
                        <div class="collapse" id="learning-design-learning-need-analysis">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/csp*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.learning-need-analysis.csp.index') }}">
                                        {{ __('CSP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/idp*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.learning-need-analysis.idp.index') }}">
                                        {{ __('IDP') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/idp-pool*') ? 'active' : '' }}"
                                        href="/learning-design/learning-need-analysis/idp-pool">
                                        {{ __('IDP Pool') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/learning-need-analysis/user-needs*') ? 'active' : '' }}"
                                        href="/learning-design/learning-need-analysis/user-needs">
                                        {{ __('User Needs') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learning-design.kurikulum.index') }}">
                            <i class="fas fa-pencil-ruler"></i> {{ __('Learning Design') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-report">
                            <i class="fas fa-database"></i> {{ __('Data & Report') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#collapse-setup" data-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="collapse-setup">
                            <i class="fas fa-cogs"></i>
                            <span class="nav-link-text">{{ __('Master Data') }}</span>
                        </a>
                        <div class="collapse " id="collapse-setup">
                            <ul class="nav nav-sm flex-column">
                                @can('master_data_access')
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="{{ route('learning-design.master-data.levels.index') }}">
                                            {{ __('Levels') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('learning-design.master-data.statuses.index') }}">
                                            {{ __('Statuses') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('learning-design.master-data.locations.index') }}">
                                            {{ __('Locations') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('learning-design.master-data.units.index') }}">
                                            {{ __('Units') }}
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('learning-design/setup-settings*') ? 'active' : '' }}"
                            href="#collapse-master-data" data-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="collapse-master-data">
                            <i class="fas fa-cogs"></i>
                            <span class="nav-link-text">{{ __('Setup & Settings') }}</span>
                        </a>
                        <div class="collapse " id="collapse-master-data">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/setup-settings/master-data*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.setup-settings.master-data.index') }}">
                                        {{ __('Master Data') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/setup-settings/competencies*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.setup-settings.competencies.index') }}">
                                        {{ __('Competencies') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('learning-design/setup-settings/vendors*') ? 'active' : '' }}"
                                        href="{{ route('learning-design.setup-settings.vendors.index') }}">
                                        {{ __('Vendors') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole --}}


                {{-- LEARNING OPERATION --}}
                @role('Learning Operation')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learning-operation.delivery-plan.index') }}">
                            <i class="fas fa-calendar-alt"></i> {{ __('Delivery Plan') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learning-operation.enrollment.index') }}">
                            <i class="fas fa-ruler"></i> {{ __('Enrollment') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('learning-operation.content-management.index') }}">
                            <i class="fas fa-video"></i> {{ __('Content Management') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/data-report">
                            <i class="fas fa-database"></i> {{ __('Data & Report') }}
                        </a>
                    </li>
                @endrole

                {{-- KARYAWAN --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('idp.index') }}">
                        <i class="fas fa-id-card-alt"></i> {{ __('My IDP') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my-course.index') }}">
                        <i class="fas fa-book"></i> {{ __('My Course') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan/learning-plan">
                        <i class="fas fa-calendar-alt"></i> {{ __('Learning Plan') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-star"></i> {{ __('Certificate') }}
                    </a>
                </li>
            </ul>
            @include('layouts.footers.auth')
        </div>
    </div>
</nav>
