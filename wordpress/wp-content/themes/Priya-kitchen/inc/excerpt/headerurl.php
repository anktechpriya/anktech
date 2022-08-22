<?php
//changed login url
function logo_url($url){
    return "http://priyakitchen.local/";
}
add_filter("login_headerurl","logo_url");

