<?php
// Optional: You can dynamically generate playlist or session control here
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Music Player Playlist</title>
  <style>
    /* Your CSS here (unchanged) */
  </style>
</head>
<body>
  <div style="display: flex;">

    <!-- Sidebar -->
    <div id="sidebar" style="width: 300px; background: #1e1e1e; padding: 20px; overflow-y: auto; height: 100vh;">
      <h2 style="color:#1db954;">📻 Playlist</h2>
      <div id="playlistSidebar" style="margin-top: 20px;"></div>
    </div>

    <!-- Main Player Section -->
    <div style="flex: 1; padding: 40px;">
      <h1>🎶 Playlist Music Player</h1>
      <div>
        <input type="text" id="searchInput" placeholder="Search for a song..." style="padding:10px; width:60%; border-radius:10px; border:none;">
        <div id="searchResults" style="margin-top:20px;"></div>
      </div>

      <div style="margin-bottom: 30px;">
        <input type="text" id="searchInput" placeholder="Search song title..." style="padding:10px; width:30%; border-radius:10px; border:none;">
        <select id="albumFilter" style="padding:10px; border-radius:10px; margin-left:10px;">
          <option value="">🎵 Filter by Album</option>
        </select>
        <select id="artistFilter" style="padding:10px; border-radius:10px; margin-left:10px;">
          <option value="">🎤 Filter by Artist</option>
        </select>
        <div id="searchResults" style="margin-top:20px;"></div>
      </div>

      <!-- Music Player UI -->
      <div class="player">
        <img src="" alt="Album Cover" class="cover" id="coverImage">
        <div class="song-title" id="songTitle">No song loaded</div>
        <audio id="audioPlayer"></audio>
        <div class="controls">
          <button onclick="prevSong()">⏮️ Previous</button>
          <button onclick="playPause()">▶️ Play / ⏸️ Pause</button>
          <button onclick="nextSong()">⏭️ Next</button>
          <button onclick="toggleMute()">🔇 Mute</button>
          <button onclick="toggleLoop()">🔁 Loop</button>
          <button onclick="toggleShuffle()">🔀 Shuffle</button>
        </div>

        <div class="sliders">
          <div class="time-display">
            <span id="currentTime">0:00</span> / <span id="totalTime">0:00</span>
          </div>
          <input type="range" id="seekBar" value="0" min="0" step="1"><br>
          Volume:
          <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="1">
        </div>
      </div>
    </div>
  </div>

  <script>
    // JavaScript part: playlist, filtering, player logic (exactly as you already had it)
    // Place your full <script> content here without changes
  </script>
</body>
</html>
