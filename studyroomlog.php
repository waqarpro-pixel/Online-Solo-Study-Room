<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Rooms</title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Funnel+Display:wght@300..800&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Hubot+Sans:ital,wght@0,200..900;1,200..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Sora:wght@100..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

<style>
    *{
        margin: 3px;
        padding: 3px
    }
    body{
      background: url('back1.jpg');
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
    background-size: cover;
    }
    .container{
        display: flex;
      width: 98 %;
      height: 95vh;
      border: 2px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .scroll {
      width: 30%;
      overflow-y: scroll;
      padding: 10px;
      border-right: 2px solid #ddd;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .scroll img {
      width: 100%;
      cursor: pointer;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }
    .scroll img:hover {
      transform: scale(1.05);
    }
    .scroll::-webkit-scrollbar {
      width: 8px;
    }
    scroll::-webkit-scrollbar-thumb {
      background-color: #888;
      border-radius: 10px;
    }
    .scroll::-webkit-scrollbar-thumb:hover {
      background-color: #555;
    }

    /* Second div: for displaying the clicked image */
    .viewer {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #fff;

    }
    .viewer img {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .timer-container{
        /* display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        
        border-radius: 35px;
        border: 1px solid black;
        background: linear-gradient(to left, grey,whitesmoke);
        box-shadow: 0px 0px 5px black; */
        background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
    backdrop-filter: blur(10px); /* Applies the blur effect on the background */
    border-radius: 0px; /* Rounded corners */
    padding: 30px;
    text-align: center;
    width: 30%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
    color: white;
    }
    .timer-container h2{
        text-align: center;
        font-family: "Funnel Display", sans-serif;
        color: Black;
    }
    .time-display{
        text-align: center;
        font-family: "Funnel Display", sans-serif;
        font-size: 50px;
        color: black;
        background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
    backdrop-filter: blur(1px); /* Applies the blur effect on the background */
    border-radius: 0px; /* Rounded corners */
    padding: 30px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
    color: white;
    }
    .divs, .divm{
        margin-left: auto;
        margin-right: auto;
    font-family: "Space Grotesk", serif;
        
    }
    .divs input{
        font-family: "Space Grotesk", serif;
        border: 2px solid black;
    }
    .divm input{
        font-family: "Space Grotesk", serif;
        border: 2px solid black;
    }
    .timer-container button{
        background: blue;
        color: white;
        font-family: "Space Grotesk", serif;
        font-size: 18px;
        border: transparent;
        border-radius: 5px;
        box-shadow: 3px 3px 3px black;
        cursor: pointer;
        width: 30%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 5px;
    }
    #alertMessage{
        font-family: "Space Grotesk", serif;
        text-align: center
    }
    .main-box{
        display: flex;
        
    /* }
    audio{
      display: none;
    } */
    .audio-player{
        /* display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 30%;
        background: linear-gradient(to left, red,orange);
        border-radius: 35px;
        border: 1px solid black;
        box-shadow: 0px 0px 5px black;
        justify-content: center;
        align-items: center; */
        background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
      backdrop-filter: blur(10px); /* Applies the blur effect on the background */
      border-radius: 0px; /* Rounded corners */
      padding: 30px;
      text-align: center;
      width: 30%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
      color: white;
        
    }
    .audio-player .track-buttons button{
        background: blue;
        color: white;
        font-family: "Space Grotesk", serif;
        font-size: 12px;
        border: transparent;
        border-radius: 5px;
        box-shadow: 3px 3px 3px black;
        cursor: pointer;
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 8px;
    }
    #trackName, #currentTime, #duration{
        font-size: 23px;
    }
    .time-display{
        font-size: 23px;
    }
    .todo{
      background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
      backdrop-filter: blur(10px); /* Applies the blur effect on the background */
      border-radius: 0px; /* Rounded corners */
      padding: 30px;
      text-align: center;
      width: 30%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
      color: white;
    }
   .container1{
    background: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
      backdrop-filter: blur(10px); /* Applies the blur effect on the background */
      border-radius: 0px; /* Rounded corners */
      padding: 30px;
      text-align: center;
      width: 30%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: adds some shadow for depth */
      color: white;
    }
    .container1 h2{
      font-family: "Space Grotesk", serif;
      color: black;
    }
    .container1 input{
      border: 1.8px solid black;
      width: 55%;
      background: whitesmoke;
      height: 25px;
      font-family: "Space Grotesk", serif;
    }
    .container1 button{
        background: blue;
        color: white;
        font-family: "Space Grotesk", serif;
        font-size: 15px;
        border: transparent;
        border-radius: 5px;
        box-shadow: 3px 3px 3px black;
        cursor: pointer;
        width: 30%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 8px;
    }
    #taskList{
      text-align: center;
      list-style-type: none;
      color: black;
      font-size: 20px;
      font-family: "Funnel Display", sans-serif;

    }
    #taskList .delete-btn{
      font-size: 12px;      
      background: red;
      color: white;
      box-shadow: 0px 0px 0px black;
      margin-left: 25px;
    }
</style>
<body>
    <div class="container">
        <div class="scroll">
            <img src="mns1.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns2.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns3.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns4.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns5.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns6.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns7.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns8.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns9.jpg" alt="" onclick="changeImage(this.src)">
            <img src="mns10.jpg" alt="" onclick="changeImage(this.src)">
        </div>
        <div class="viewer">
        <div style="position:absolute" class="time-display" id="timerDisplay">00:00</div>
            <img id="mainImage" src="mns1.jpg" alt="Image Viewer">
          </div>
    </div>

    <div class="main-box">
    <div class="timer-container">
        <h2>🍅Pomodoro</h2>

        <div class="divm">
            <label for="">Minutes: </label>
            <input type="number" id="minutes" min="0" max="59">
        </div>
        <div class="divs">
            <label for="seconds">Seconds: </label>
            <input type="number" id="seconds" min="0" max="59">
        </div>
        <button onclick="startTimer()">Start</button>
        <button onclick="resetTimer()">Reset</button>
        <div class="alert" id="alertMessage"></div>
    </div>


    <div class="audio-player">
    <!-- Audio element -->
    <audio id="audioPlayer" controls></audio>
    <br>
    <!-- Track selection buttons -->
    <div class="track-buttons">
      <button onclick="playTrack(0)">Lofi Beats</button>
      <button onclick="playTrack(1)">Coding Lofi</button>
      <button onclick="playTrack(2)">Rain Sounds</button>
      <button onclick="playTrack(3)">Binaural Beats</button>
    </div>

    <!-- Track and Time display -->
    <!-- <div class="time-display">
      <span id="trackName">Select a track</span> - <span id="currentTime">00:00</span>-<span id="duration">00:00</span>
    </div> -->
    </div>

    <div class="container1">
        <h2>📃To-Do List</h2>
        <input type="text" id="taskInput" placeholder="Add a new task...">
        <button onclick="addTask()">Add Task</button>
        <ul id="taskList"></ul>
    </div>
</div>




<script>

const tracks = [
      { name: 'Lofi Beats', src: 'lofi1.mp3' },
      { name: 'Coding Lofi', src: 'codelofi.mp3'},
      { name: 'Rain', src: 'rain.mp3'},
      { name: 'Binaural', src: 'binaural.mp3'}

    ];

    const audioPlayer = document.getElementById('audioPlayer');
    const trackNameDisplay = document.getElementById('trackName');
    const currentTimeDisplay = document.getElementById('currentTime');
    const durationDisplay = document.getElementById('duration');

    // Function to play a specific track
    function playTrack(trackIndex) {
      const selectedTrack = tracks[trackIndex];
      audioPlayer.src = selectedTrack.src;
      audioPlayer.play();
      trackNameDisplay.textContent = selectedTrack.name;

      // Update duration when track metadata is loaded
      audioPlayer.onloadedmetadata = function() {
        durationDisplay.textContent = formatTime(audioPlayer.duration);
      };
    }

    // Update current time display as the track plays
    audioPlayer.ontimeupdate = function() {
      currentTimeDisplay.textContent = formatTime(audioPlayer.currentTime);
    };

    // Format time as minutes and seconds (MM:SS)
    function formatTime(seconds) {
      const minutes = Math.floor(seconds / 60);
      const remainingSeconds = Math.floor(seconds % 60);
      return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
    }



    function changeImage(newSrc) {
      document.getElementById('mainImage').src = newSrc;
    }


    let countdownInterval; // Create a variable
    function startTimer(){
        const minutes = parseInt(document.getElementById('minutes').value) || 0;
        const seconds = parseInt(document.getElementById('seconds').value) || 0;
        const totalSeconds = minutes*60 +seconds;

        if(totalSeconds <= 0){
            document.getElementById('alertMessage').textContent = "Please Enter The Valid Value";
            return;
        }

        clearInterval(countdownInterval);
        let timeLeft =totalSeconds;
        updateDisplay(timeLeft);
        document.getElementById('alertMessage').textContent = "";
        countdownInterval =setInterval(()=>{
            timeLeft--;
            updateDisplay(timeLeft);
            if(timeLeft <= 0){
                clearInterval(countdownInterval);
                alert('Times Up');
            }
        }, 1000);
    }
    function resetTimer() {
      clearInterval(countdownInterval); // Stop the timer
      document.getElementById('timerDisplay').textContent = "00:00"; // Reset display
      document.getElementById('minutes').value = ""; // Clear input fields
      document.getElementById('seconds').value = "";
      document.getElementById('alertMessage').textContent = ""; // Clear any alerts
    }
    function updateDisplay(timeLeft) {
      const minutes = Math.floor(timeLeft / 60);
      const seconds = timeLeft % 60;
      document.getElementById('timerDisplay').textContent = 
        String(minutes).padStart(2, '0') + ":" + String(seconds).padStart(2, '0');
    }

    function addTask() {
            let taskInput = document.getElementById('taskInput');
            let taskValue = taskInput.value.trim();
            
            if (taskValue === '') {
                alert('Please enter a task');
                return;
            }

            let taskList = document.getElementById('taskList');

            // Create list item
            let li = document.createElement('li');
            li.innerHTML = taskValue;

            // Add complete task toggle
            li.addEventListener('click', function() {
                li.classList.toggle('completed');
            });

            // Create delete button
            let deleteBtn = document.createElement('button');
            deleteBtn.innerHTML = 'Done';
            deleteBtn.classList.add('delete-btn');

            deleteBtn.addEventListener('click', function() {
                taskList.removeChild(li);
            });

            li.appendChild(deleteBtn);
            taskList.appendChild(li);

            // Clear the input field
            taskInput.value = '';
        }
  </script>
</body>
</html>