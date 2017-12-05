<?php
  echo Theme::charset('utf-8');
  echo Theme::viewport('width=device-width, initial-scale=1');

  echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';

  echo Theme::headTitle();
  echo Theme::headDescription();

  echo Theme::favicon('img/favicon.png');

  echo Theme::fontAwesome();

  echo '<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=cyrillic,greek,vietnamese" rel="stylesheet">';
  echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
  echo Theme::css('css/style.css');

  // Load plugins with the hook siteHead
  Theme::plugins('siteHead');
?>
