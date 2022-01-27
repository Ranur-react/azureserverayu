@extends('layouts.app', ['pagedirectory' => ['Home' =>'/', 'Training Calendar'
=>'']])

@section('content')
    @include('layouts.headers.auth')

    <div class="container-fluid mt--8 mb-5">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-extrabold mb-3">Training Calendar</h1>
                <div class="card shadow mt-4">
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="calendarModal" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="class-name">Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0" id="modalBody">
                    <div class="mb-3">
                        <h3 id="event-title" class="mb-2"></h3>
                        <div class="d-flex align-items-center mb-2">
                            <h5 class="mb-0 mr-2 font-weight-normal" id="event-date"></h5>
                            •
                            <h5 class="mb-0 ml-2 font-weight-normal" id="event-clock"></h5>
                        </div>
                    </div>
                    <div class="mb-4" id="vidcon-section">
                        <div class="border rounded p-4">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img id="event-platform" class="img-fluid mr-3" style="height: 2.25rem">
                                    <h4 class="mb-0" id="event-meeting-name"></h4>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="" target="_blank" id="event-url">
                                        <button class="btn btn-sm btn-primary">
                                            Join Meeting
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p id="event-description"></p>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var events = <?php echo $trainingclasses; ?>;
            console.log(events[0])

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap',
                events: events,
                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },
                eventClick: function(info) {
                    $('#event-title').html(info.event.title);
                    $('#event-date').html(moment(info.event.start).format(
                        'dddd, DD MMMM YYYY'));
                    $('#event-clock').html(moment(info.event.start).format('hh:mm'));
                    $('#event-description').html(info.event.extendedProps.description);

                    if (info.event.extendedProps.platform) {
                        $('#vidcon-section').removeClass('d-none');
                        $('#vidcon-section').addClass('d-block');
                        $('#class-name').html(info.event.extendedProps.class_name);
                        $('#event-meeting-name').html(info.event.extendedProps.vidcon_name);
                        if (info.event.extendedProps.platform == 'Zoom') {
                            $('#event-platform').attr("src",
                                "{{ asset('telkomsel') }}/img/zoom-logo.png");
                        } else if (info.event.extendedProps.platform == 'Google Meet') {
                            $('#event-platform').attr("src",
                                "{{ asset('telkomsel') }}/img/google-meet-logo.png");
                        } else if (info.event.extendedProps.platform == 'Teams') {
                            $('#event-platform').attr("src",
                                "{{ asset('telkomsel') }}/img/teams-logo.png");
                        } else if (info.event.extendedProps.platform == 'CloudX') {
                            $('#event-platform').attr("src",
                                "{{ asset('telkomsel') }}/img/cloudx-logo.png");
                        }
                        $('#event-url').attr("href", info.event.extendedProps.vidcon_url);
                    } else {
                        $('#vidcon-section').removeClass('d-block');
                        $('#vidcon-section').addClass('d-none');
                    }
                    $('#calendarModal').modal();
                },
            });
            calendar.render();
        })
    </script>

@endpush
