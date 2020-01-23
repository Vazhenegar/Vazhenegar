<!-- datepicker -->

<script type="text/javascript">
    let BD = document.getElementById('BirthDate');
    let GD = document.getElementById('GraduationDate');
    let DC = document.getElementById('DashboardCalendar');
    let NO = document.getElementById('NewOrderDeliveryDate');

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

    //    ===============================================================
    //create calendar for dashboard
    if (document.contains(DC)) {
        $("#DashboardCalendar").persianDatepicker({
            inline: true,
        });
    }

    //    ===============================================================
    //create date picker for new order delivery date
    if (document.contains(NO)) {
        window.pd = $('#NewOrderDeliveryDate').persianDatepicker({
            altField: '#NewOrderDeliveryDateAlt',
            altFormat: 'unix',
            initialValue: false,
            format: 'LLLL',
            timePicker: {
                enabled: true
            }
        });
    }
</script>
<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/scripts/DatePicker.blade.php ENDPATH**/ ?>