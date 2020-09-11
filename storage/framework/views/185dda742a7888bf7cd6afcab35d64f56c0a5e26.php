

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
<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views\scripts\TranslationFields.blade.php ENDPATH**/ ?>