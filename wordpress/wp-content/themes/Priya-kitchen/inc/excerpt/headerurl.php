<?php
//changed login url
function logo_url($url){
    return "http://priyakitchen.local/";
}
add_filter("login_headerurl","logo_url");

//changed logo title
function logo_title(){
    return "priya kitchen";
}
add_filter("login_headertitle","logo_title");