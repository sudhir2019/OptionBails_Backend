<div class="sidebar-wrapper" data-layout="fill-svg">
  <div>

    <div class="logo-wrapper" style="height: 70px; width: 245px;">
      <!-- <a href="index.html">
                <img class="img-fluid" src="< echo base_url();?>/assets/images/logo/logo-icon.png" alt="" height="30px" width ="30px">
                <h2 style="color: white; margin-left:40px; ">OptionBails</h2>
              </a> -->
      <a href="index.html">
        <div style="position: absolute;">
          <img class="img-fluid" src="/assets/images/logo/l.png" alt="" height="30px" width="30px">
        </div>

        <h2 style="color: white; margin-left:40px; ">OptionBails</h2>
      </a>
      <!-- 
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle"> 
                  <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
              </div> -->
    </div>


    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/logo/logo-icon.png" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/logo/logo-icon.png" alt=""></a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="pin-title sidebar-main-title">
            <div>
              <h6>Pinned</h6>
            </div>
          </li>

          <!-- Users -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="/dashboard">
              <svg class="fill-icon">
                <use href="#"></use>
              </svg><span>Dashboard</span></a>

          </li>

          <!-- Indices -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
              <svg class="fill-icon">
                <use href="/createMarket"></use>
              </svg><span>Indices Master</span></a>
            <ul class="sidebar-submenu">
              <li><a href="<?= base_url("createIndices") ?>">Create Indice/Match</a></li>
              <li><a href="<?= base_url("createteam") ?>">Create Teams</a></li>
              <li><a href="/createIndice">Create User</a></li>
       
            </ul>
          </li>

          <!-- Users -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
              <svg class="fill-icon">
                <use href="/createMarket"></use>
              </svg><span>Total Users</span></a>
            <ul class="sidebar-submenu">
              <li><a href="/createIndice">Mobile Users</a></li>
              <li><a href="/createIndice">Admin Users</a></li>

            </ul>
          </li>

          <!-- Wallets -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
              <svg class="fill-icon">
                <use href="/createMarket"></use>
              </svg><span>Wallet Master</span></a>
            <ul class="sidebar-submenu">
              <li><a href="/createIndice">Generate Points</a></li>
              <li><a href="/createIndice">Transfer Points</a></li>
              <li><a href="/createIndice">Deduct Points</a></li>

            </ul>
          </li>

          <!-- Reports -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
              <svg class="fill-icon">
                <use href="#"></use>
              </svg><span>Reports</span></a>
            <ul class="sidebar-submenu">

              <li><a href="/createIndice">List Mobile Users</a></li>
              <li><a href="/createIndice">List Backend Users</a></li>
              <li><a href="/createIndice">Matches Report</a></li>
              <li><a href="/createIndice">Indices Report</a></li>
              <li><a href="/createIndice">Wallet Report</a></li>
              <li><a href="/createIndice">Transfer Report</a></li>
              <li><a href="/createIndice">Deduct Report</a></li>
              <li><a href="/createIndice">Withdraw Report</a></li>
              <li><a href="/createIndice">P&L Report</a></li>
              <li><a href="/createIndice">Volume Report</a></li>

            </ul>
          </li>


          <!-- Reports -->
          <li class="sidebar-main-title">
          </li>
          <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title" href="#">
              <svg class="fill-icon">
                <use href="#"></use>
              </svg><span>Admin</span></a>
            <ul class="sidebar-submenu">
              <li><a href="/createIndice">Change Password</a></li>
              <li><a href="/createIndice">Set Comission</a></li>

            </ul>
          </li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>