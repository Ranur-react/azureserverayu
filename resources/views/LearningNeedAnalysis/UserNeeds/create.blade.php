@extends('layouts.app', ['pagedirectory' => [
'User Needs' =>'/learning-need-analysis/user-needs',
'Create' => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabMenu" role="tabMenu">
                        @if (old('tab') == 'tabs-icons-text-2')
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true"><i class="fas fa-mouse-pointer mr-2"></i>Choose Syllabus</a>
                            </li>
                        @elseif (old('tab') == 'tabs-icons-text-3')
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true"><i class="fas fa-mouse-pointer mr-2"></i>Choose Syllabus</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true"><i class="fas fa-mouse-pointer mr-2"></i>Choose Syllabus</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="fas fa-list-alt mr-2"></i>Verification Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                aria-selected="false"><i class="fas fa-users mr-2"></i>Targeted Participant</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-default alert-dismissible fade show mb-5" role="alert">
                        <span class="alert-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="alert-text">
                            <strong>Whoops, </strong>there is some error!!
                        </span>
                        @foreach ($errors->all() as $error)
                            <div class="ml-5 mt-2"><li>{{$error}}</li></div>
                         @endforeach

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @enderror
                <div class="card shadow-lg">
                    <form method="POST" id="formUserNeeds" 
                    enctype="multipart/form-data"
                    action="{{ route('learning-need-analysis.user-needs.store') }}">
                            {{ csrf_field() }}
                        <div class="tab-content" id="myTabContent">
                            @if (old('tab') == 'tabs-icons-text-2')
                                <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @elseif (old('tab') == 'tabs-icons-text-3')
                                <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @else
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                aria-labelledby="tabs-icons-text-1-tab">
                            @endif
                            
                                <!-- Card header -->
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">User Needs - List Training Syllabus</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                            <button type="button"
                                                class="btn btn-sm bg-yellow icon icon-shape text-white rounded-circle shadow-lg"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-info-circle"></i>
                                                {{-- <span class="cart-badge">{{ $cart_user_need->count() }}</span> --}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="table-responsive p-4">
                                    <table class="table align-items-center table-flush w-100" id="example" >
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">Daftar Training</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade {{ old('tab') == 'tabs-icons-text-2' ? 'show active' : null }}" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="mb-0">Verfication Form</h3>
                                    </div>
                                </div>
                               
                                    <div class="card-body">
                                        <div class="px-lg-4 mb-5">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-name-of-program">Name Of Program 
                                                            </label>
                                                        <input type="text" name="name_of_program" id="input-name-of-program"
                                                            value="{{ old('name_of_program') }}"
                                                            class="form-control {{ $errors->has('name_of_program') ? ' is-invalid' : '' }}" required>
                                                        @error('name_of_program')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-objective-program">Objective Program 
                                                            </label>
                                                        <input type="text" name="objective_program" id="input-objective-program"
                                                            value="{{ old('objective_program') }}"
                                                            class="form-control {{ $errors->has('objective_program') ? ' is-invalid' : '' }}" required>
                                                        @error('objective_program')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="textarea-training-background">Training Background 
                                                            </label>
                                                        <textarea name="training_background" id="textarea-training-background" class="form-control bg-white cursor-not-allowed" rows="10" disabled>{{ $training_background }}</textarea>
                                                        @error('training_background')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="textarea-training-urgency">Training Urgency 
                                                           </label>
                                                        <textarea name="training_urgency" id="textarea-training-urgency" class="form-control {{ $errors->has('training_urgency') ? ' is-invalid' : '' }}" rows="10" required>{{ old('training_urgency') }}</textarea>
                                                        @error('training_urgency')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
            
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-competency-gap">
                                                            Competency Gap </label>
                                                        <input type="text" name="competency_gap" id="input-competency-gap"
                                                            value="{{ $string_name }}"
                                                            class="form-control form-control-custom bg-white cursor-not-allowed" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="textarea-future-plan-after-training">
                                                            Future plans after training 
                                                           </label>
                                                        <textarea name="future_plans_after_training" id="textarea-future-plan-after-training" class="form-control {{ $errors->has('future_plans_after_training') ? ' is-invalid' : '' }}" rows="10" required>{{ old('training_urgency') }}</textarea>
                                                        @error('future_plans_after_training')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-content">Content</label>
                                                            <textarea style="display: none" id="content" name="content">{!! old('content') !!}</textarea>
                                                            <div id="editor-container">{!! old('content') !!}</div>
                                                        @error('content')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
    
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class="d-flex mb-4">
                                                            <div class="mr-auto p-2">
                                                            <label class="form-control-label" for="select-partner-recommendation">Partner
                                                                Recommendation</label>
                                                            </div>
                                                            <div class="p-2">
                                                                <button type="button" id="deselectAll-partner-recommendation" class="btn btn-outline-primary btn-sm">Remove partner recommendation</button>
                                                            </div>
                                                        </div>        
                                                        <select name="partner_recommendation" id="select-partner-recommendation" class="form-control {{ $errors->has('partner_recommendation') ? ' is-invalid' : '' }}" required>
                                                              
                                                        </select>
                                                        @error('partner_recommendation')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-trainer">
                                                            Trainer /
                                                            Content
                                                            Delivery
                                                       </label>
                                                        <input type="text" name="trainer" id="input-trainer"
                                                            value="{{ old('trainer') }}"
                                                            class="form-control {{ $errors->has('trainer') ? ' is-invalid' : '' }}" required>
                                                        @error('trainer')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-specialities-trainer" required>Specialities
                                                            Trainer
                                                        </label>
                                                        <input type="text" name="specialities_trainer" id="input-specialities-trainer"
                                                            value="{{ old('specialities_trainer') }}"
                                                            class="form-control {{ $errors->has('specialities_trainer') ? ' is-invalid' : '' }}">
                                                        @error('specialities_trainer')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-method">Method
                                                        </label>
                                                        <input type="text" name="method" id="input-specialities-trainer"
                                                            value="{{ old('method') }}"
                                                            class="form-control {{ $errors->has('method') ? ' is-invalid' : '' }}" required>
                                                        @error('method')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-date">Date
                                                        </label>
                                                            <input class="form-control bg-white" id="input-date" name="date" value="{{ old('date') }}" placeholder="Select date"
                                                            type="text" autocomplete=”off” required>
                                                        @error('date')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-start-time">Start Time
                                                       </label>
                                                            <input class="form-control bg-white" id="input-start-time" name="start_time" value="{{ old('start_time') }}" placeholder="Select start time"
                                                            type="text" autocomplete=”off” required> 
                                                        @error('start_time')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group mb-3">
                                                        <label class="form-control-label" for="input-date">End Time</label>
                                                            <input class="form-control bg-white" id="input-end-time" name="end_time" value="{{ old('end_time') }}" placeholder="Select end time"
                                                            type="text" autocomplete=”off” required>
                                                        @error('end_time')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
    
                            <div class="tab-pane fade {{ old('tab') == 'tabs-icons-text-3' ? 'show active' : null }}" id="tabs-icons-text-3" role="tabpanel"
                            aria-labelledby="tabs-icons-text-3-tab">
                                <div class="card-body">
                                    <div class="px-lg-4 mb-5">
                                        <p class="lead">
                                            Choose how to add employees
                                          </p>
                                          <label class="target-participant-label">
                                            <input type="radio" name="target_participants" value="1" class="card-input-element d-none" id="importExcel" required>
                                                <div class="card card-body  d-flex flex-row justify-content-between align-items-center" style="background-color:#f6f9fc;">
                                                Using Excel
                                                </div>
                                          </label>
                                          <label class="target-participant-label mt-3">
                                            <input type="radio" name="target_participants" value="0" class="card-input-element d-none" id="employeeSearch" required>
                                            <div class="card card-body d-flex flex-row justify-content-between align-items-center" style="background-color:#f6f9fc;">
                                                Using Search Employee
                                            </div>
                                          </label>

                                        <div id="showDivImportExcel" style="display: none">
                                            <div class="form-group mt-5">
                                                <label class="form-control-label" for="input-import-file">Excel Format</label>
                                                <br>
                                                <a href="{{ route('learning-need-analysis.user-needs.downloadFormat') }}">Click here to download excel format</a>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-control-label" for="input-import-file">Choose Excel File</label>
                                                <input type="file" name="import_file" value="{{ old('import_file') }}" id="input-import-file" class="form-control">
                                            </div>
                                            @error('import_file')
                                            <span class="invalid-feedback" style="display: block;"
                                                role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div id="showDivEmployeeSearch" style="display: none">
                                            <div class="d-flex justify-content-start mt-5">
                                                <h3 class="mb-4">List Employee</h3>
                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive mb-4">
                                                <table class="table align-items-center table-flush w-100" id="employees_table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th></th>
                                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                                            <th scope="col" class="sort" data-sort="title">Title</th>
                                                            <th scope="col" class="sort" data-sort="division">Division</th>
                                                            <th scope="col" class="sort" data-sort="grp">GRP</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    </tbody>
                                                    <tfoot>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control filter-input"
                                                                placeholder="Search for employee name..." data-column="1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control filter-input"
                                                                placeholder="Search for employee title..." data-column="2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control filter-input"
                                                                placeholder="Search for employee division..." data-column="3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control filter-input"
                                                                placeholder="Search for employee grp..." data-column="4" />
                                                        </td>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            @error('employees')
                                                            <span class="invalid-feedback" style="display: block;"
                                                                role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="px-lg-4">
                                        <div class="text-center">
                                            @if ($cart_user_need->count() > 0)
                                                <button type="submit" id="buttonSubmit"
                                                class="btn btn-success mt-4 btn-lg btn-block">Submit</button>
                                            @else
                                            <button type="button" class="btn btn-success mt-4 btn-lg btn-block" data-container="body" 
                                            data-toggle="popover" data-placement="top" 
                                            data-content="Your syllabus is empty, please choose first.">
                                                Submit
                                            </button>                                              
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Needs Syllabus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-1">
                    <ol class="pl-0" >
                        @forelse ( $cart_user_need as $row )
                            <li class="list-group-item border-top mb-3 bg-secondary" data-id="{{ $row->id }}">
                                <div class="row mt-2 p-2">
                                    <div class="col">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="mb-0">{{ $row->name }}</h4>
                                            <form method="POST"
                                                action="{{ route('learning-need-analysis.carts-user-needs.destroy', $row->rowId) }}"
                                                class="mb-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn badge badge-circle badge-circle-custom badge-danger"><i
                                                        class="fas fa-minus text-xxs"></i></button>
                                            </form>
                                        </div>
                                        <p class="text-xxs text-muted font-weight-normal mb-1">
                                            {{ \App\Models\Syllabus::where(['id' => $row->id])->value('syllabus_code') }}
                                            {{-- {{ $row->model->syllabus_code ?? '' }} --}}
                                        </p>
                                        <p class="text-xs mb-0">
                                            {{ \App\Models\Syllabus::where(['id' => $row->id])->value('training_summary') }}
                                            {{-- {{ $row->model->training_summary ?? '' }} --}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @empty
                        <div class="row justify-content-center mt-1">
                            <img src="https://img.icons8.com/dotty/80/000000/syllabus.png"/>                        </div>       
                        <div class="row justify-content-center mt-2 ml-2">
                            <p class="text-lg">Syllabus is empty.</p>
                        </div>                        
                        @endforelse 
                    </ol>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Syllabus Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $('#buttonSubmit').click(function () {
            $(':required:invalid', '#formUserNeeds').each(function () {
                var id = $('.tab-pane').find(':required:invalid').closest('.tab-pane').attr('id');

                $('.nav a[href="#' + id + '"]').tab('show');
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
          $("input[name='target_participants']").click(function() {
            if ($("#importExcel").is(":checked")) {
              $("#showDivEmployeeSearch").hide();
              $("#showDivImportExcel").show();
            }else if($("#employeeSearch").is(":checked")) {
              $("#showDivImportExcel").hide();
              $("#showDivEmployeeSearch").show();
            } else {
                $("#showDivImportExcel").hide();
                $("#showDivEmployeeSearch").hide();
            }
          });
        });
      </script>

    <script>
        //redirect to specific tab
        $(document).ready(function () {
            $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
        });
    </script>
    
    <script>
        // The DOM element you wish to replace with Tagify
        var inputCompetencyGap = document.querySelector('input[name=competency_gap]');

        tagify = new Tagify(inputCompetencyGap);
    </script>
    <script>
        flatpickr("#input-date", {
            altInput: true,
            allowInput:true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>
    <script>
        var start_time = flatpickr("#input-start-time", {
            allowInput:true,
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                end_time.set('minDate', dateStr)
            }
        });
    </script>
    <script>
        var end_time = flatpickr("#input-end-time", {
            allowInput:true,
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                start_time.set('maxDate', dateStr)
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var table =  $('#employees_table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": ({
                    url: "{{ route('learning-need-analysis.user-needs.getAjaxEmployees') }}",
                }),
                "columns": [
                    { data: 'nik', name: 'nik'}, 
                    { data: 'name', name: 'name'}, 
                    { data: 'title', name: 'title'}, 
                    { data: 'division', name: 'division'}, 
                    { data: 'bgroup', name: 'bgroup'}, 
                ],'columnDefs': [
                    {
                        'targets': 0,
                        'checkboxes': {
                            'selectRow': true
                        }
                    }
                ],
                'select': {
                    'style': 'multi',
                },
            });

            $('.filter-input').keyup(function() {
                table.column($(this).data('column'))
                .search($(this).val())
                .draw();
            });

            // Handle form submission event
            $('#formUserNeeds').on('submit', function(e){
                var form = this;
                var rows_selected = table.column(0).checkboxes.selected();

                // Iterate over all selected checkboxes
                $.each(rows_selected, function(index, rowId){
                    // Create a hidden element
                    $(form).append(
                        $('<input>')
                            .attr('type', 'hidden')
                            .attr('name', 'employees[]')
                            .val(rowId)
                    );
                });
             });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                "pagingType": "numbers",
                "ajax": ({
                    url: "{{ route('learning-need-analysis.user-needs.getAjaxSyllabus') }}",
                }),
                "columns": [
                    { data: 'competencies', name: 'prf_competency_catalog.name'}, 
                    { data: 'syllabuses', name: 'syllabuses.training_name', searchable: true, sortable : true, visible:false },
                ]
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('#select-partner-recommendation').select2({
                closeOnSelect: false,
                allowClear: true,
                ajax: {
                    url: "{{ route('learning-need-analysis.user-needs.getSelect2VendorsAjax') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        };
                    },
                    cache: true
                },
            });

            $("#deselectAll-partner-recommendation").click(function() {
                $("#select-partner-recommendation").val('').change();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#formCart").submit(function() {
                $(this).submit(function() {
                    return false;
                });
                return true;
            });
        });
    </script>

    <script>
        $("body").on("click", "a.modal-global", function(e) {
            event.preventDefault();

            var url = $(this).attr('href');

            $("#exampleModalLong").modal('show');

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'json',
            }).done(function(response) {
                var competencies_section = ``
                var vendors_section = ``
                var levels_section = ``
                var statuses_section = ``
                var locations_section = ``
                var units_section = ``

                for (let index = 0; index < response['competencies'].length; index++) {
                    const competency = response['competencies'][index];
                    competencies_section +=
                        `<span class="badge badge-pill badge-muted mb-1 mr-1">` + competency['name'] +
                        `</span>`
                }
                for (let index = 0; index < response['vendors'].length; index++) {
                    const vendor = response['vendors'][index];
                    vendors_section += `
                    <li>
                        <p class="text-sm font-weight-normal mb-0">
                            ` + vendor['partner_name'] + `
                        </p>
                    </li>
                `
                }
                for (let index = 0; index < response['levels'].length; index++) {
                    const level = response['levels'][index];
                    levels_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + level['name'] + `</span>
                `
                }
                for (let index = 0; index < response['statuses'].length; index++) {
                    const status = response['statuses'][index];
                    statuses_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + status['name'] + `</span>
                `
                }
                for (let index = 0; index < response['locations'].length; index++) {
                    const location = response['locations'][index];
                    locations_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + location['location_code'] + `</span>
                `
                }
                for (let index = 0; index < response['units'].length; index++) {
                    const unit = response['units'][index];
                    units_section += `
                    <span class="badge badge-pill badge-muted mb-1 mr-1">` + unit['name'] + `</span>
                `
                }
                // console.log(response[0].description)
                $("#exampleModalLong").find('.modal-body').html(`
            <div>
                <div class="mb-4">
                    <h3 class="text-lg">` + response['syllabus']['training_name'] + `</h3>
                    <p class="text-xs font-weight-normal text-muted mb-2">
                        ` + response['syllabus']['syllabus_code'] + `</p>
                    <p class="text-sm mb-0 font-weight-normal">` + response['syllabus']['training_summary'] + `</p>
                </div>

                <div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Skills Will You Gain
                        </h4>
                        <div class="border p-3">
                            <div>
                                ` + competencies_section + `
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Who is This Course For
                        </h4>
                        <div class="row mt-2">
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <i class="ni ni-check-bold text-success mt-1"></i>
                                    <div class="ml-2">
                                        <h4 class="mb-1">Level</h4>
                                        ` + levels_section + `
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <i class="ni ni-check-bold text-success mt-1"></i>
                                    <div class="ml-2">
                                        <h4 class="mb-1">Status</h4>
                                        ` + statuses_section + `
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <i class="ni ni-check-bold text-success mt-1"></i>
                                    <div class="ml-2">
                                        <h4 class="mb-1">Location</h4>
                                        ` + locations_section + `
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="d-flex">
                                    <i class="ni ni-check-bold text-success mt-1"></i>
                                    <div class="ml-2">
                                        <h4 class="mb-1">Unit</h4>
                                        ` + units_section + `
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Training Description
                        </h4>
                        <p class="text-sm font-weight-normal mb-0 mt-2">
                            ` + response['syllabus']['training_description'] + `
                        </p>
                    </div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Training Background
                        </h4>
                        <p class="text-sm font-weight-normal mb-0 mt-2">
                        ` + response['syllabus']['training_background'] + `
                        </p>
                    </div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Learning Scope
                        </h4>
                        <p class="text-sm font-weight-normal mb-0 mt-2">
                        ` + response['syllabus']['learning_scope'] + `
                        </p>
                    </div>
                    <div class="mb-3">
                        <h4
                            class="mt-3 text-uppercase bg-red-dark-telkomsel text-white py-1 px-3 d-inline-block rounded">
                            Partner Recommendation
                        </h4>
                        <ul>
                        ` + vendors_section + `
                        </ul>
                    </div>
                </div>
            </div>
        `)
            });
        });
    </script>
    <script>
      $("body").on("click", "a.modal-karyawan", function (e) {
        event.preventDefault();

        var url = $(this).attr('href');

        $("#exampleModalKaryawan").modal('show');
      
        $('#tableKaryawan').DataTable({
            "bDestroy": true,
            "pagingType": "numbers",
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
            },
            "columns": [
                {
                    data: 'nik',
                    name: 'users.nik'
                },
                {
                    data: 'name',
                    name: 'users.name'
                },
                {
                    data: 'title',
                    name: 'users.title'
                },
                {
                    data: 'organization',
                    name: 'users.organization'
                },
            ]
        });
    });
    </script>
    <script>
        $(function() {
            $('#selectAll').click(function() {
                if ($(this).prop('checked')) {
                    $('.users-class').prop('checked', true);
                } else {
                    $('.users-class').prop('checked', false);
                }
            });

        });
    </script>
    <script>
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code-block'],
                [{ list: 'ordered' }, { list: 'bullet' }]
                ]
            },
            theme: 'snow'
            });

            quill.on('text-change', function(delta, oldDelta, source) {
            console.log(quill.container.firstChild.innerHTML)
            $('#content').val(quill.container.firstChild.innerHTML);
            });
    </script>
@endpush
