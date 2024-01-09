<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Current Time</title>
    <style>
        /* Optional: Add some styles to the displayed time */
        #live-time {
            font-size: 20px;
            font-weight: bold;
            color: navy;
        }
    </style>
</head>
<body>

<p>Current Time: <span id="live-time"><?php echo date('H:i:s'); ?></span></p>

<script>
    // Use JavaScript to update the time every second
    setInterval(function () {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Add leading zeros if needed
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        // Update the content of the live-time span
        document.getElementById('live-time').innerHTML = hours + ":" + minutes + ":" + seconds;
    }, 1000); // Update every 1000 milliseconds (1 second)
</script>

</body>
</html>
