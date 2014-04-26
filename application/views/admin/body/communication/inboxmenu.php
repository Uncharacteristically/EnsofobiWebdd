<?php
defined('SYSPATH') or die('No direct script access.');
$categories=DB::select("category","id")
        ->from("message_category")
        ->order_by("sort", "ASC")
        ->execute();
$sub_categories=DB::select("sub_category","message_sub_category.id","category_id")
        ->from("message_sub_category")
        ->join("message_category","left")
        ->on("category_id","=","message_category.id")
        ->order_by("message_category.sort", "ASC")
        ->order_by("message_sub_category.sort", "ASC")
        ->execute();

foreach($sub_categories as $c){
    $subs[$c["category_id"]][]=$c;
}
$list="";
foreach($categories as $c){
    $list.="\t<li>\n".         
    "\t\t<a href='javascript:void(0);'><span>{$c["category"]}</span><i class='icon-angle-right'></i></a>\n";
    $list.="\t\t<ul>\n";
    if(isset($subs[$c["id"]])){
        foreach($subs[$c["id"]] as $s){
            $list.="\t\t\t<li>\n"
                    . "\t\t\t\t<a href='javascript:void(0);'><span>{$s["sub_category"]}</span></a>\n"
                        . "\t\t\t\t<ul>\n"
                        . "\t\t\t\t\t<li><a href='javascript:void(0);'><span class='tiny-sub'>Re:Last Year sales<i class='icon-paper-clip'></i><span class='tiny-des'>Hey Vicky, find attached! Thx :-)</span></span></a></li>\n"
                        . "\t\t\t\t\t<li><a href='javascript:void(0);'><span class='tiny-sub'>Re:Last Year sales<i class='icon-paper-clip'></i><span class='tiny-des'>Hey Vicky, find attached! Thx :-)</span></span></a></li>\n"
                        . "\t\t\t\t</ul>\n"
                   . "\t\t\t</li>\n";
        }
    }
    $list.="\t\t</ul>\n";
    $list.="\t</li>\n";
}
?>
<div class="slashc-sliding-menu" id="inbox-menu-js">	
<h1 id="inbox-menu-header-js">
        <span>&nbsp;</span> 
        <a title="Slide Back Home" href="javascript:void(0);" class="slashc-sliding-menu-home btn btn-inverse">
                <i class="icon-angle-left"></i>
        </a>
</h1>
<ul class="mailbox" id="mailbox-js">
<?php echo $list; ?>
</ul>
</div>
