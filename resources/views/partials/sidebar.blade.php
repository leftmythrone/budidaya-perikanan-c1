<div class="sidebar">
    <div class="logo">
      {{-- <img src="/img/Logo.png" alt=""> --}}
    </div>
    <br>
    <div class="sideheading">
      {{-- <h1>PT. Sukaiwaks</h1>
      <h4>Aplikasi Pengelolaan & Pembudidayaan Ikan Nishikigoi</h4> --}}
    </div>
  
    <br><br><br><br><br>
    <ul>



      @if ( auth()->user()->levels->jenis_peran === 'Admin' )
      {{-- 
      |--------------------------------------------------------------------------
      | PAGE DASHBOARD
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/home.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/dashboard/admin">Dashboard / Dasbor</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE FISH
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/fish.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/perikanan">Fish / Perikanan</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE SCHEDULE
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/date.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/penjadwalan">Schedule / Jadwal</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE SALES 
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/cart.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/penjualan">Sales / Penjualan</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE REPORT
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/report.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/laporan">Stock / Stok</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE USER
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/user.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/pengguna">User / Pengguna</a>
        </div>
      </li>

            {{-- 
      |--------------------------------------------------------------------------
      | PAGE USER
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/history.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/riwayat">History / Riwayat</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE SETTING
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/setting.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/pengaturan">Setting / Pengaturan </a>
        </div>
      </li>

      @elseif ( auth()->user()->levels->jenis_peran === 'Employee' )

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE DASHBOARD
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/home.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/dashboard/admin">Dashboard / Dasbor</a>
        </div>
      </li>

            {{-- 
      |--------------------------------------------------------------------------
      | PAGE FISH
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/fish.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/perikanan">Fish / Perikanan</a>
        </div>
      </li>

      {{-- 
      |--------------------------------------------------------------------------
      | PAGE REPORT
      |-------------------------------------------------------------------------- 
      --}}

      <li>
        {{-- ICON --}}
        <div class="sideicon">
          <div class="wrapper">
            <img src="/img/report.png" alt="">
          </div> 
        </div>
        {{-- FONT --}}
        <div class="sidefont">
          <a href="/laporan">Stock / Stok</a>
        </div>
      </li>












      
      @else
      {{-- 
      |--------------------------------------------------------------------------
      | PAGE DASHBOARD
      |-------------------------------------------------------------------------- 
      --}}

        <li>
          {{-- ICON --}}
          <div class="sideicon">
            <div class="wrapper">
              <img src="/img/home.png" alt="">
            </div> 
          </div>
          {{-- FONT --}}
          <div class="sidefont">
            <a href="/dashboard/user">Home / Ikan</a>
          </div>
        </li>
      @endif

    {{-- 
    |--------------------------------------------------------------------------
    | PAGE LOGOUT
    |-------------------------------------------------------------------------- 
    --}}

    <li>
      {{-- ICON --}}
      <div class="sideicon">
        <div class="wrapper">
          <img src="/img/logout.png" alt="">
        </div> 
      </div>
      {{-- FONT --}}
      <div class="sidefont">
        <a href="/logout">Logout</a>
      </div>
    </li>
      
    </ul>
</div>
  
  