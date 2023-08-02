<link rel="icon" href="<?= BASE_PATH ?><?= $template->path() . $template->favicon_logo ?>" sizes="16x16" type="image/x-icon">
<!-- Mobile Specific Meta-->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?= BASE_PATH ?>/asstes/js/respond.js"></script><![endif]-->

<!-- Meta Imaformation-->
<title><?= $title ?></title>
<meta name="description" content="<?= $des ?>" />
<meta name="keywords" content="<?= $key ?>" />
<link rel="canonical" href="<?= $canonical ?>" />
<meta name="robots" content="index, follow" />
<meta name="coverage" content="worldwide" />
<?= $analytics ?>
<meta property="og:locale" content="<?= $og_locale ?>" />
<meta property="og:type" content="<?= $og_type ?>" />
<meta property="og:title" content="<?= $og_title ?>" />
<meta property="og:description" content="<?= $og_description ?>" />
<meta property="og:url" content="<?= $og_url ?>" />
<meta property="og:site_name" content="<?= $og_site_name ?>" />
<meta property="article:modified_time" content="<?= $article_modified_time ?>" />
<meta property="og:image" content="<?= $og_image ?>" />
<meta property="og:image_alt" content="<?= $og_image_alt ?>" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-267284942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-267284942-1');
</script>