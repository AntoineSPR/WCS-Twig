<?php

$products = ['luth', 'violoncelle', 'lyre', 'harpe', 'flûte irlandaise', 'tambour shamanique', 'bodhran', 'bouzouki irlandais'];
echo $twig->render('products.html.twig', ['products'=>$products]);
