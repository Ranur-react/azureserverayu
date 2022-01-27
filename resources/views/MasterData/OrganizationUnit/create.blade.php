@extends('layouts.app', ['pagedirectory' => [
'Organization Units' =>'/master-data/organization-units',
'Create' => ''
]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Units</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('master-data.organization-units.store') }}"
                        id="formUnit">
                            {{ csrf_field() }}
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <div class="d-flex mb-4">
                                                <div class="mr-auto p-2">
                                                <label class="form-control-label" for="select-location">Location
                                                    <span style="color:red">*</span></label>
                                                </div>
                                                <div class="p-2">
                                                    <button type="button" id="deselectAll-location" class="btn btn-outline-primary btn-sm">Remove location</button>
                                                </div>
                                            </div>
                                            <select name="location_id" id="select-location" class="form-control
                                            {{ $errors->has('location_id') ? ' is-invalid' : '' }}">
                                                {{-- @foreach ($levels as $level)
                                                    <option value="{{ $level->id }}" @if (old("level")){{ (in_array($level->id, old("location_id")) ? "selected":"") }} @endif>{{ $level->name }}</option>
                                                @endforeach --}}
                                            </select>
                                            @error('location_id')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-date-from">Date From</label>
                                            <input type="text" name="date_from" id="input-date-from" value="{{ old('date_from') }}"
                                                class="form-control bg-white {{ $errors->has('date_from') ? ' is-invalid' : '' }}"
                                                autocomplete=”off”>
                                            @error('date_from')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-date-to">Date From</label>
                                            <input type="text" name="date_to" id="input-date-to" value="{{ old('date_to') }}"
                                                class="form-control bg-white {{ $errors->has('date_to') ? ' is-invalid' : '' }}"
                                                autocomplete=”off”>
                                            @error('date_to')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-name">Name</label>
                                            <input type="text" name="name" id="input-name"
                                                value="{{ old('name') }}"
                                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                required >
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-type">Type</label>
                                            <input type="text" name="type" id="input-type"
                                                value="{{ old('type') }}"
                                                class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }}"
                                                >
                                            @error('type')
                                                <span class="invalid-feedback" style="display: block;"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4  btn-lg btn-block">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $("form").submit(function () {
                if ($(this).valid()) {
                    $(this).submit(function () {
                        return false;
                    });
                    return true;
                }
                else {
                    return false;
                }
            });
        });
    </script>
    <script>
        var start_date = flatpickr("#input-date-from", {
            altInput: true,
            enableTime: true,
            altFormat: "F j, Y H:i",
            dateFormat: "Y-m-d H:i",
            onChange: function(selectedDates, dateStr, instance) {
                end_date.set('minDate', dateStr)
            }
        });

        var end_date = flatpickr("#input-date-to", {
            altInput: true,
            enableTime: true,
            altFormat: "F j, Y H:i",
            dateFormat: "Y-m-d H:i",
        onChange: function(selectedDates, dateStr, instance) {
            start_date.set('maxDate', dateStr)
        }
        });
    </script>
    <script>
        $("#select-location").select2({
            allowClear: true,
            ajax: {
                url: "{{ route('master-data.organization-units.getselect2LocationAjax') }}",
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

        $("#deselectAll-location").click(function() {
                $("#select-location").val('').change();
            });
      </script>
@endpush
