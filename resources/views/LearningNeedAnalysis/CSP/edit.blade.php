@extends('layouts.app', ['pagedirectory' => ['CSP' =>'/learning-need-analysis/csp',
$csp->name => '' ]])

@section('content')
    @include('layouts.headers.auth')
    <div class="container-fluid mt--7 mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg mb-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Csp Information</h3>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('learning-need-analysis.csp.update', $csp->id) }}">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-csp-name">Theme Name</label>
                                            <input type="text" name="name" id="input-csp-name" value="{{ old('name', $csp->name) }}"
                                                   class="form-control"
                                                   placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-control-label" for="input-idp-year">Year</label>
                                            <input type="text" name="idp_year" id="input-idp-year" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $csp['start_date'])->format('Y') }}"
                                                   class="form-control text-black"
                                                   placeholder="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-start-date">Start Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control bg-white  {{ $errors->has('start_date') ? ' is-invalid' : '' }}"
                                                       id="input-start-date" name="start_date"
                                                       value="{{ old('start_date', $csp->start_date) }}"
                                                       placeholder="Select start date" type="text" autocomplete=”off” required>
                                            </div>

                                            @error('start_date')
                                            <span class="invalid-feedback" style="display: block;"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-end-date">End Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control bg-white {{ $errors->has('end_date') ? ' is-invalid' : '' }}"
                                                       id="input-end-date" name="end_date"
                                                       value="{{ old('end_date', $csp->end_date) }}" placeholder="Select end date" type="text" autocomplete=”off” required>
                                            </div>
                                            @error('end_date')
                                            <span class="invalid-feedback" style="display: block;"
                                                  role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4 btn-lg btn-block">Save Changes</button>
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
        var csp_start_date = flatpickr("#input-start-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        maxDate: "{{ $csp->end_date }}",
        onChange: function(selectedDates, dateStr, instance) {
            csp_end_date.set('minDate', dateStr)
        }
        });

        var csp_end_date = flatpickr("#input-end-date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: "{{ $csp->start_date }}",
        onChange: function(selectedDates, dateStr, instance) {
            csp_start_date.set('maxDate', dateStr)
        }
        });
    </script>
@endpush
