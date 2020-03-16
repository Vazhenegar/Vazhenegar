<br>
<!doctype html>
<html lang="en">

<head>
    <title>Persian Datepicker</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <!-- Demo Bootstrap Style -->
    <!-- ------------------------------------------------------------------------------------ -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Demo Font Embed -->
    <!-- ------------------------------------------------------------------------------------ -->
    <link href="{{asset('css/fontiran.css')}}" rel="stylesheet"/>

    <!-- Persian Datepicker Style -->
    <!-- ------------------------------------------------------------------------------------ -->
    <link id="datepickerTheme" href="{{asset('css/persian-datepicker.css')}}" rel="stylesheet"/>

    <!-- Theme Switcher -->
    <!-- ------------------------------------------------------------------------------------ -->
    <script type="text/javascript">
        function swapStyleSheet(sheet) {
            document.getElementById('datepickerTheme').setAttribute('href', sheet);
        }
    </script>
    <!-- Demo Style -->
    <!-- ------------------------------------------------------------------------------------ -->
    <style type="text/css">
        *,
        body {
            font-family: IRANSans, tahoma;
        }

        body {
            padding-bottom: 300px;
        }

        .input-group-addon {
            cursor: pointer;
        }

        .navbar-right {
            padding: 10px;
        }

        /*    timer*/

        /*    end of timer*/
    </style>
</head>

<body>

{{--menus --}}
<ul>

@foreach($fullmenu as $menu)
<li>{{$menu}}</li>
    @endforeach

</ul>
{{--Timer--}}

{{--    <div>--}}
{{--        <div id="cd-min">00</div>--}}
{{--        <div>دقیقه</div>--}}

{{--        <div id="cd-sec">00</div>--}}
{{--        <div>ثانیه</div>--}}
{{--    </div>--}}

{{--End of timer--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-xs-12">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12 col-md-4">--}}
{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <h3 class="panel-title">Input Sample without intial value observer true</h3>--}}
{{--                        </div>--}}
{{--                        <div class="panel-body">--}}
{{--                            <div class="form-group">--}}
{{--                                <input id="normalAlt" class="form-control pwt-datepicker-input-element"/>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input class="form-control" id="normal"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<br> <br>--}}


{{-- Dependent select box --}}

{{--<select name="state" id="state">--}}
{{--    <option value=""></option>--}}
{{--    @foreach ($states as $state)--}}

{{--        <option value="{{$state->id}}">{{$state->state_name}}</option>--}}
{{--    @endforeach--}}

{{--</select>--}}

{{--<select name="city" id="city">--}}
{{--    <option value="">select state</option>--}}
{{--</select>--}}


<!-- Jquery (required dependency) -->
<!-- ------------------------------------------------------------------------------------ -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- ------------------------------------------------------------------------------------ -->
<script src="js/persian-date.min.js"></script>

<!-- Datepicker main script -->
<!-- ------------------------------------------------------------------------------------ -->
<script src="js/persian-datepicker.js"></script>

<!-- Init datepicker -->
<!-- ------------------------------------------------------------------------------------ -->
<script type="text/javascript">
    $(document).ready(function () {
        // Debug mode
        // --------------------------------------------
        //        window.persianDatepickerDebug = true;

        // Normal Sample
        // --------------------------------------------
        window.pd = $('#normal').persianDatepicker({
            altField: '#normalAlt',
            altFormat: 'LLLL',
            initialValue: false,
            observer: true,

            format: 'dddd، DD MMMM YYYY',

        });


        // Inline Sample
        // --------------------------------------------
        $("#inline2").persianDatepicker({
            calendar: {
                persian: {
                    enabled: true,
                    locale: 'fa',
                    showHint: true,
                    leapYearMode: "astronomical" // "astronomical"
                },
                gregorian: {
                    enabled: false,
                    showHint: true,
                    locale: 'en'
                }
            },
            altField: '#inlineAlt2',
            altFormat: 'LLLL',
            inline: true,
            viewMode: 'day',
            format: "lll",
            navigator: {
                scroll: {
                    enabled: true
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
                    enabled: true
                }
            },
        });
    });
</script>

{{-- dependent select box --}}
{{-- Retrive city names based on state selected by user --}}
<script>
    $(document).ready(function () {
        $('#state').on('change', function () {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: '/tmp/city/' + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('#city').empty();
                        $.each(data, function (key, value) {
                            $('#city').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                        });
                    },
                });
            } else {
                $('#city').empty();
            }

        });
    });

</script>

{{--timer js--}}
<script>
let counter = {};
window.addEventListener("load", function () {
// COUNTDOWN IN SECONDS
// EXAMPLE - 15 MINS = 15 X 60 = 900 SECS
counter.end = 900;

// Get the containers
counter.min = document.getElementById("cd-min");
counter.sec = document.getElementById("cd-sec");

// Start if not past end date
if (counter.end > 0) {
counter.ticker = setInterval(function(){
// Stop if passed end time
counter.end--;
if (counter.end <= 0) {
clearInterval(counter.ticker);
counter.end = 0;
}

// Calculate remaining time
var secs = counter.end;
var mins  = Math.floor(secs / 60); // 1 min = 60 secs
secs -= mins * 60;

// Update HTML
counter.min.innerHTML = mins;
counter.sec.innerHTML = secs;
}, 1000);
}
});
</script>
{{--timer end--}}
</body>

</html>
