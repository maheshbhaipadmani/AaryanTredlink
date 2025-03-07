<?php
$Title = "Aaryan Tradelink Sitemap | Explore Our Website Structure";
$MetaDescription = "Find everything you need on Aaryan Tradelink’s website. Browse our sitemap for quick access to our products, services, and contact details.";
$MetaKeywords = "Aaryan Tradelink sitemap, website navigation, IT products, office automation, air conditioning, refrigeration solutions, electronics trading, business technology";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
    <div class="sitemap-container">
      <h1 class="sitemap-title">Aaryan Tradelink Sitemap</h1>
      <div class="row">
        <div class="col-md-12 mb-4">
          <a href="Home" class="sitemap-main"><i class="fas fa-home"></i> Home</a>
        </div>
        <div class="col-md-12 mb-4">
          <a href="About" class="sitemap-main"><i class="fas fa-info-circle"></i> About Us</a>
        </div>
        <div class="col-md-12 mb-5">
          <a href="javascript:void(0);" class="sitemap-main"><i class="fas fa-box-open"></i> Products</a>
          <div class="row mt-2">
            <div class="col-md-3"><a href="It-Products" class="sitemap-submenu"><i class="fas fa-laptop"></i> IT Products</a></div>
            <div class="col-md-3"><a href="Office-Automation-Products" class="sitemap-submenu"><i class="fas fa-print"></i> Office Automation</a></div>
            <div class="col-md-3"><a href="Air-Conditioning-Products" class="sitemap-submenu"><i class="fas fa-wind"></i> Air Conditioning</a></div>
            <div class="col-md-3"><a href="Refrigeration-Products" class="sitemap-submenu"><i class="fas fa-snowflake"></i> Refrigeration</a></div>
          </div>
        </div>
        <div class="col-md-12 mb-5">
          <a href="javascript:void(0);" class="sitemap-main"><i class="fas fa-cogs"></i> Services</a>
          <div class="row mt-2">
            <div class="col-md-3 mb-4">
              <a href="javascript:void(0);" class="sitemap-submenu"><i class="fas fa-laptop"></i> IT Products</a>
              <a href="It-Products" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="It-Products-Repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="It-Products-Maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="javascript:void(0);" class="sitemap-submenu"><i class="fas fa-print"></i> Office Automation</a>
              <a href="Office-Automation" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="Office-Automation-Repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="Office-Automation-Maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="javascript:void(0);" class="sitemap-submenu"><i class="fas fa-wind"></i> Air Conditioning</a>
              <a href="Air-Conditioning" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="Air-Conditioning-Repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="Air-Conditioning-Maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
            <div class="col-md-3 mb-4">
              <a href="javascript:void(0);" class="sitemap-submenu"><i class="fas fa-snowflake"></i> Refrigeration</a>
              <a href="Refrigeration" class="sitemap-sub-submenu level-arrow"><i class="fas fa-book-open"></i> Introduction</a>
              <a href="Refrigeration-Repair" class="sitemap-sub-submenu level-arrow"><i class="fas fa-tools"></i> Repair</a>
              <a href="Refrigeration-Maintenance" class="sitemap-sub-submenu level-arrow"><i class="fas fa-wrench"></i> Maintenance</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <a href="Contact" class="sitemap-main"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
      </div>
    </div>
    <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>