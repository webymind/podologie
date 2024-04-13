<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.9/index.global.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" rel="stylesheet">
    <style>
        #calendar a {
        color: #000000;
        text-decoration: none;
        }
        .mr-auto {
        margin-right: auto;
        }
        .space {
        margin-bottom: 20px;
        }
            #calendar {
            max-width: 1440px; /* Set the maximum width of the calendar */
            height: 720px;
            margin: 0 auto; /* Center the calendar horizontally */
        } 
        label {
            display: inline-block;
            font-weight: 600;
        } 

        @media (min-width: 200px) and (max-width: 767px){
            .fc .fc-toolbar-title {
                font-size: 9.1px;
                margin: -5px;
                padding-top: 63px;
            }
        }
    </style>    
</head>
<body>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="eventId">
            <form id="eventForm">
                <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" placeholder="Enter Title" class="form-control" id="title" name="title" value="" >
                </div>
                <select style="width: 100%" class="form-control mb-3" id="userSelect" name="userSelect" class="userSelect">
                <option value=""></option>
                </select> 
                <div class="mb-3"></div>
                <select style="width: 100%" class="form-control" id="serviceSelect" name="serviceSelect" class="serviceSelect">
                <option value=""></option>
                </select>
                <div style="margin-top: 20px; margin-bottom: 20px">
                <label class="form-check-label" for="alldayCheckbox">All Day</label>
                <input type="checkbox" id="alldayCheckbox"  name="alldayCheckbox" value="" required>
                </div>
                    <!-- Start Date & Time -->
                    <div class="mb-3">
                        <label for="startDateTime" class="form-label">Start Date & Time:</label>
                        <div class="input-group date" id="startDateTimePicker" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#startDateTimePicker" id="startDateTime" name="startDate" required />
                            <div class="input-group-text" data-target="#startDateTimePicker" data-toggle="datetimepicker">
                                <input type="time" name="selectedTime" id="selectedTime"><i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Time -->
                    <div class="mb-3">
                        <label for="endTime" class="form-label">End Time:</label>
                        <div class="input-group date" id="endDateTimePicker" data-target-input="nearest">
                            <div class="input-group-text" data-target="#endDateTimePicker" data-toggle="datetimepicker">
                                <input type="time" name="endTime" id="endTime"><i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <label for="description" class="form-label">Description:</label>
                    <textarea placeholder="Write a short description" class="form-control" id="description" name="description"></textarea>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mr-auto" style="display: none" id="deleteEventbtn" onclick="deleteEvent()">Delete Event</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEventBtn">Save Event</button>

            </div>
            </div>
        </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.en-GB.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        contentHeight: 600,
        selectable: true,
        nowIndicator: true,
        dayMaxEvents: true,
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,multiMonthYear,listWeek'
        },
        googleCalendarApiKey: '',
        events: '',
        // ... other configurations ...

        // // New eventClick logic to prevent default action and open modal
        // eventClick: function(info) {
        //     info.jsEvent.preventDefault(); // Prevents the default action (redirecting to Google Calendar)
        //     populateModal(info.event.id); // Call the populateModal function with the event ID
        // },

        dateClick: function(info) {
            $('#startDateTime').val(moment(info.date).format("YYYY-MM-DD"));
            $('#selectedTime').val('');
            $('#alldayCheckbox').prop('checked', false);
            // Additional logic to hide/show time-related inputs in the modal as needed
            modalReset();
            $('#eventModal').modal('show');
        }
    });
    calendar.render();

        $('#alldayCheckbox').change(function() {
            if ($(this).prop('checked')) {
                $('#startDateTime').val($('#startDateTime').val().slice(0, 10));
                $('#selectedTime').val('');
                // Additional logic to hide time-related inputs in the modal if needed
            } else {
                let startTime = moment($('#startDateTime').val(), 'YYYY-MM-DDTHH:mm').format('YYYY-MM-DD');
                $('#startDateTime').val(startTime + "T" + $('#selectedTime').val());
                // Additional logic to show time-related inputs in the modal if needed
            }
        });




        // Function to reset modal fields
        function modalReset() {
            $('#title').val("");
            $('#description').val("");
            // Resetting userSelect and serviceSelect dropdowns
            $("#userSelect").val(null).trigger('change');
            $("#serviceSelect").val(null).trigger('change');
            $('#eventId').val("");
            $('#deleteEventBtn').hide();
        }

        // Trigger modalReset function on modal close or dismiss
        $('#eventModal').on('hidden.bs.modal', function() {
            //location.reload(); 
            modalReset()
        });

        $('#userSelect').select2({
            ajax: {
            url: '/getUsers',
            type: 'get',
            dataType: 'json',
            data: function(params) {
                return {
                searchItem: params.term,
                page: params.page
                };
            },
            processResults: function(data) {
                return {
                results: $.map(data, function(user) {
                    return {
                    id: user.id,
                    text: user.name + ' - ' + user.phone
                    };
                })
                };
            },
            cache: true
            },
            placeholder: 'Select a Patient',
            dropdownParent: '#eventModal'
        });

        $('#serviceSelect').select2({
            ajax: {
            url: '/getServices',
            type: 'get',
            dataType: 'json',
            data: function(params) {
                return {
                searchItem: params.term,
                page: params.page
                };
            },
            processResults: function(data) {
                return {
                results: $.map(data, function(service) {
                    return {
                    id: service.id,
                    text: service.name
                    };
                })
                };
            },
            cache: true
            },
            placeholder: 'Select a Service',
            dropdownParent: '#eventModal'
        });



    $('#saveEventBtn').on('click', function() {
            if (!validateForm()) {
            return; // Stop form submission if validation fails
        }
        let eventId = $("#eventId").val();
        let url = '{{ route("booking.store") }}';

        let startDate = $("#startDateTime").val();
        let selectedTime = $("#selectedTime").val();
        let allDayCheckbox = $("#alldayCheckbox").prop('checked');

        let startDateTime = allDayCheckbox ? startDate : startDate + 'T' + selectedTime;
        let endDateTime = '';

        if (allDayCheckbox) {
            endDateTime = moment(startDate).endOf('day').format('YYYY-MM-DDTHH:mm:ss');
        } else {
            // Get the end time directly without calculating the date
            let endTime = $("#endTime").val();
            endDateTime = moment(startDate + 'T' + endTime, 'YYYY-MM-DDTHH:mm').format('YYYY-MM-DDTHH:mm:ss');
        }

        let postData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            startDateTime: startDateTime,
            endDateTime: endDateTime,
            title: $("#title").val(),
            user_name: $("#userSelect option:selected").text(),
            service_name: $("#serviceSelect option:selected").text(),
            description: $("#description").val(),
            alldayCheckbox: allDayCheckbox ? 1 : 0,
            selectedTime: selectedTime
        };

        console.log("Form Data:", postData);

        // Show a pending message immediately when the user clicks the button
        const pendingMessage = Swal.fire({
            title: 'Saving Event...',
            showConfirmButton: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        $.ajax({
            type: eventId ? 'PUT' : 'POST',
            url: eventId ? url + '/' + eventId : url,
            dataType: "json",
            data: postData,
            success: function(res, status, xhr) {
                // Check if the status code is 201 (Created)
                if (xhr.status === 201) {
                    // Close the pending message
                    pendingMessage.close();

                    // Display success message from the server response
                    Swal.fire({
                        title: res.message, // Use the message from the server response validate by Mathieu
                        icon: 'success',
                        showConfirmButton: true,
                    }).then(() => { 
                        location.reload();                       
                        // Reset the modal after showing the success message
                        $('#eventForm')[0].reset();
                        $('#eventModal').modal('hide');

                    });
                }
            },
            error: function(xhr, status, error) {
                // Close the pending message and handle error response
                pendingMessage.close();
                // Handle error response
            },
            complete: function(xhr, status) {
                // Close the pending message once the AJAX call is complete
                pendingMessage.close();
            }
        });
            function validateForm() {
            // const title = $("#title").val().trim();
            const userSelect = $("#userSelect").val().trim();
            const serviceSelect = $("#serviceSelect").val().trim();
            const startDate = $("#startDateTime").val().trim();
            const selectedTime = $("#selectedTime").val().trim();
            const endTime = $("#endTime").val().trim();
            const alldayCheckbox = $("#alldayCheckbox").prop('checked');

            if (!title) {
                Swal.fire({
                    title: 'Please enter a title.',
                    icon: 'info',
                    confirmButtonColor: true
                });
                return false;
            }

            if (!alldayCheckbox) {
                if (!userSelect || !serviceSelect) {
                    Swal.fire({
                        title: 'Please select Patient and Service.',
                        icon: 'info',
                        confirmButtonColor: true
                    });
                    return false;
                }

                if (!startDate || !selectedTime || !endTime) {
                    Swal.fire({
                        title: 'Please select Start and End Date/Time.',
                        icon: 'info',
                        confirmButtonColor: true
                    });
                    return false;
                }

                const startTime = moment(startDate + 'T' + selectedTime, 'YYYY-MM-DDTHH:mm');
                const endDateTime = moment(startDate + 'T' + endTime, 'YYYY-MM-DDTHH:mm');
                if (endDateTime <= startTime) {
                    Swal.fire({
                        title: 'End Time cannot be less than or equal to Start Time.',
                        icon: 'info',
                        confirmButtonColor: true
                    });
                    return false;
                }
            }

            return true; // Return true if all validation checks pass
        }

    });



});
</script>
</body>
</html>




