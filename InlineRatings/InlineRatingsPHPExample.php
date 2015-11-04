<?php
  /*
  *  This code is provided for demonstration purposes only and is not intended for copy and paste integrations.
  *  Ce code ne sert qu'à des fins de démonstration et ne devrait pas être integré en copiant-collant.
  */

echo "Inline Ratings with basic PHP";

$product[] = 'Product1'; // Produit par défaut
$product[] = 'Product2'; // les étoiles n'afficheront qu'une fois par référence produit
$product[] = 'Product3';
$product[] = 'Product4';

echo '<script type="text/javascript" src="//display-stg.ugc.bazaarvoice.com/static/clientname/locale/bvapi.js"></script>';

$i = 0;
$BVui = '<script>
  $BV.ui( "rr", "inline_ratings", {
    productIds : [';

      foreach ($product as $p) {
        ++$i;
        $BVui .= "\"$p\"";
        $BVui .= ( $i != count($product)  ? "," : "");
      }

      $BVui .= '],
        containerPrefix : "BVRRInlineRating"
      });
  </script>';

echo $BVui;

?>

<div id="BVRRInlineRating-<?php echo $product[0]; ?>" ></div>
<div id="BVRRInlineRating-<?php echo $product[1]; ?>" ></div>
<div id="BVRRInlineRating-<?php echo $product[2]; ?>" ></div>
<div id="BVRRInlineRating-<?php echo $product[3]; ?>" ></div>
