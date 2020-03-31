

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
<?php /**PATH D:\Projects\vazhenegar\Main Project\resources\views/scripts/StateCity.blade.php ENDPATH**/ ?>