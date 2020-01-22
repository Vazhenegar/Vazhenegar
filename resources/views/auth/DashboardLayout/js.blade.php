<!-- jQuery 3 -->
<script src="{{asset('auth/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('auth/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('auth/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('auth/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('auth/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('auth/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('auth/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('auth/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('auth/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('auth/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('auth/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
{{--<script src="{{asset('auth/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>--}}
<!-- Datepicker main script -->
<script src="{{asset('js/persian-datepicker.js')}}"></script>
{{-- date picker --}}
<script src="{{asset('js/persian-date.min.js')}}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('auth/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('auth/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('auth/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('auth/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('auth/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('auth/dist/js/demo.js')}}"></script>

{{--Dropzone--}}
<script src="{{asset('js/dropzone.js')}}"></script>

{{--dashboard calendar--}}
<script>
    $("#inlineGregorian").persianDatepicker({
        inline: true,
        calendar: {
            persian: {
                showHint: true
            },
            gregorian: {
                showHint: true
            }
        },
        calendarType__: 'gregorian',
        format: "lll",
        toolbox: {
            calendarSwitch: {
                enabled: true
            }
        },
        timePicker: {
            enabled: false,
            meridian: {
                enabled: false
            }
        },
    });
</script>

{{--New Order date time picker --}}
<script>
    $(document).ready(function () {

        populate_DateTime_Field();

        function populate_DateTime_Field() {
            window.pd = $('#DeliveryDate').persianDatepicker({
                altField: '#DeliveryDateAlt',
                altFormat: 'gregorian',
                initialValue: true,
                format: 'LLLL',
                timePicker: {
                    enabled: true
                }
            });

            // convert_to_unix();
        }

        //convert shamsi date to gregorian unix
        function convert_to_unix() {
            $('#DeliveryDateAlt').persianDatepicker({
                formatter: function (unixDate) {
                    let self = this;
                    let thisAltFormat = self.altFormat.toLowerCase();
                    if (thisAltFormat === 'gregorian' || thisAltFormat === 'g') {
                        return new Date(unixDate);
                    }
                    if (thisAltFormat === 'unix' || thisAltFormat === 'u') {
                        return unixDate;
                    }
                    else {
                        let pd = new persianDate(unixDate);
                        pd.formatPersian = this.persianDigit;
                        return pd.format(self.altFormat);
                    }
                }
            });
        }

        $('#DeliveryDateAlt').on('change', function () {
            convert_to_unix();
        });

    });

</script>
