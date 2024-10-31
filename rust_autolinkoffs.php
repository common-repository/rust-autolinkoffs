<?php
/*
Plugin Name: RustAutoLinkOffs
Plugin URI: http://russ.innereyes.com/wordpress-plugins/
Description: Displays post's anchors through <code>ShowRustAutoLinkoff(true|false,$sTitle)</code> tag.
Author: RustIndy
Author URI: http://russ.innereyes.com
Version: 1.0 Beta 2
*/

function ShowRustAutoLinkoffs($newWindow = false,$sTitle = '')
{
        $sTitle = trim($sTitle);
        $rALinks = get_post_custom_values("autolinkoff");
        if(count($rALinks)==0 or trim(strtolower($rALinks[1]))=="off")
        {
                global $post;
                $tTheContent = $post->post_content;
                $tArrayContent = explode("<a ",$tTheContent);
                if(count($tArrayContent)>1 and strpos(trim($tArrayContent[1]),"</a>")>0)
                {
                        echo "<div class=\"rustAutoLinkoffsPost\">$sTitle<ul>";
                        for($i=1;$i<count($tArrayContent);$i++)
                        {
                                $sTemp = "";
                                if ($newWindow)
                                {
                                        $sTemp = " target=\"_blank\"";
                                }
                                $sLink = substr(trim($tArrayContent[$i]),0,strpos(trim($tArrayContent[$i]),">"));
                                $sLink = str_replace(" ","",$sLink);
                                $sLink = substr($sLink,strpos($sLink,"href=\"")+6);
                                $sLink = substr($sLink,0,strpos($sLink,"\""));
                                $sLink = htmlentities($sLink);
                                $sDesc = substr(trim($tArrayContent[$i]),strpos(trim($tArrayContent[$i]),">"));
                                $sDesc = substr($sDesc,1,strpos($sDesc,"</a>")-1);
                                $sDesc = htmlentities($sDesc);
                                echo "<li><a href=\"$sLink\" title=\"$sDesc &gt;&gt; $sLink.\"$sTemp>$sDesc</a></li>";
                        }
                        echo "</ul></div>\n";
                }
        }
}
?>
