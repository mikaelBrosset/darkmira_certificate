<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class RenderTemplate
{
    public function render($templatePath, $values)
    {
        if (file_exists(dirname(__DIR__)."/Templates/html/$templatePath.php")) {

            include dirname(__DIR__)."/Templates/html/$templatePath.php";
        }
    }
}