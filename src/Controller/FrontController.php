<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class FrontController
{
    public function showCertificate()
    {
        $DBAlumni = new DBAlumni();
        $alumni   = $DBAlumni->getAlumni(htmlentities(strip_tags($_GET['nb'])));

        $template = new RenderTemplate();

        if ($alumni) {
            $template->render('certificate', $alumni);

        } else {
            $template->render('notfound', $alumni);
        }

    }
}