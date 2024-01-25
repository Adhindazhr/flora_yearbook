<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
  .vl {
    border-left: 6px solid rgb(254, 254, 254);
    height: 85px;
  }
  </style>
</head>
<body>
<div class="card lg:card-side bg-white shadow-xl m-14 mt-20 h-3/4">
    <div class="card-body overflow-hidden relative lg:rounded-tr-none md:rounded-tr-xl sm:rounded-b-none sm:rounded-t-xl" style="background-color: #557A46;">
        <div class="mt-20 ">
                <!-- <div class="vl flex-row"></div> -->
                <div style="margin-top:-30px; margin-left:10px; color: white; padding-left: 10px;" class="vl">
                    <p class="font-sans" style="margin-bottom: 3px;">SMK Negeri 1 Kota Bekasi</p>
                    <h1 class="card-title" style="font-size: 45px; margin-bottom: 5px;">SELAMAT DATANG</h1>
                    <p class="z-20">Silahkan login untuk mengakses Buku Tahunan Sekolah!</p>
                </div>
                <div class="card-actions min-h-[38rem] max-h-full" style="margin-left: -4rem;">
                    <img src="Untitled450_20230810134837 1.png" class="absolute bottom-0 ms-[-3rem]" alt="Album"/>
                </div>
        </div>
    </div>
    <div class="card-body justify-center" style="margin-left: 70px; margin-right: 70px; margin-top: 1rem;">
      <h1 class="card-title" style="color: black; font-size: 40px;"><b>LOGIN</b></h1>
      <!-- <p class="m-0">Masukkan username dan Password</p> -->
      <div style="margin-left: rem;">
        <label class="form-control w-full max-w-xs">
            <div class="label">
            <span class="label-text" style="color: black;">Username</span>
            </div>
            <input type="text" placeholder="Masukkan username anda" class="input input-ghost w-full max-w-xs" />
        </label>
        <label class="form-control w-full max-w-xs">
            <div class="label">
            <span class="label-text" style="color: black;">Password</span>
            </div>
            <input type="password" placeholder="Masukkan passowrd anda" class="input input-ghost w-full max-w-xs" />
        </label>
      </div>
      <div class="card-actions" style="margin-top: 15px;">
        <button class="btn btn-black lg:min-w-80 sm:max-w-40 text-white">Sign In</button>
        <!-- <button class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg">Sign In</button> -->
      </div>
    </div>
  </div>
</body>
</html>