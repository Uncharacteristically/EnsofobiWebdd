<?php
$diameter=190;
$donutdiameter=50;
$radius=$diameter/2;
$legendwidth=$radius-100;
$donutradius=$donutdiameter/2;
$offset=$diameter/4;
$donutoffset=($diameter-$donutdiameter)/2;
$font=$diameter/10;
$active=3;
$slice=$diameter-10;
$price_points=array(
    array("id"=>1,"legend"=>"$0-$100"),
    array("id"=>2,"legend"=>"$101-$300"),
    array("id"=>3,"legend"=>"$301-$500"),
    array("id"=>4,"legend"=>"$501+"),
);
$spacerangle=1;
$angle=90;//360/sizeof($price_points);
$adjangle=$angle-$spacerangle;
$legendoffset=($angle/2)+10;
$count=0;
$legendzindex=8000;
$slicezindex=4000;
$pie_css="";
$pie_html="";
foreach($price_points as $price){
    $degrees=$count*$angle;
    $spacerdegrees=(($count+1)*$angle)-$spacerangle;
    if($price["id"]==$active){
        $isActive=" pieactive";
    }else{
        $isActive="";
    }
    $pie_css.=<<<EOT
    #pieSlice{$price["id"]}{
        -webkit-transform:rotate({$degrees}deg);
         -moz-transform:rotate({$degrees}deg);
         -o-transform:rotate({$degrees}deg);
         transform:rotate({$degrees}deg);
     }
         #pieSpacer{$price["id"]}{
        -webkit-transform:rotate({$spacerdegrees}deg);
         -moz-transform:rotate({$spacerdegrees}deg);
         -o-transform:rotate({$spacerdegrees}deg);
         transform:rotate({$spacerdegrees}deg);
     }
EOT;
      $pie_html.=<<<EOT
      <div id="pieSlice{$price["id"]}" style="z-index:$slicezindex;" class="hold">
              
        <div data-id="{$price["id"]}" class="pie$isActive">
                <a href="#" style="z-index:$legendzindex;"class="pielegend" >{$price["legend"]}</a>
            
        </div>
     </div>
EOT;
    $count++;
    $slicezindex-=500;
    $legendzindex-=500;
  
    
}


$css=<<<EOT
<style>
.pieContainer {
      height: {$diameter}px;
 }
.pieBackground {
      background-color: grey;
      position: absolute;
      width: {$diameter}px;
      height: {$diameter}px;
      -moz-border-radius: {$radius}px;
      -webkit-border-radius: {$radius}px;
      -o-border-radius: {$radius}px;
      border-radius: {$radius}px;
      -moz-box-shadow: -1px 1px 3px #000;
      -webkit-box-shadow: -1px 1px 3px #000;
      -o-box-shadow: -1px 1px 3px #000;
      box-shadow: -1px 1px 3px #000;
 }
.pie {
     position: absolute;
     width: {$slice}px;
     height: {$slice}px;
     -moz-border-radius: {$radius}px;
     -webkit-border-radius: {$radius}px;
     -o-border-radius: {$radius}px;
     border-radius: {$radius}px;
     clip: rect(0px, {$radius}px, 100px, 0px);
     background:#eee;
     -webkit-transform:rotate({$adjangle}deg);
     -moz-transform:rotate({$adjangle}deg);
     -o-transform:rotate({$adjangle}deg);
     transform:rotate({$adjangle}deg);
     z-index:3000;
}

.pielegend{
    position:absolute;
    z-index:10000;
     cursor:pointer;
     background:#f00;
    text-align:center;
    width:{$radius}px;
    margin:20px auto;
    border:1px solid #000;
    /*top:{$offset}px;*/
    left:0;
    font-size:{$font}px;
    -webkit-transform:rotate(-{$legendoffset}deg);
    -moz-transform:rotate(-{$legendoffset}deg);
    -o-transform:rotate(-{$legendoffset}deg);
    transform:rotate(-{$legendoffset}deg);
}
#piedonut{
    height:{$donutdiameter}px;
    width:{$donutdiameter}px;
    position:absolute;
    top:{$donutoffset}px;
    left:{$donutoffset}px;
    box-shadow:-2px -2px 2px rgba(0,0,0,.75);
    border:1px solid #ccc;
    border-radius:{$donutradius}px;
    z-index:4000;
    background:#fff url(/images/e-price.jpg) 50% 50% no-repeat;
}
.pieactive{
    background:#fff !important;
    font-weight:bold;
    text-shadow:1px 1px 1px #ccc;  
}
.hold {
     position: absolute;
     width: {$diameter}px;
     height: {$diameter}px;
     -moz-border-radius: {$radius}px;
     -webkit-border-radius: {$radius}px;
     -o-border-radius: {$radius}px;
     border-radius: {$radius}px;
     clip: rect(0px, {$diameter}px, {$diameter}px, {$radius}px);
}
.spacer {
     position: absolute;
     width: {$diameter}px;
     height: {$diameter}px;
     -moz-border-radius: {$radius}px;
     -webkit-border-radius: {$radius}px;
     -o-border-radius: {$radius}px;
     border-radius: {$radius}px;
     clip: rect(0px, {$diameter}px, {$diameter}px, {$radius}px);
}
     $pie_css
</style>
      
EOT;
      echo $css;
