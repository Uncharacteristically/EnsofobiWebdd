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
    "\t\t<a href='javascript:void(0);'><span>{$c["category"]}</span>"
        . "<span class='badge' id='category-badge-{$c["id"]}'></span>"
    . "<i class='icon-angle-right'></i></a>\n";
    $list.="\t\t<ul>\n";
    if(isset($subs[$c["id"]])){
        foreach($subs[$c["id"]] as $s){
            $list.="\t\t\t<li>\n"
                        . "\t\t\t\t<a href='javascript:void(0);'><span>{$s["sub_category"]}</span><span class='badge' id='sub-category-badge-{$s["id"]}'></span></a>\n"
                        . "\t\t\t\t<ul class='message-list' id='message-list-{$s["id"]}'>\n"
                        . "\t\t\t\t</ul>\n"
                   . "\t\t\t</li>\n";
        }
    }
    $list.="\t\t</ul>\n";
    $list.="\t</li>\n";
}
?>
<div class="slashc-sliding-menu" id="inbox-menu-js">
<h1>
    <span>&nbsp;</span>
    <a title="Slide Back Home" href="javascript:void(0);" class="slashc-sliding-menu-home btn btn-inverse">
        <i class="icon-angle-left"></i>
    </a>
</h1>
    <ul  class="mailbox">
        <?php echo $list;?>
            <!--<li><a href="#"><span>JavaScript</span></a>
                    <ul>
                            <li><a href="#"><span>Go Deeper</span></a>
                                    <ul>
                                            <li><a href="#"><span>..and Deeper</span></a>
                                                    <ul>
                                                            <li><a href="#"><span>..you get the idea</span></a>
                                                                    <ul>
                                                                            <li><a href="http://codecanyon.net">Navigation</a></li>
                                                                            <li><a href="http://codecanyon.net">Project Management Tools</a></li>
                                                                            <li><a href="http://codecanyon.net">Ratings and Charts</a></li>
                                                                            <li><a href="http://codecanyon.net">Database Abstractions</a></li>
                                                                            <li><a href="http://codecanyon.net">Images and Media</a></li>
                                                                            <li><a href="http://codecanyon.net">Ratings and Charts</a></li>
                                                                            <li><a href="http://codecanyon.net">Shopping Carts</a></li>
                                                                    </ul>
                                                            </li>
                                                            <li><a href="http://codecanyon.net">Database Abstractions</a></li>
                                                            <li><a href="http://codecanyon.net">Images and Media</a></li>
                                                            <li><a href="http://codecanyon.net">Loaders and Uploaders</a></li>
                                                            <li><a href="http://codecanyon.net">Navigation</a></li>
                                                            <li><a href="http://codecanyon.net">Project Management Tools</a></li>
                                                            <li><a href="http://codecanyon.net">Ratings and Charts</a></li>
                                                            <li><a href="http://codecanyon.net">Shopping Carts</a></li>
                                                    </ul>
                                            </li>
                                            <li><a href="http://codecanyon.net">Loaders and Uploaders</a></li>
                                            <li><a href="http://codecanyon.net">Navigation</a></li>

                                    </ul>
                            </li>
                            <li><a href="http://codecanyon.net">Database Abstractions</a></li>
                            <li><a href="http://codecanyon.net">Images and Media</a></li>
                    </ul>
            </li>
            <li><a href="#"><span>PHP Scripts</span></a>
                    <ul>
                            <li><a href="http://codecanyon.net">Miscellaneous</a></li>
                            <li><a href="http://codecanyon.net">Social Networking</a></li>
                            <li><a href="http://codecanyon.net">Shopping Carts</a></li>
                            <li><a href="http://codecanyon.net">Loaders and Uploaders</a></li>
                            <li><a href="http://codecanyon.net">Project Management Tools</a></li>
                    </ul>
            </li>-->
    </ul>
</div>