
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
<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views\scripts\TranslationLanguages.blade.php ENDPATH**/ ?>