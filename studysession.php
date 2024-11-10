<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Session</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style1.css">
<body>
    <div class="backg">
        <img src="studys1.jpg" id="imageDisplay" alt="">
    </div>
    <div class="buttons-container">
        <button onclick="changeBackground('study1.jpg')">Image 1</button>
        <button onclick="changeBackground('study2.jpg')">Image 2</button>
        <button onclick="changeBackground('studys1.jpg')">Image 3</button>
    </div>
    <script>
        function changeImage(imageSrc) {
            var image = document.getElementById('imageDisplay');
            image.src = imageSrc;
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Image with Buttons</title>
    <style>
        /* Styling the div to contain the image */
        .image-container {
            width: 100%;
            height: 720px; /* Set the height of the div */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 720px;
            transition: all 0.5s ease; /* Smooth transition for image change */
        }

        /* Styling the buttons */
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;

        }

        .buttons-container button {
            padding: 10px 20px;
            background-color: lightblue;
            color: black;
            border: none;
            cursor: pointer;
            font-family: "Funnel Display", sans-serif;
            border-radius: 5px;
            font-size: 16px;
        }

        .buttons-container button:hover {
            background-color: #45a049;
        }
        .timer-container{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 5px;
            width: 30%;
            padding: 10px;
            border: 3px solid black;
            box-shadow: 0px 0px 8px black;
            position: absolute;
            top: 65%;
            right: 33%;
        }
        .timer-container #timer{
            font-size: 50px;
            font-family: "Funnel Display", sans-serif;
            background: white;
            border-radius: 8px;
            padding: 3px;
            color: black;
            margin-left: auto;
            margin-right: auto;
        }
        .timer-container .status{
            font-family: "Funnel Display", sans-serif;
            font-size: 30px;
            margin-left: auto;
            margin-right: auto;
        }
        #startPauseBtn, #resetBtn{
            border: transparent;
            border-radius: 3px;
            border: 3px solid black;
            font-family: "Space Grotesk", serif;
            background: blue;
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

<body>
    <!-- Div to display the image -->
    <div class="image-container">
        <img id="imageDisplay" src="study1.jpg" alt="Display Image">
    </div>
    <div class="timer-container">
        <div id="timer">25:00</div>
        <div class="status" id="status">Work</div>
        <button id="startPauseBtn">Start</button>
        <button id="resetBtn">Reset</button>
    </div>
    <!-- Buttons to change the image -->
    <div class="buttons-container">
        <button onclick="changeImage('study1.jpg')">Anime 1</button>
        <button onclick="changeImage('study2.jpg')">Anime 2</button>
        <button onclick="changeImage('studys1.jpg')">Anime 3</button>
        <button onclick="changeImage('study3.jpg')">Anime 4</button>
        <button onclick="changeImage('study5.jpg')">Tech 1</button>
        <button onclick="changeImage('study6.jpg')">Tech 2</button>
        <button onclick="changeImage('study7.jpg')">Desk 1</button>
    </div>

    <script>
         let isRunning = false;
        let timeLeft = 25 * 60;  // 25 minutes in seconds
        let timerInterval;
        const timerElement = document.getElementById("timer");
        const statusElement = document.getElementById("status");
        const startPauseBtn = document.getElementById("startPauseBtn");
        const resetBtn = document.getElementById("resetBtn");

        // Function to start/pause the timer
        function startPauseTimer() {
            if (isRunning) {
                clearInterval(timerInterval);
                startPauseBtn.textContent = "Resume";
            } else {
                timerInterval = setInterval(updateTimer, 1000);
                startPauseBtn.textContent = "Pause";
            }
            isRunning = !isRunning;
        }

        // Function to update the timer display
        function updateTimer() {
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                timeLeft = 25 * 60;
                statusElement.textContent = "Time's up! Take a break!";
                startPauseBtn.textContent = "Start";
                isRunning = false;
                return;
            }

            timeLeft--;

            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;

            // Add leading zero to seconds
            if (seconds < 10) {
                seconds = "0" + seconds;
            }

            timerElement.textContent = `${minutes}:${seconds}`;
        }

        // Function to reset the timer
        function resetTimer() {
            clearInterval(timerInterval);
            timeLeft = 25 * 60;
            timerElement.textContent = "25:00";
            statusElement.textContent = "Work";
            startPauseBtn.textContent = "Start";
            isRunning = false;
        }

        // Event listeners for buttons
        startPauseBtn.addEventListener("click", startPauseTimer);
        resetBtn.addEventListener("click", resetTimer);
        // Function to change the image
        function changeImage(imageSrc) {
            var image = document.getElementById('imageDisplay');
            image.src = imageSrc;
        }
    </script>

</body>
</html>
