<!-- datepicker -->

<script type="text/javascript">
    let BD = document.getElementById('BirthDate');
    let GD=document.getElementById('GraduationDate');

    //create date picker for birthdate
    if (document.contains(BD)) {
        window.pd = $('#BirthDate').persianDatepicker({
            altField: '#BirthDateAlt',
            altFormat: 'unix',
            initialValue: false,
            format: 'YYYY - MM - DD',
            timePicker: {
                enabled: true
            }
        });
    }
//    ===============================================================
    //create date picker for graduation date
    if (document.contains(GD)) {
        window.pd = $('#GraduationDate').persianDatepicker({
            altField: '#GraduationDateAlt',
            altFormat: 'unix',
            initialValue: false,
            format: 'YYYY - MM - DD',
            timePicker: {
                enabled: true
            }
        });
    }


</script>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/scripts/DatePicker.blade.php ENDPATH**/ ?>