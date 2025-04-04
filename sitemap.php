<?php
$Title = "Aaryan Tradelink Sitemap | Explore Our Website Structure";
$MetaDescription = "Easily navigate Aaryan Tradelink’s website. Browse our sitemap for quick access to products, services & contact details. Find what you need in one place!";
$MetaKeywords = "Aaryan Tradelink sitemap, website navigation, IT products, office automation, air conditioning, refrigeration solutions, electronics trading, business technology";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
    <div class="sitemap-container">
      <h1 class="sitemap-title">Aaryan Tradelink Sitemap</h1>
      <div class="row">
        <div class="col-md-12 mb-4">
          <a href="home" class="sitemap-main"><i class="fas fa-home"></i> Home</a>
        </div>
        <div class="col-md-12 mb-4">
          <a href="about" class="sitemap-main"><i class="fas fa-info-circle"></i> About Us</a>
        </div>
        <div class="col-md-12 mb-5">
          <a href="/products" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-main"><i class="fas fa-box-open"></i> Products</a>
          <div class="row mt-2">
            <div class="col-md-3"><a href="it-products" class="sitemap-submenu"><i class="fas fa-laptop"></i> IT Products</a></div>
            <div class="col-md-3"><a href="office-automation-products" class="sitemap-submenu"><i class="fas fa-print"></i> Office Automation</a></div>
            <div class="col-md-3"><a href="air-conditioning-products" class="sitemap-submenu"><i class="fas fa-wind"></i> Air Conditioning</a></div>
            <div class="col-md-3"><a href="refrigeration-products" class="sitemap-submenu"><i class="fas fa-snowflake"></i> Refrigeration</a></div>
          </div>
        </div>
        <div class="col-md-12 mb-5">
          <a href="/Services" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-main"><i class="fas fa-cogs"></i> Services</a>
          <div class="row mt-2">
            <div class="col-md-3 mb-4">
              <a href="/it-products" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-submenu"><i class="fas fa-laptop"></i> IT Products</a>
              <a href="it-products" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="It-Products-Repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="it-products-maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="/office-automation" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-submenu"><i class="fas fa-print"></i> Office Automation</a>
              <a href="office-automation" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="office-automation-repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="office-automation-maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="/air-Conditioning" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-submenu"><i class="fas fa-wind"></i> Air Conditioning</a>
              <a href="air-conditioning" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="air-conditioning-repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="air-conditioning-maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="/refrigeration" onclick="event.preventDefault(); toggleDropdown(this);" class="sitemap-submenu"><i class="fas fa-snowflake"></i> Refrigeration</a>
              <a href="refrigeration" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="refrigeration-repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="refrigeration-maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <a href="contact" class="sitemap-main"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
      </div>
    </div>
    <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>