<header id="header">
  <a href="<?= base_url() ?>" class="logo">BMS</a>
</header>

<nav id="nav">
  <ul class="links">
    <li <?php if($this->uri->segment(1)==""){echo " div class ='active' ";} ?>><?= anchor(base_url(), 'HOME')?></li>
    <li <?php if($this->uri->segment(1)=="about"){echo " div class ='active' ";} ?> ><?= anchor('about', 'ABOUT US' ) ?> </li>
    <li <?php if($this->uri->segment(1)=="video"){echo " div class ='active' ";} ?> ><?= anchor('video', 'OUR VIDEOS' ) ?> </li>
    <li <?php if($this->uri->segment(1)=="photo"){echo " div class ='active' ";} ?> ><?= anchor('photo', 'OUR PHOTOS' ) ?> </li>
    <li <?php if($this->uri->segment(1)=="contact"){echo " div class ='active' ";} ?> ><?= anchor('contact', 'CONTACT US' ) ?> </li>
  </ul>
  <ul class="icons">
    <li><a href="https://twitter.com/bali_m_shuffle" target="_blank" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="https://www.facebook.com/BaliMassiveShuffle" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="https://www.instagram.com/official_bms/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    <li><a href="https://www.youtube.com/user/BaliMShuffle" target="_blank" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
  </ul>
</nav>
