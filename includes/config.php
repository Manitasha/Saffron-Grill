<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF']) );

//here are our page links
$nav1["index.php"]= "HOME";
$nav1["about.php"]= "ABOUT";
$nav1["menu.php"]= "MENU";
$nav1["gallery.php"]= "GALLERY";
$nav1["contact.php"]= "CONTACT";



function makeLinks($nav){
    $myReturn = '';

    foreach ($nav as $page => $text) {
            if(THIS_PAGE == $page)
            {
                $myReturn .= '
                <li class ="active">
                    <a href=" ' . $page. ' "> ' . $text . '</a>
                </li>
                ';
            } else {
                $myReturn .= '
                <li>
                    <a href=" ' . $page. ' "> ' . $text . '</a>
                </li>
                ';
            }
}

return $myReturn;

}
