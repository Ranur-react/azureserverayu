<!-- Top navbar -->
{{-- @role('Karyawan')
<nav class="navbar navbar-top navbar-expand-md" id="navbar-main">
@else --}}
<nav class="navbar navbar-top navbar-expand-md shadow" id="navbar-main">
    {{-- @endrole --}}
    <div class="container-fluid">
        <!-- Brand -->
        <div class="d-none d-md-block">
            @if ($pagedirectory)
                <div aria-label="breadcrumb">
                    <ol class=" breadcrumb mb-0 text-sm bg-transparent">
                        @foreach ($pagedirectory as $page => $url)
                            @if ($url)
                                <li class="breadcrumb-item"><a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @else
                                <li class="breadcrumb-item">{{ $page }}</li>
                            @endif
                        @endforeach
                    </ol>
                </div>
            @else
                @role('Karyawan')
                    <h4 class="mb-0 text-uppercase d-none d-lg-inline-block">Hi {{ auth()->user()->name }}</h4>
                @else
                    <h4 class="mb-0 text-uppercase d-none d-lg-inline-block">{{ $pagename }}</h4>
                @endrole
            @endif
        </div>
        @role('Karyawan')
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative" style="border-color: #ebeced;">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
        @endrole
        @php
             $notifications = auth()
            ->user()
            ->unreadNotifications()
            ->latest()
            ->simplePaginate(3);

            $notifications_count = auth()->user()->unreadNotifications()->count();
        @endphp
        <div class="d-flex align-items-center">
            <ul class="navbar-nav align-items-center d-none d-md-flex pr-2">
                <li class="nav-item dropdown ">
                    <a class="nav-link p-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="btn badge badge-md badge-circle badge-muted mr-0"><i
                                class="ni ni-bell-55"></i></span>
                        <span class="notification-badge text-xxs text-white">{{ $notifications_count }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0">
                        <!-- Dropdown header -->
                        <div class="px-3 py-3">
                            <h6 class="text-sm text-muted m-0">You have <strong
                                    class="text-primary">{{ $notifications_count }}</strong> notifications.</h6>
                        </div>
                        @if ($notifications_count == 0)
                            <p class="text-center mt-2 text-sm font-weight-normal">
                                No Notification
                            </p>
                        @endif

                        {{-- Enrollment Notificaiton
                        <div class="list-group list-group-flush">
                            @if ($notifications->count() > 0)
                                <div id="posts" style="height: 200px;  overflow-x: hidden; overflow-y: scroll;">
                                    @foreach ($notifications as $notification)
                                        <div class="row align-items-center overflow-auto">
                                            <div class="col ml-3 mr-4 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    @if ($notification->type == 'App\Notifications\EnrollmentClass')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Anda telah di-enroll pada kelas
                                                                {{ \App\Models\TrainingClass::where(['id' => $notification->data['class_id']])->pluck('name')->first() }}
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    @if ($notification->type == 'App\Notifications\EnrollmentElearning')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Anda telah di-enroll pada
                                                                E-Learning
                                                                {{ \App\Models\Elearning::where(['id' => $notification->data['elearning_id']])->pluck('name')->first() }}
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    <div class="text-right text-muted">
                                                        <form action="{{ route('markNotification') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $notification->id }}">
                                                            <a href="#" class="text-xs"
                                                                onclick="this.closest('form').submit();return false;">
                                                                Mark as read
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-right text-muted">
                                                        <small>{{ $notification->created_at }}</small>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if ($notifications->count() > 0)
                                <div class="d-flex justify-content-center p-2">
                                    <form action="{{ route('markNotification') }}" method="post">
                                        @csrf
                                        <a href="#" onclick="this.closest('form').submit();return false;">
                                            Mark all as read
                                        </a>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center p-2">
                                    <button class="see-more btn btn-primary btn-block" data-page="2"
                                        data-link="{{ url()->current() }}?page=" data-div="#posts">See more</button>
                                </div>
                            @endif
                        </div> --}}
                        
                        <div class="list-group list-group-flush">
                            @if ($notifications_count > 0)
                                <div id="posts" style="height: 200px;  overflow-x: hidden; overflow-y: scroll;">
                                    @foreach ($notifications as $notification)
                                        <div class="row align-items-center overflow-auto">
                                            <div class="col ml-3 mr-4 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    @if ($notification->type == 'App\Notifications\CurriculumCreate')
                                                        @php
                                                            $curriculum = \App\Models\Curriculum::where(['id' => $notification->data['curriculum_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($curriculum)
                                                                    Curriculum
                                                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d', $curriculum['start_date'])->format('Y') }}
                                                                    waiting to be confirmed
                                                                @else   
                                                                    Curriculum may be deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    @if ($notification->type == 'App\Notifications\SyllabusCreate')
                                                        @php
                                                            $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($syllabus)
                                                                    Syllabus
                                                                    {{ $syllabus->training_name }}
                                                                    waiting to be confirmed
                                                                @else   
                                                                    Syllabus may be deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    @if ($notification->type == 'App\Notifications\SyllabusApprove')
                                                        @php
                                                            $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($syllabus)
                                                                Syllabus
                                                                {{ $syllabus->training_name }}
                                                                has been approved
                                                                @else
                                                                    Syllabus may be deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\SyllabusReject')
                                                        @php
                                                            $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($syllabus)
                                                                Syllabus
                                                                {{ $syllabus->training_name }}
                                                                has been rejected
                                                                @else
                                                                Syllabus may be deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\UserNeedsHcbpProcess')
                                                        @php
                                                            $user_need = \App\Models\UserNeed::where(['id' => $notification->data['user_need_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($user_need)
                                                                Request training
                                                                {{ $user_need->name_of_program }}
                                                                waiting to be confirmed
                                                                @else
                                                                    Request training deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\UserNeedsHcbpApprove')
                                                        @php
                                                            $user_need = \App\Models\UserNeed::where(['id' => $notification->data['user_need_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($user_need)
                                                                Request training
                                                                {{ $user_need->name_of_program }}
                                                                has been approved by HCBP
                                                                @else
                                                                    Request training deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\UserNeedsHcbpReject')
                                                        @php
                                                            $user_need = \App\Models\UserNeed::where(['id' => $notification->data['user_need_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($user_need)
                                                                Request training
                                                                {{ $user_need->name_of_program }}
                                                                has been rejected by HCBP
                                                                @else
                                                                    Request training deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\UserNeedsLearningDesignApprove')
                                                        @php
                                                            $user_need = \App\Models\UserNeed::where(['id' => $notification->data['user_need_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($user_need)
                                                                Request training
                                                                {{ $user_need->name_of_program }}
                                                                has been approved by Learning Architect
                                                                @else
                                                                    Request training deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\UserNeedsLearningDesignReject')
                                                        @php
                                                            $user_need = \App\Models\UserNeed::where(['id' => $notification->data['user_need_id']])->first();
                                                        @endphp
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @if ($user_need)
                                                                Request training
                                                                {{ $user_need->name_of_program }}
                                                                has been rejected by Learning Architect
                                                                @else
                                                                    Request training deleted in progress
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\LDRequestSyllabusApprove')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Request Syllabus
                                                                {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                sudah di-approve oleh Learning Design
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    @if ($notification->type == 'App\Notifications\ALDRequestSyllabusApprove')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Request Syllabus
                                                                {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                sudah di-approve oleh Atasan Learning Design
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\LDRequestSyllabusReject')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Request Syllabus
                                                                {{ \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                ditolak oleh Learning Design
                                                            </h4>
                                                        </div>
                                                    @endif

                                                    @if ($notification->type == 'App\Notifications\ALDRequestSyllabusReject')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">Request Syllabus
                                                                {{ \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                ditolak oleh Atasan Learning Design
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    @if ($notification->type == 'App\Notifications\IDPCreate')
                                                        <div>
                                                            <h4 class="mb-0 text-sm">
                                                                @php
                                                                    $idp =  \App\Models\IDP::with('idpPeriod')->where(['id' => $notification->data['idp_id']])->first()
                                                                @endphp
                                                                @if ($idp)
                                                                    Individual Development Plan
                                                                    {{ $idp->idpPeriod->name ?? ''  }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idp->idpPeriod['start_date'])->format('Y') }}
                                                                    has been added
                                                                @else  
                                                                    Your Individual Development Plan has been deleted
                                                                @endif
                                                            </h4>
                                                        </div>
                                                    @endif
                                                    <div class="text-right text-muted">
                                                        <form action="{{ route('markNotification') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $notification->id }}">
                                                            <a href="#" class="text-xs"
                                                                onclick="this.closest('form').submit();return false;">
                                                                Mark as read
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-right text-muted">
                                                        <small> {{ \Carbon\Carbon::parse($notification->created_at)->format('d F Y H:i:s') }}</small>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if ($notifications_count > 0)
                                <div class="d-flex justify-content-center p-2">
                                    <form action="{{ route('markNotification') }}" method="post">
                                        @csrf
                                        <a href="#" onclick="this.closest('form').submit();return false;">
                                            Mark all as read
                                        </a>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center p-2">
                                    <button class="see-more btn btn-primary btn-block" data-page="2"
                                        data-link="{{ url()->current() }}?page=" data-div="#posts">See more</button>
                                </div>
                            @endif
                        </div>

                        {{-- Atasan Karyawan
                        @unlessrole('Atasan Learning Design|Learning Design')
                        <div class="list-group list-group-flush">
                            @if ($notifications_count > 0)
                                <div id="posts" style="height: 200px;  overflow-x: hidden; overflow-y: scroll;">
                                    @foreach ($notifications as $notification)
                                        <div class="row align-items-center overflow-auto">
                                            <div class="col ml-3 mr-4 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                        @if ($notification->type == 'App\Notifications\LDRequestSyllabusApprove')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    sudah di-approve oleh Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\ALDRequestSyllabusApprove')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    sudah di-approve oleh Atasan Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\LDRequestSyllabusReject')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])
                                                                    ->value('training_name') }}
                                                                    ditolak oleh Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        @if ($notification->type == 'App\Notifications\ALDRequestSyllabusReject')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    ditolak oleh Atasan Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\IDPCreate')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Individual Development Plan
                                                                    @php
                                                                        $idp =  \App\Models\IDP::with('idpPeriod')->where(['id' => $notification->data['idp_id']])->first()
                                                                    @endphp
                                                                     @if ($idp)
                                                                     Individual Development Plan
                                                                     {{ $idp->idpPeriod->name ?? ''  }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idp->idpPeriod['start_date'])->format('Y') }}
                                                                     telah ditambahkan 
                                                                    @else
                                                                        Individual Development Plan anda telah dihapus
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        <div class="text-right text-muted">
                                                            <form action="{{ route('markNotification') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $notification->id }}">
                                                                <a href="#" class="text-xs"
                                                                    onclick="this.closest('form').submit();return false;">
                                                                    Mark as read
                                                                </a>
                                                            </form>
                                                        </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-right text-muted">
                                                        <small> {{ \Carbon\Carbon::parse($notification->created_at)->format('d F Y H:i:s') }}</small>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            @if ($notifications_count > 0)
                                <div class="d-flex justify-content-center p-2">
                                    <form action="{{ route('markNotification') }}" method="post">
                                        @csrf
                                        <a href="#" onclick="this.closest('form').submit();return false;">
                                            Mark all as read
                                        </a>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center p-2">
                                    <button class="see-more btn btn-primary btn-block" data-page="2"
                                        data-link="{{ url()->current() }}?page=" data-div="#posts">See more</button>
                                </div>
                            @endif
                        </div>
                        @endunlessrole
                        
                        @role('Atasan Learning Design')
                            <div class="list-group list-group-flush">
                                @if ($notifications_count > 0)
                                    <div id="posts" style="height: 200px;  overflow-x: hidden; overflow-y: scroll;">
                                        @foreach ($notifications as $notification)
                                            <div class="row align-items-center overflow-auto">
                                                <div class="col ml-3 mr-4 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        @if ($notification->type == 'App\Notifications\SyllabusCreate')
                                                            @php
                                                                $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                            @endphp
                                                            <div>
                                                                <h4 class="mb-0 text-sm">
                                                                    @if ($syllabus)
                                                                        Syllabus
                                                                        {{ $syllabus->training_name }}
                                                                        waiting to be confirmed
                                                                    @else   
                                                                        The syllabus may be deleted before the confirmation process
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\LDRequestSyllabusApprove')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    sudah di-approve oleh Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\ALDRequestSyllabusApprove')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\RequestSyllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    sudah di-approve oleh Atasan Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        @if ($notification->type == 'App\Notifications\LDRequestSyllabusReject')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    ditolak oleh Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        @if ($notification->type == 'App\Notifications\ALDRequestSyllabusReject')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Request Syllabus
                                                                    {{ \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->value('training_name') }}
                                                                    ditolak oleh Atasan Learning Design
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        @if ($notification->type == 'App\Notifications\IDPCreate')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">Individual Development Plan
                                                                    @php
                                                                        $idp =  \App\Models\IDP::with('idpPeriod')->where(['id' => $notification->data['idp_id']])->first()
                                                                    @endphp
                                                                    @if ($idp)
                                                                        Individual Development Plan
                                                                        {{ $idp->idpPeriod->name ?? ''  }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idp->idpPeriod['start_date'])->format('Y') }}
                                                                        has been added
                                                                    @else  
                                                                        Your Individual Development Plan has been deleted
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif
                                                        <div class="text-right text-muted">
                                                            <form action="{{ route('markNotification') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $notification->id }}">
                                                                <a href="#" class="text-xs"
                                                                    onclick="this.closest('form').submit();return false;">
                                                                    Mark as read
                                                                </a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="text-right text-muted">
                                                            <small> {{ \Carbon\Carbon::parse($notification->created_at)->format('d F Y H:i:s') }}</small>
                                                        </div>
                                                        <div class="text-right text-muted">
                                                            <small>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if ($notifications_count > 0)
                                    <div class="d-flex justify-content-center p-2">
                                        <form action="{{ route('markNotification') }}" method="post">
                                            @csrf
                                            <a href="#" onclick="this.closest('form').submit();return false;">
                                                Mark all as read
                                            </a>
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-center p-2">
                                        <button class="see-more btn btn-primary btn-block" data-page="2"
                                            data-link="{{ url()->current() }}?page=" data-div="#posts">See more</button>
                                    </div>
                                @endif
                            </div>
                        @endrole
                        @role('Learning Design')
                            <div class="list-group list-group-flush">
                                @if ($notifications_count > 0)
                                    <div id="posts" style="height: 200px;  overflow-x: hidden; overflow-y: scroll;">
                                        @foreach ($notifications as $notification)
                                            <div class="row align-items-center">
                                                <div class="col ml-3 mr-4 mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        @if ($notification->type == 'App\Notifications\SyllabusApprove')
                                                            @php
                                                                $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                            @endphp
                                                            <div>
                                                                <h4 class="mb-0 text-sm">
                                                                    @if ($syllabus)
                                                                    Syllabus
                                                                    {{ $syllabus->training_name }}
                                                                    has been approved
                                                                    @else
                                                                        Syllabus may be deleted after confirmation process
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        @if ($notification->type == 'App\Notifications\SyllabusReject')
                                                            @php
                                                                $syllabus = \App\Models\Syllabus::where(['id' => $notification->data['syllabus_id']])->first();
                                                            @endphp
                                                            <div>
                                                                <h4 class="mb-0 text-sm">
                                                                    @if ($syllabus)
                                                                    Syllabus
                                                                    {{ $syllabus->training_name }}
                                                                    has been rejected
                                                                    @else
                                                                    Syllabus may be deleted after confirmation process
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        @if ($notification->type == 'App\Notifications\IDPCreate')
                                                            <div>
                                                                <h4 class="mb-0 text-sm">
                                                                    @php
                                                                        $idp =  \App\Models\IDP::with('idpPeriod')->where(['id' => $notification->data['idp_id']])->first()
                                                                    @endphp
                                                                    @if ($idp)
                                                                        Individual Development Plan
                                                                        {{ $idp->idpPeriod->name ?? ''  }} - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $idp->idpPeriod['start_date'])->format('Y') }}
                                                                        has been added 
                                                                    @else
                                                                        Your Individual Development Plan has been deleted
                                                                    @endif
                                                                </h4>
                                                            </div>
                                                        @endif

                                                        <div>
                                                            <form
                                                                action="{{ route('markNotification', $notification->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $notification->id }}">
                                                                <a href="#" class="text-xs"
                                                                    onclick="this.closest('form').submit();return false;">
                                                                    Mark as read
                                                                </a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <div class="text-right text-muted">
                                                            <small> {{ \Carbon\Carbon::parse($notification->created_at)->format('d F Y H:i:s') }}</small>
                                                        </div>
                                                        <div class="text-right text-muted">
                                                            <small>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notification->created_at))->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                                @if ($notifications_count > 0)
                                    <div class="d-flex justify-content-center p-2">
                                        <form action="{{ route('markNotification') }}" method="post">
                                            @csrf
                                            <a href="#" class="text-sm"
                                                onclick="this.closest('form').submit();return false;">
                                                Mark all as read
                                            </a>
                                        </form>
                                    </div>
                                    <div class="d-flex justify-content-center p-2">
                                        <button class="see-more btn btn-primary btn-block" data-page="2"
                                            data-link="{{ url()->current() }}?page=" data-div="#posts">See more</button>
                                    </div>
                                @endif
                            </div>
                        @endrole --}}
                    </div>
                </li>
            </ul>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder"
                                    src="https://ui-avatars.com/api/?name={{ auth()->user()->employee->name }}">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->employee->name }}</span>
                            </div>
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
        </div>
    </div>
</nav>
@push('js')
    <script>
        $(".see-more").click(function() {
            event.stopPropagation();
            $div = $($(this).data('div')); //div to append
            $link = $(this).data('link'); //current URL

            $page = $(this).data('page'); //get the next page #
            $href = $link + $page; //complete URL
            $.get($href, function(response) { //append data
                $html = $(response).find("#posts").html();
                $div.append($html);
            });

            $(this).data('page', (parseInt($page) + 1)); //update page #
        });
    </script>
@endpush
