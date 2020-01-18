{{-- Master layout JS section --}}


<!-- ******* All JS Files ******* -->

<!-- jQuery js -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- All js -->
<script src="{{asset('js/uza.bundle.js')}}"></script>

<!-- Active js -->
<script src="{{asset('js/default-assets/active.js')}}"></script>

{{-- date picker --}}
<script src="js/persian-date.min.js"></script>

<!-- Datepicker main script -->
<script src="js/persian-datepicker.js"></script>

<!-- Init datepicker -->
<!-- ------------------------------------------------------------------------------------ -->
<script type="text/javascript">
    $(document).ready(function () {
        let pd;
        pd = $('.date_picker').persianDatepicker({
            // altField: '#DTAlt',
            // altFormat: 'YYYY-MM-DD',
            initialValue: false,
            observer: false,
            format: 'YYYY - MM - DD',
            autoClose: true,
            calendar: {
                persian: {
                    enabled: true,
                    locale: 'fa',
                    showHint: true,
                    leapYearMode: "astronomical"
                }
            },
            dayPicker: {
                enabled: true
            },
            yearPicker: {
                enabled: true
            },
            timePicker: {
                enabled: false,
                meridian: {
                    enabled: false
                }
            },

        });
    });

</script>
<!-- ------------------------------------------------------------------------------------ -->
{{--Set Online and Offline users mode in DB--}}
<script>
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/SetUsersMode',
        });
    }, 30000);

</script>
