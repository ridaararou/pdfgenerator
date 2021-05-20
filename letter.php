
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTf-8">
  <title>L2L : LISTINGS - TO - LEADS</title> 
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php if(isset($MemberThemeData) && $MemberThemeData['font_family'] != "" && $MemberThemeData['font_family'] == 'montserrat') { ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <?php } else if(isset($MemberThemeData) && $MemberThemeData['font_family'] != "" && in_array($MemberThemeData['font_family'], array('futura-pt', 'proxima-nova'))) { ?>
    <link rel="stylesheet" href="https://use.typekit.net/qze1qdh.css">
  <?php } else if(isset($MemberThemeData) && $MemberThemeData['font_family'] != "" && $MemberThemeData['font_family'] == 'avenir') { ?>
    <link rel="stylesheet" href="<?php echo SiteUrl() . \Config::get('constants.SECTION'); ?>/printflyernearby/css/avenir.min.css">
  <?php } else if ($MemberThemeData['font_family'] == 'Lato') { ?>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <?php } ?>
  <link rel="stylesheet" href="<?php echo SiteUrl() . \Config::get('constants.SECTION'); ?>/printflyernearby/css/avenir-next.min.css">
  <link rel="stylesheet" href="<?php echo SiteUrl() . \Config::get('constants.SECTION'); ?>/printflyernearby/css/main.min.css">
  <link rel="shortcut icon" href="<?php echo SiteUrl() . \Config::get('constants.SECTION'); ?>/images/l2l-icon.jpg">   

  <style>
      .font-montserrat-2 {
          font-family: 'Montserrat', "Avenir Next", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
      .font-montserrat-2 .fs-1 {
          font-size: 1.03125rem;
      }
  </style>
    
</head>
<?php
$Class = "";
if($MemberThemeData['font_family'] == 'montserrat') {
    $Class = "font-montserrat-2";
} else if($MemberThemeData['font_family'] == 'futura-pt') { 
    $Class = "font-futura";
} else if($MemberThemeData['font_family'] == 'proxima-nova') { 
    $Class = "font-proximanova";
} else if($MemberThemeData['font_family'] == 'avenir') { 
        $Class = "font-avenir";
} else if($MemberThemeData['font_family'] == 'Lato') { 
    $Class = " font-lato";
}
?>
<body>  
  <div class="container">
      <div class="{{$Class}}">
        <article class="pt-3 fs-1 article-alt">
          <section>
            <p class="mb-2">
              Hello, I hope you're having a great week!
            </p>  
            <p class="mb-2">
                <?php if(!empty($NearbyOpenhouse) && $NearbyOpenhouse == 1) {?>
                    I just wanted to let you know that we are having an Open House at <?php echo $StatusDisplayMSG; ?>
                <?php } else { ?>
                    I just wanted to let you know that <?php echo $StatusDisplayMSG; ?>
                <?php } ?>
            </p>
            <p class="mb-2">
              You can get more information, price, all photos and more by going to:
            </p>
            <h5>
              <a href="<?php echo $SpwUrl; ?>" target="_blank"><b><u><?php echo $SpwUrl; ?></u></b></a>
            </h5>
            <?php if ($ExtensionDisplayFlag) { ?>
            <p><strong><?php echo $ExtensionDisplay; ?></strong></p>
            <?php } ?>
          </section>
          <section>
            <div class="row">
                <?php if ($ListingImg != '') { ?>
              <div class="col-6">
                <div class="img-fit" style="height: 285px;background-image: url(<?php echo str_replace("http:", "https:", $ListingImg); ?>)"></div>
              </div>
                <?php } ?>
              <div class="col-6">
                <div class="rotate-5">
                  <p style="font-size: 1.6rem;line-height: 1.4;">Did you know that home sales over the last 12 months within 2 miles of your home affect your home's value?</p>
                  <p style="font-size: 1.6rem;line-height: 1.4;">If you have any questions about your home's value after you check it out below, feel FREE to ask!</p>
                  <p style="font-size: 1.6rem;line-height: 1.4;">Just text, call or email me.</p>
                </div>
              </div>
            </div>
          </section>
          <section>
              <?php if(isset($ListingHomeText) && $ListingHomeText != "") { ?>
            <h5 class="mb-2">
              <?php echo $ListingHomeText; ?>
            </h5>
              <?php } ?>
            <p class="mb-2">I would like to invite you to find out the new value of your home using today's technology at a website I created that will provide you with this information at:</p>
            <h5 class="mb-4">
              <a href="<?php echo $InputLink; ?>" target="_blank"><b><u><?php echo $InputLink; ?></u></b></a>
            </h5>
            <a target="_blank" href="<?php echo $InputLink; ?>">
              <img class="mb-2" src="<?php echo SiteUrl().\Config::get('constants.SECTION'); ?>/images/PropertyValuationLPImage.png" width="355" alt="banner">
            </a>
            <p>I hope you find this helpful and, as always, I appreciate your referrals and do not hesitate to let me know if you have any questions about anything related to real estate or your home.</p>
          </section>
          <h5 class="handwritten mb-0" style=" font-size: 24px; ">Best Wishes</h5>
        </article>
      </div>
  </div>
</body>
</html>