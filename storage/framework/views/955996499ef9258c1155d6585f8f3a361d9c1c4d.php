

<script>

    window.addEventListener('load', function () {

        let counter = {};
        let secs;
        let mins;
        // Get the containers
        counter.min = document.getElementById("cd-min");
        counter.sec = document.getElementById("cd-sec");

        if (performance.navigation.type == 1) {
            //This page is refreshed

            //set quiz timer
            counter.end = sessionStorage.getItem("timer");
        } else {
            //This page is loaded for the first time

            //set quiz timer -  15 MINS = 15 X 60 = 900 SECS
            counter.end = 900;
        }

// Start if not past end date
        if (counter.end > 0) {
            counter.ticker = setInterval(function () {
                counter.end--;
// use session to save user previous timer in case of refreshing the page and start from prev timer.
                sessionStorage.setItem("timer", counter.end);

// Stop if passed end time
                if (counter.end < 0) {
                    clearInterval(counter.ticker);
                    counter.end = 0;
                    $(".quiz-answer").prop("disabled", true);
                    alert('زمان شما به پایان رسید، لطفا ترجمه خود را ارسال کنید.');
                }

// Calculate remaining time
                secs = counter.end;
                mins = Math.floor(secs / 60); // 1 min = 60 secs
                secs -= mins * 60;

// Update HTML
                counter.min.innerHTML = mins;
                counter.sec.innerHTML = secs;
            }, 1000);
        }
        //quiz time is over and user refreshed the page.
        else {
            clearInterval(counter.ticker);
            counter.end = 0;
            $(".quiz-answer").prop("disabled", true);
            alert('زمان شما به پایان رسید، لطفا ترجمه خود را ارسال کنید.');
        }
    });
</script>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/scripts/QuizTimer.blade.php ENDPATH**/ ?>