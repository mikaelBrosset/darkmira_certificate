<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class RenderTemplate
{
    public function render($templatePath, $alumni, $string = 0)
    {
        if (file_exists(dirname(__DIR__)."/Templates/html/$templatePath.php")) {

            include dirname(__DIR__)."/Templates/html/$templatePath.php";

            if ($string){
                return $body;
            }
        }
    }
}