{{--Set Online and Offline users mode in DB--}}
<script>
    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/SetUsersMode',
        });
    }, 30000);

</script>
