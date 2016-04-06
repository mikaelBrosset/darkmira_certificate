<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class EmailProcess
{
    public function processEmail($values)
    {
        $email = $this->createEmail($values);
        $this->sendEmail($email);
    }

    public function createEmail($values)
    {
        $RenderTemplate = new RenderTemplate();


        $message = Swift_Message::newInstance()
            ->setSubject(constant('SUBJECT'))
            ->setFrom(constant('FROM'))
            ->setTo($values[0])
            ->setBody($RenderTemplate->render('mail', $values));

        return $message;
    }

    public function sendEmail($email)
    {

    }
}