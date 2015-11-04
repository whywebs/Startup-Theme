<?php

/**
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 * @see template_process_page()
 *
 */
?>
<!DOCTYPE html>
<!--[if lte IE 8]> <html class="no-js ie8 lte-ie9"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9 lte-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<!--<![endif]-->

<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <meta name="viewport" content="width=device-width, maximum-scale = 1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <!--[if IE 9]>
    <script src="/sites/all/themes/RuckusW/js/ie9.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?> >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
