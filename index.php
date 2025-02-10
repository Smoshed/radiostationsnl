<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadioStations NL</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="images/favi/favicon.ico">
    <script src="https://kit.fontawesome.com/279267bf5f.js" crossorigin="anonymous"></script>
</head>
<body>
<script src="https://kit.fontawesome.com/279267bf5f.js" crossorigin="anonymous"></script>
    <div class="container">
        <div class="center">
            <a href="../radiostationsnl"><img src="images/radiostationsnllogo.png" alt="Site logo" width="500"></a>
            <p>Nederlandse radiostations op één website. Zonder advertenties.</p>
        </div>

        <!-- Audio Player -->
<div id="player-container">
    <div id="station-logo-container" style="display:block;">
        <img id="station-logo" src="images/main.jpg" alt="Radio main" width="500">
    </div>
    <div id="loading-indicator" style="display: none;">Loading...</div>
    <audio id="radio-player" controls>
        <source src="" id="radio-source" type="audio/mp3">
        Je browser ondersteunt geen audio.
    </audio>
    <div id="player-controls">
        <button id="play-button" aria-label="Play or Pause Button">
            <i class="fas fa-play" aria-hidden="true"></i>
        </button>
        <input type="range" id="volume-slider" value="50" max="100" aria-label="Volume Slider">&ensp;<i class="fa-solid fa-volume-high"></i>
    </div>
    <div id="progress-bar-container">
        <div id="current-time"></div>
    </div>
    <!-- Equalizer Canvas -->
    <canvas id="equalizer" width="500" height="100"></canvas>
</div>


        <!-- Radio 10 -->
        <div id="stations-container">
            <div class="station" data-station="https://my.life42.nl/h4o3" data-logo="images/stations/radio-10.webp">
                <img src="images/stations/radio-10.webp" alt="Radio 10">
                <h2>Radio 10</h2>
            </div>
            <!-- 100%NL -->
            <div class="station" data-station="https://my.life42.nl/83no" data-logo="images/stations/100-nl.webp">
                <img src="images/stations/100-nl.webp" alt="100% NL">
                <h2>100% NL</h2>
            </div>
            <!-- 3fm -->
            <div class="station" data-station="https://my.life42.nl/djcx" data-logo="images/stations/3fm.webp">
                <img src="images/stations/3fm.webp" alt="3FM">
                <h2>3FM</h2>
            </div>
            <!-- 538 -->
            <div class="station" data-station="https://my.life42.nl/wbj2" data-logo="images/stations/radio-538.webp">
                <img src="images/stations/radio-538.webp" alt="538">
                <h2>538</h2>
            </div>
            <!-- BNR -->
            <div class="station" data-station="https://my.life42.nl/iao9" data-logo="images/stations/bnr.webp">
                <img src="images/stations/bnr.webp" alt="BNR">
                <h2>BNR</h2>
            </div>
            <!-- FunX -->
            <div class="station" data-station="https://my.life42.nl/4mqb" data-logo="images/stations/funx.webp">
                <img src="images/stations/funx.webp" alt="FunX">
                <h2>FunX</h2>
            </div>
            <!-- Radio 1 -->
            <div class="station" data-station="https://my.life42.nl/g7l1" data-logo="images/stations/npo-radio-1.webp">
                <img src="images/stations/npo-radio-1.webp" alt="Radio 1">
                <h2>Radio 1</h2>
            </div>
            <!-- Radio 2 -->
            <div class="station" data-station="https://my.life42.nl/h6tw" data-logo="images/stations/npo-radio-2.webp">
                <img src="images/stations/npo-radio-2.webp" alt="Radio 2">
                <h2>Radio 2</h2>
            </div>
            <!-- Radio 4 -->
            <div class="station" data-station="https://my.life42.nl/or3d" data-logo="images/stations/npo-radio-4.webp">
                <img src="images/stations/npo-radio-4.webp" alt="Radio 4">
                <h2>Radio 4</h2>
            </div>
            <!-- Radio 5 -->
            <div class="station" data-station="https://my.life42.nl/nqtc" data-logo="images/stations/npo-radio-5.webp">
                <img src="images/stations/npo-radio-5.webp" alt="Radio 5">
                <h2>Radio 5</h2>
            </div>
            <!-- Qmusic -->
            <div class="station" data-station="https://my.life42.nl/rm1r" data-logo="images/stations/qmusic.webp">
                <img src="images/stations/qmusic.webp" alt="Qmusic">
                <h2>Qmusic</h2>
            </div>
            <!-- SkyRadio -->
            <div class="station" data-station="https://my.life42.nl/aqto" data-logo="images\stations\skyradio.webp">
                <img src="images\stations\skyradio.webp" alt="SkyRadio">
                <h2>SkyRadio</h2>
            </div>
            <!-- SLAM! -->
            <div class="station" data-station="https://my.life42.nl/a1y2" data-logo="images/stations/slam.webp">
                <img src="images/stations/slam.webp" alt="SLAM!">
                <h2>SLAM!</h2>
            </div>
            <!-- Sublime -->
            <div class="station" data-station="https://my.life42.nl/q703" data-logo="images/stations/sublime.webp">
                <img src="images/stations/sublime.webp" alt="Sublime">
                <h2>Sublime</h2>
            </div>
            <!-- Veronica -->
            <div class="station" data-station="https://my.life42.nl/6f51" data-logo="images/stations/veronica.webp">
                <img src="images/stations/veronica.webp" alt="Veronica">
                <h2>Veronica</h2>
            </div>
        </div>
    </div>

<br>
    <script>
        const stations = document.querySelectorAll('.station');
        const radioPlayer = document.getElementById('radio-player');
        const radioSource = document.getElementById('radio-source');
        const stationLogoContainer = document.getElementById('station-logo-container');
        const stationLogo = document.getElementById('station-logo');
        const playButton = document.getElementById('play-button');
        const volumeSlider = document.getElementById('volume-slider');
        const currentTime = document.getElementById('current-time');
        const loadingIndicator = document.getElementById('loading-indicator');

        // Stel de standaard afbeelding in bij het laden van de pagina
        stationLogo.setAttribute('src', 'images/stations/main.jpg');
        stationLogoContainer.style.display = 'block';

        stations.forEach(station => {
            station.addEventListener('click', () => {
                stations.forEach(s => s.classList.remove('active'));
                station.classList.add('active');
                
                const streamUrl = station.getAttribute('data-station');
                const logoUrl = station.getAttribute('data-logo');

                radioSource.setAttribute('src', streamUrl);
                radioPlayer.load();
                radioPlayer.play();

                stationLogo.setAttribute('src', logoUrl);
                stationLogoContainer.style.display = 'block';
                playButton.innerHTML = '<i class="fas fa-pause"></i>';
            });
        });

        playButton.addEventListener('click', () => {
            if (radioPlayer.paused) {
                radioPlayer.play();
                playButton.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                radioPlayer.pause();
                playButton.innerHTML = '<i class="fas fa-play"></i>';
            }
        });

        volumeSlider.addEventListener('input', () => {
            radioPlayer.volume = volumeSlider.value / 100;
        });

        radioPlayer.addEventListener('waiting', () => {
            loadingIndicator.style.display = 'block';
        });

        radioPlayer.addEventListener('playing', () => {
            loadingIndicator.style.display = 'none';
        });

        radioPlayer.volume = 0.5;
    </script>
    <script>
        const stations = document.querySelectorAll('.station');
const radioPlayer = document.getElementById('radio-player');
const radioSource = document.getElementById('radio-source');
const stationLogoContainer = document.getElementById('station-logo-container');
const stationLogo = document.getElementById('station-logo');
const playButton = document.getElementById('play-button');
const volumeSlider = document.getElementById('volume-slider');
const loadingIndicator = document.getElementById('loading-indicator');

// Equalizer Setup
const canvas = document.getElementById('equalizer');
const ctx = canvas.getContext('2d');
const audioContext = new (window.AudioContext || window.webkitAudioContext)();
const analyser = audioContext.createAnalyser();
const dataArray = new Uint8Array(analyser.frequencyBinCount);

// Verbind de audio speler met de analyser
const source = audioContext.createMediaElementSource(radioPlayer);
source.connect(analyser);
analyser.connect(audioContext.destination);

function draw() {
    requestAnimationFrame(draw);
    analyser.getByteFrequencyData(dataArray);

    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    const barWidth = (canvas.width / dataArray.length) * 2.5;
    let barHeight;
    let x = 0;

    for (let i = 0; i < dataArray.length; i++) {
        barHeight = dataArray[i] / 2;

        ctx.fillStyle = 'rgb(' + (barHeight + 100) + ',50

    </script>
</body>
</html>
