<?php

echo "Inline Ratings with basic PHP";

$product[] = 'Product1'; // Produit par défaut
$product[] = 'Product1'; // les étoiles n'afficheront qu'une fois par référence produit
$product[] = 'Product1'; // donc ce script n'affichera qu'ne fois les étoiles par exemple
$product[] = 'Product1';

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

<div id="BVRRInlineRating-<?php echo $product[0]; ?>" class="inline-rating l-block"></div>
<div id="BVRRInlineRating-<?php echo $product[1]; ?>" class="inline-rating l-block"></div>
<div id="BVRRInlineRating-<?php echo $product[2]; ?>" class="inline-rating l-block"></div>
<div id="BVRRInlineRating-<?php echo $product[3]; ?>" class="inline-rating l-block"></div>
