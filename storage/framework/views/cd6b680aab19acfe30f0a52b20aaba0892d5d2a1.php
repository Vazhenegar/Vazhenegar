

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
                if (counter.end < 0) {
                    clearInterval(counter.ticker);
                    counter.end = 0;
                    $(".quiz-submit").prop("disabled", true);
                    alert('زمان شما به پایان رسید. صفحه را ریفرش کرده و مجددا شروع کنید.');
                }

// Calculate remaining time
                var secs = counter.end;
                var mins  = Math.floor(secs / 60); // 1 min = 60 secs
                secs -= mins * 60;

// Update HTML
                counter.min.innerHTML = mins;
                counter.sec.innerHTML = secs;
                console.log(mins, secs);
            }, 1000);
        }
    });
</script>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/layout/timer.blade.php ENDPATH**/ ?>