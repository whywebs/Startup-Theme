<?php

/**
* Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['billboard']: Items for the billboard content region.
 * - $help['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['copyright']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see whywebs_startup_process_page()
 * @see html.tpl.php
 */
?>


  <header >

  <?php if ($page['addlblock'] || $page['socialblock']) { ?>
              <?php print render($page['addlblock']); ?>
              <?php print render($page['socialblock']); ?>
               <?php print render($page['extra_top_links']); ?>
                <?php print render($page['extra_top_social']); ?>
<?php }; ?>
        <?php print render($page['search1']); ?>
                    <!-- MAIN MENU - START -->
      <nav class="mainMenu">
         <?php if ($page['header_menu']) :?>
          <?php print render($page['header_menu']);  ?>
        <?php endif; ?>

        <?php if ($page['header_menu']!=TRUE): ?>
          <?php if ($primary_nav): print $primary_nav; endif; ?>
          <?php if ($secondary_nav): print $secondary_nav; endif; ?>
        <?php endif; ?>

                    <!-- MAIN MENU - END -->

  </header>




     <!-- MAIN CONTENT START -->

  <?php if ($page['banner2']): ?>
      <?php print render($page['banner2']); ?>
  <?php endif; ?>

 <div id="mainCotent">
    <section class="main">

      <?php if ($messages = render($messages)): ?>
        <div id="messages">
          <div class="section clearfix">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php if ($action_links = render($action_links)): ?>
        <ul class="links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <div class="page-meta"><span></span><?php print $breadcrumb; ?></div>
      <?php endif; ?>


<!-- Main Placeholder -->
        
          <div class="site-search">
        <?php print render($page['searchbtm']); ?>
      </div>

<div >
        <div >


        <?php print render($title_prefix); ?>
        <?php if ($title = render($title)): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php print render($page['help']); ?>

        <?php print render($page['content']); ?>

        </div>
    </div>
    <!-- LEFT COL END -->


   <!-- RIGHT COL START -->
    <div >
      <?php if ($page['featured'] || $page['triptych_first']): ?>
          <?php print render($page['featured']); ?>
          <?php print render($page['triptych_first']); ?>
      <?php endif; ?>
</div>

    <!-- RIGHT COL END -->

                    <!-- Main Placeholder END -->

                <!-- MAIN MENU END -->

<footer>
    <!-- FOOTER MENU - START -->
    <div class="footerMenu widerMenu">
   <div class="col">
    <?php if($page['footer_firstcolumn']) { ?>
    <?php print render($page['footer_firstcolumn']); ?>
   <?php } else { ?>
                    <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->
                <?php }; ?>
              </div>
<div class="col">
    <?php if($page['footer_secondcolumn']) { ?>
   <?php print render($page['footer_secondcolumn']); ?>
   <?php } else { ?>
                                        <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                <?php }; ?>
              </div>
<div class="col">
    <?php if($page['footer_thirdcolumn']) { ?>
   <?php print render($page['footer_thirdcolumn']); ?>
   <?php } else { ?>
                                        <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                <?php }; ?>
              </div>
              <div >
    
              <?php if($page['footer_fourthcolumn']) { ?>
   <?php print render($page['footer_fourthcolumn']); ?>
   <?php } else { ?>
                    <!-- You can add something that you don't want to change it or static for a long period of time to make the process work less -->

                        <?php }; ?>
    </div>

    <!-- FOOTER MENU - END -->
    <!-- FOOTER INFO - START -->
    <div class="footerInfo">
        <p>
           
            2015
            <span>All Rights Reserved | <?php if($page['copyright']): ?>
   <?php print render($page['copyright']); ?>
   <?php endif; ?> Powered by: <a href="http://Whywebs.com/">Whywebs</a></span>
        </p>
    </div>
    <!-- FOOTER INFO - END -->
</footer>

