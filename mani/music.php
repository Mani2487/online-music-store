<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Music</title>
    <style  type="text/css">

*{
  margin:0px;
  padding:0px;
  box-sizing: border-box;
  background-image:
}
body{
 background-image:url('image2/4.jpg');
     background-size: cover;
}
.main{
  margin: auto;
  width: 50%;
}
.main input,button{
  width:75%;
  border:2px solid white;
  border-right:0px;
  font-size: 18px;
  padding:12px;
  background-color: transparent;
  color:white;
}
.main input:hover{
  opacity: .8;
}
.main button{
  width:25%;
  background-color: #eee;
  color:black;
  transition: all 0.3s;
  float: right;
  border-left:0px;
}
.main button:hover{
  opacity: .8;
}
body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(0deg, rgba(119,173,157,1) 27%, rgba(218,249,234,1) 75%);
}
#card {
  display: flex;
  justify-content: center;
  align-items: stretch;
  border-radius: 20px;
  box-shadow: 0 0 20px rgba(0,0,0,.5);
  #display {
    width: 60%;
    border-radius: 20px 0 0 20px;
    background: rgba(255,255,255,.5);
    backdrop-filter: blur(30px) hue-rotate(20deg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 1em;
    > * {
      text-align: center;
    }
    #art {
      height: 200px;
      margin: 0 auto;
    }
  }
  #list {
    width: 40%;
    border-radius: 0 20px 20px 0;
    background: transparent;
    display: flex;
    flex-direction: column;
    .item {
      padding: 0 1em;
      background: white;
      transition: all .3s ease;
      &:first-of-type {
        border-radius: 0 20px 0 0;
      }
      &:last-of-type {
        border-radius: 0 0 20px 0;
      }
      &.is-active {
        background: rgba(255,255,255,.5);
        backdrop-filter: blur(30px) hue-rotate(20deg);
        transition: all .3s ease;
      }
      &:hover {
        cursor: pointer;
      }
    }
  }
}
</style>
	<script>  
  document.addEventListener('DOMContentLoaded', () => {
   const songs = [
    'Juice WRLD Ft Benny Blanco - Real Shit',
    'Lil Baby, Lil Durk ft Rodwave - Rich Off Pain',
    'Polo G – I Know'
];
  for (x = 0; x < src.length; x++) {
    var s = src[x];
    var number = parseInt(x) + 1;
    var artist = document.createTextNode(number + ": " + s[0]);
    var track_name = document.createTextNode(s[1]);
    
    var listItem = document.createElement('div');
    var artist_text = document.createElement('h3');
    var track_text = document.createElement('p');
    
    artist_text.appendChild(artist);
    track_text.appendChild(track_name);
    
    listItem.appendChild(artist_text);
    listItem.appendChild(track_text);
    
    listItem.classList.add('item');
    listItem.dataset.index = x;
    
    document.getElementById('list').appendChild(listItem);
  }
  displayTrack(0);
  
  var listItems = document.querySelectorAll('.item');
  listItems.forEach(el => {
    el.onclick = () => {
      displayTrack(el.dataset.index);
    };
  });
  
  function displayTrack(x) {
    var active = document.querySelector('.is-active');
    if (active) {
      active.classList.remove('is-active'); 
    }
    var el = document.getElementById('list').children[x];
    el.classList.add('is-active');
    var s = src[x],
        artist = s[0],
        track = s[1],
        audio = s[2],
        img = s[3],
        number = parseInt(x) + 1;
    document.getElementById('title').innerText = number + ": " + artist;
    document.getElementById('song_title').innerText = track;
    var albumArt = document.getElementById('art');
    albumArt.src = img;
    albumArt.alt = artist + " " + track;
    document.getElementById('audio').src = audio;
  }
})
  
  </script>  
  </head>
  <body>
  <div class="main">
  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <input type="text" name="search" placeholder="Search..">
     <input type="submit" name="submit" value="submit" />
	 </form>
</div>
<div id='card'>
  <div id='display'>
    <div id='header'>
      <h1 id='title'></h1>
      <p>
        <span id='song_title'></span>
      </p>
    </div>
    <div id='image'>
      <img src='' alt='' id='art' />
    </div>
	<?php 
	if(isset($_POST["submit"])){
		$search=$_POST["search"];
	$sql=mysqli_query($conn,"select * from songs where name='$search'");
	while($r=mysqli_fetch_array($sql)){
	?>
    <audio controls src='uploads/<?php echo $r["file"]; ?>' id='audio'>
    </audio>
	<?php
	}
	$sql=mysqli_query($conn,"select * from songs where movie='$search'");
	while($r=mysqli_fetch_array($sql)){
	?>
    <audio controls src='uploads/<?php echo $r["file"]; ?>' id='audio'>
    </audio>
	<?php
	}
	
	}
	?>
  </div>
  <div id='list'>
  </div>
</div>
  </body>
</html>