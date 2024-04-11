(function ($) {
    "use strict";
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            
                        }
                    });
    function CalendarApp() {
        this.$body = $("body");
        this.$modal = new bootstrap.Modal(document.getElementById("event-modal"), { backdrop: "static" });
        this.$calendar = $("#calendar");
        this.$formEvent = $("#form-event");
        this.$btnNewEvent = $("#btn-new-event");
        this.$btnDeleteEvent = $("#btn-delete-event");
        this.$btnSaveEvent = $("#btn-save-event");
        this.$modalTitle = $("#modal-title");
        this.$calendarObj = null;
        this.$selectedEvent = null;
        this.$newEventData = null;
    

        this.onEventClick = (e) => {
            this.$formEvent[0].reset();
            this.$formEvent.removeClass("was-validated");
            this.$newEventData = null;
            this.$btnDeleteEvent.show();
            this.$modalTitle.text("Edit Event");
            this.$modal.show();
            this.$selectedEvent = e.event;
            $("#title").val(this.$selectedEvent.title);
            // $("#event-category").val(this.$selectedEvent.classNames[0]);
        };

        this.onSelect = (e) => {
            this.$formEvent[0].reset();
            this.$formEvent.removeClass("was-validated");
            this.$selectedEvent = null;
            this.$newEventData = e;
            this.$btnDeleteEvent.hide();
            this.$modalTitle.text("Add New Event");
            this.$modal.show();
            this.$calendarObj.unselect();
        };

        this.init = () => {
            const events = [
                // { title: "Meeting with Mr. Shreyu", start: new Date($.now() + 158e6), end: new Date($.now() + 338e6), className: "bg-warning" },
                // // Other event objects...

            ];



            this.$calendarObj = new FullCalendar.Calendar(this.$calendar[0], {
                initialEvents: events,
                eventClick: (e) => this.onEventClick(e),
                dateClick: (e) => this.onSelect(e)
                // Other calendar options...
            });

            this.$calendarObj.render();

            this.$btnNewEvent.on("click", () => {
                this.onSelect({ date: new Date(), allDay: true });
            });

            // Event listener for the checkbox
            $("#all-day-checkbox").on("change", () => {
                const isChecked = $("#all-day-checkbox").is(":checked");
                if (isChecked) {
                    $("#StartdateTime").hide();
                    $("#EnddateTime").hide();
                } else {
                    $("#StartdateTime").show();
                    $("#EnddateTime").show();
                }
            });



            // Form submit listener
            this.$formEvent.on("submit", (e) => {
                e.preventDefault();
                const form = this.$formEvent[0];

                if (form.checkValidity()) {
                    let startDateTime = $("#StartdateTime").val();
                    let endDateTime = $("#EnddateTime").val();
                    if ($("#all-day-checkbox").is(":checked")) {
                        startDateTime = new Date(this.$newEventData.date);
                        endDateTime = new Date(this.$newEventData.date);
                    }

                    const eventData = {
                        title: $("#title").val(),
                        description: $("#description").val(),
                        start: startDateTime,
                        end: endDateTime,
                        allDay: $("#all-day-checkbox").is(":checked"),
                    };

                    // AJAX POST request
                    $.ajax({
                        type: "POST",
                        url: "/calendar",
                        dataType: "json",
                        data: eventData,
                        success: (response) => {
                            console.log("Event data saved successfully!", response);
                            if (response.success) {
                                const newEvent = {
                                    title: response.event.title,
                                    start: response.event.start,
                                    end: response.event.end,
                                    // Add other necessary properties
                                };

                                this.$calendarObj.addEvent(newEvent); // Add the new event to the calendar

                                this.$modal.modal('hide'); // Hide the modal
                            } else {
                                console.error("Event creation failed.");
                            }
                        },

                    });
                } else {
                    e.stopPropagation();
                    form.classList.add("was-validated");
                }
            });

            // Delete event button listener
            this.$btnDeleteEvent.on("click", () => {
                if (this.$selectedEvent) {
                    this.$selectedEvent.remove();
                    this.$selectedEvent = null;
                    this.$modal.hide();
                }
            });
        };

        this.init(); // Call init function
    }

    window.jQuery.CalendarApp = new CalendarApp();
})(window.jQuery);





