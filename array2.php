$adi= array('stan.jpg', 'super.jpg', 'alphabounce.jpg','ultra.jpg');
$aname=array('Stan Smith','Super Star','Alpha Bounce','Ultra Boost');

$vans= array('vans2.jpg', 'vans3.jpg', 'vans4.jpg','vans5.jpg');

$reebok= array('stan.jpg', 'super.jpg', 'alphabounce.jpg','ultra.jpg');
$puma= array('stan.jpg', 'super.jpg', 'alphabounce.jpg','ultra.jpg');

$productArray = array('adidas'=>$adi=>$aname,'vans'=>$vans,'reebok'=>$reebok);


$adi = $productArray[$_GET['brand']];
