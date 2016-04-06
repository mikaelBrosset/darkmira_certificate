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
        $data  = $DBAlumni->getAlumni(htmlentities(strip_tags($_GET['nb'])));

        $alumni = new Alumni(
            $data['email'],
            $data['firstname'],
            $data['lastname'],
            $data['uniqueid']
        );

        $template = new RenderTemplate();

        if ($data) {
            $template->render('certificate', $alumni);

        } else {
            $template->render('notfound', $alumni);
        }

    }
}