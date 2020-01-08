

<script>

    window.addEventListener('load', function () {

        let counter = {};
        let secs;
        let mins;
        // Get the containers
        counter.min = document.getElementById("cd-min");
        counter.sec = document.getElementById("cd-sec");

// COUNTDOWN IN SECONDS
// if user refresh the page in the middle of quiz, timer will remain from refreshed point.
        if (sessionStorage.getItem("timer") > 0) {
            counter.end = sessionStorage.getItem("timer");
        } else {
// 15 MINS = 15 X 60 = 900 SECS
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
                    sessionStorage.removeItem('timer');
                    $(".quiz-submit").prop("disabled", true);
                    alert('زمان شما به پایان رسید.');
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
    });
</script>

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\layout\QuizTimer.blade.php ENDPATH**/ ?>