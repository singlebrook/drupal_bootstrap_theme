<nav role="navigation" class="navbar navbar-branded site-nav">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="brand">
        <h1><?php print $site_name; ?></h1>
      </a>
        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#main-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <?php if ($page['navbar']): ?>
            <?php print render($page['navbar']); ?>
          <?php endif; ?>
        </div>
    </div>
  </div>
</nav>
<?php if ($page['banner']): ?>
<!-- #banner -->
<div id="banner" class="container-fluid">
  <?php print render($page['banner']); ?>
</div>
<!-- EOF:#banner -->
<?php endif; ?>
<!-- #page -->
<div id="page" class="clearfix">

  <?php if ($page['highlighted']):?>
  <!-- #top-content -->
  <div id="top-content" class="clearfix">
    <div class="container">
      <!-- #top-content-inside -->
      <div id="top-content-inside" class="clearfix">
        <div class="row">
          <div class="col-md-12">
            <?php print render($page['highlighted']); ?>
          </div>
        </div>
      </div>
      <!-- EOF:#top-content-inside -->
    </div>
  </div>
  <!-- EOF: #top-content -->
  <?php endif; ?>
  <!-- #main-content -->
  <div id="main-content">
    <div class="container">
      <!-- #messages-console -->
      <?php if ($messages):?>
      <div id="messages-console" class="clearfix">
        <div class="row">
          <div class="col-md-12">
            <?php print $messages; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <!-- EOF: #messages-console -->
      <div class="row">
        <section class="<?php print $main_grid_class; ?>">
          <!-- #main -->
          <div id="main" class="clearfix">
            <?php if ($page['promoted']):?>
            <!-- #promoted -->
              <div id="promoted" class="clearfix">
                <div id="promoted-inside" class="clearfix">
                  <?php print render($page['promoted']); ?>
                </div>
              </div>
            <!-- EOF: #promoted -->
            <?php endif; ?>
            <!-- EOF:#content-wrapper -->
            <div id="content-wrapper">
              <?php if ($page['help']): ?>
                <div class='help-section'>
                  <?php print render($page['help']); ?>
                </div>
              <?php endif; ?>
              <!-- #tabs -->
              <?php if ($tabs):?>
                <div class="tabs">
                  <?php print render($tabs); ?>
                </div>
              <?php endif; ?>
              <!-- EOF: #tabs -->
              <!-- #action links -->
              <?php if ($action_links):?>
                <ul class="action-links">
                  <?php print render($action_links); ?>
                </ul>
              <?php endif; ?>
              <!-- EOF: #action links -->
              <?php print render($title_prefix); ?>
              <?php if ($title && !$is_front):?>
                <h1 class="page-title"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
            </div>
            <!-- EOF:#content-wrapper -->
          </div>
          <!-- EOF:#main -->
        </section>
        <?php if ($page['sidebar_first']):?>
        <aside class="<?php print $sidebar_first_grid_class; ?>">
          <!--#sidebar-first-->
          <section id="sidebar-first" class="sidebar clearfix">
            <?php print render($page['sidebar_first']); ?>
          </section>
          <!--EOF:#sidebar-first-->
        </aside>
        <?php endif; ?>
        <?php if ($page['sidebar_second']):?>
        <aside class="<?php print $sidebar_second_grid_class; ?>">
          <!--#sidebar-second-->
          <section id="sidebar-second" class="sidebar clearfix">
            <?php print render($page['sidebar_second']); ?>
          </section>
          <!--EOF:#sidebar-second-->
        </aside>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- EOF:#main-content -->
  <?php if ($page['bottom_content']):?>
    <!-- #bottom-content -->
    <div id="bottom-content">
        <div class="container">
          <?php print render($page['bottom_content']); ?>
        </div>
    </div>
    <!-- EOF: #bottom-content -->
<?php endif; ?>
</div>
<!-- EOF:#page -->
<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']):?>
<!-- #footer -->
<footer id="footer" class="clearfix">
  <div class="container">
    <!-- #footer-inside -->
    <div id="footer-inside" class="clearfix">
      <div class="row">
        <div class="footer-block col-xs-12 col-sm-4"><?php print render($page['footer_first']); ?></div>
        <div class="footer-block col-xs-12 col-sm-4"><?php print render($page['footer_second']); ?></div>
        <div class="footer-block col-xs-12 col-sm-4"><?php print render($page['footer_third']); ?></div>
      </div>
    </div>
    <!-- EOF: #footer-inside -->
  </div>
</footer>
<!-- EOF #footer -->
<?php endif; ?>

<footer id="subfooter" class="clearfix">
  <div class="container">
    <!-- #subfooter-inside -->
    <div id="subfooter-inside" class="clearfix">
      <div class="row">
        <div class="col-md-12">
          <ul id="social-icons-footer">
          <?php if (theme_get_setting('facebook_url')): ?>
            <li>
              <a href="<?php theme_get_setting('facebook_url'); ?>" class="symbol facebook" title="circlefacebook"></a>
            </li>
          <?php endif; ?>
          <?php if (theme_get_setting('twitter')): ?>
            <li>
              <a href="<?php theme_get_setting('twitter'); ?>" class="symbol twitter" title="circlebird"></a>
            </li>
          <?php endif; ?>
            <li>
              <a href="rss.xml" class="symbol rss" title="circlerss"></a>
            </li>
          </ul>
          <div class="subfooter-area">
            <?php if ($page['subfooter']):?>
              <?php print render($page['subfooter']); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- EOF: #subfooter-inside -->
  </div>
</footer>
<!-- EOF:#subfooter -->
