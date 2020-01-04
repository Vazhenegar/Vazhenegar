


<!-- ******* All JS Files ******* -->

<!-- jQuery js -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

<!-- Popper js -->
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>

<!-- Bootstrap js -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

<!-- All js -->
<script src="<?php echo e(asset('js/uza.bundle.js')); ?>"></script>

<!-- Active js -->
<script src="<?php echo e(asset('js/default-assets/active.js')); ?>"></script>


<script src="js/persian-date.min.js"></script>

<!-- Datepicker main script -->
<!-- ------------------------------------------------------------------------------------ -->
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

<script>
    $(document).ready(function () {

        let oldstate = '<?php echo e(old('State')); ?>'; // when validation fails, this variable keeps previous select item for state
        let oldcity = '<?php echo e(old('City')); ?>';  // when validation fails, this variable keeps previous select item for city
        let state_id;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        populate_states();

        //this piece will populate state items
        function populate_states() {
            $.each(Object(states), function (key, value) {
                if ((oldstate) && (value.id == oldstate)) {
                    //if state was selected before put its id in state_id variable and select that state in select box
                    state_id = oldstate;
                    $('#State').append('<option value="' + value.id + '" selected>' + value.StateName + '</option>');
                } else {
                    $('#State').append('<option value="' + value.id + '">' + value.StateName + '</option>');
                }

            });
            //after populating or selecting states, call this function to populate cities
            populate_cities();

        }

        $('#State').on('change', function () {
            state_id = $(this).val();
            populate_cities(); //this will populate cities select box
        });

        //this function will load cities select box depending on  state selected
        function populate_cities() {
            $('#City').empty();
            if (state_id) {
                $.ajax({
                    url: '/employment/city/' + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {

                        $('#City').empty();
                        $.each(data, function (key, value) {
                            if ((oldcity) && (value.id == oldcity)) {
                                $('#City').append('<option value="' + value.id + '" selected>' + value.CityName + '</option>');
                            } else {
                                $('#City').append('<option value="' + value.id + '">' + value.CityName + '</option>');
                            }
                        });
                    }
                });
            }
        }
    });
</script>
<!-- ------------------------------------------------------------------------------------ -->


<script>
    var source_l;
    var dest_l;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    // if form has some errors and user was selected some languages, they will show here
    if (UserSelectedLangs) {
        $.each(Object(UserSelectedLangs), function (key, value) {
            $('#selected_lang').append(`<label class="pure-material-checkbox" id="lang_list"><input name="UserSelectedLangs[]" value="${value}" type="checkbox" checked><span>${value}</span></label>`);
        });
    }

    //get source language text
    function SL(s_l) {
        source_l = s_l.options[s_l.selectedIndex].text;
        enable_btn();
    }

    //get destination language text
    function DL(d_l) {
        dest_l = d_l.options[d_l.selectedIndex].text;
        enable_btn();
    }

    //enable add to list button if both of languages are selected
    function enable_btn() {
        if ((source_l && dest_l) && (source_l != dest_l)) {
            $(".lang-btn").prop("disabled", false);
        } else {
            $(".lang-btn").prop("disabled", true);
        }
    }


    //check if source and dest languages were not selected before and if not, add them to list
    function add_to_list() {
        //get pair of newly selected languages by user
        var new_selected_pair = source_l + ' به ' + dest_l;

        //build element to insert into language list
        var new_selected_element = '<label class="pure-material-checkbox" id="lang_list"><input name="UserSelectedLangs[]" value="' + source_l + ' به '
            + dest_l + '" type="checkbox" checked><span>' + source_l + ' به ' + dest_l + '</span></label>';

        //if there is same pair in the list, this will be true
        var previously_selected = false;

        //Check if list of selected languages exist or no
        var list = document.getElementById("lang_list");

        //If it isn't "undefined" and it isn't "null", then it exists.
        if (typeof (list) != 'undefined' && list != null) {
            //check for duplicated pair of selected languages
            const languages = document.getElementById("selected_lang").querySelectorAll("span");

            languages.forEach(language => {

                if (new_selected_pair == language.innerText) {
                    // this pair selected before
                    previously_selected = true;
                }
            });
        }
        if (!previously_selected) {
            //insert to list if not inserted before
            $('#selected_lang').append(new_selected_element);
        }
        //disable button to avoid insertion of same pair of languages
        $(".lang-btn").prop("disabled", true);
    }
</script>
<!-- ------------------------------------------------------------------------------------ -->


<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        //in case of form error, check which fields are selected before and automatically select them
        if (old_tf) {
            var list = document.getElementsByName('TranslationFields[]');
            var i;
            for (i = 0; i < list.length; i++) {
                var field = list[i];
                $.each(old_tf, function (key, value) {
                    if (value == field.value) {
                        $(field).attr("checked", "checked");
                    }
                });
            }
        }

    });
</script>

<!-- ------------------------------------------------------------------------------------ -->

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/layout/Scripts.blade.php ENDPATH**/ ?>