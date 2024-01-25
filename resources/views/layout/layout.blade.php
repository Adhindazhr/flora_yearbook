<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/7a0f5de731.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
  .vl {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     .
    border-left: 6px solid rgb(254, 254, 254);
    height: 85px;
  }
  .menulagi {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    font-size: 0.875rem;
    line-height: 1.25rem;
  }
  </style>
</head>
<body>
<div class="drawer">
  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
  <div class="drawer-content">
    <!-- Page content here -->
    <label for="my-drawer" class="drawer-button"><i class="fa-solid fa-bars-staggered"></i></label>
  </div> 
  <div class="drawer-side">
    <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menulagi w-80 min-h-full bg-base-200 text-base-content"> 
      <img src='img/wave.png'/>
      <div class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
      <li><a><i class="fa-solid fa-house"></i>Dashboard</a></li>
      <li><a><i class="fa-regular fa-comment-dots"></i>Sambutan</a></li>
      <li><a><i class="fa-regular fa-user"></i>Profil Guru</a></li>
      <li><a><i class="fa-solid fa-basketball"></i>Ekstrakulikuler</a></li>
      <li><a><i class="fa-solid fa-chalkboard-user"></i>Kelas</a></li>
      <li><a><i class="fa-solid fa-paperclip"></i>Angkatan</a></li>
      </div>
    </ul>
  </div>
</div>
</body>
</html>