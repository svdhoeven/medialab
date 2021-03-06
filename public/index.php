<?php
//Include router, bootstrapping all the php stuff
include_once('../web/routing/router.php');
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8"/>
  <meta name="HandheldFriendly" content="true"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="./bundles/final.css" type="text/css"/>
  <title><?= isset($pageData) && isset($pageData['title']) ? $pageData['title'] : 'Buurtwijzer'?></title>
</head>
<body class="<?= $controller ?>">
  <?php
  //Include the body, where all content and view specific structure will be included
  include_once('../web/structure/body.php');
  ?>
  <script type="text/javascript" src="./bundles/final.js"></script>
</body>
</html>