<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class EmailProcess
{
    const SUBJECT = 'Subject';
    const FROM    = 'darkmira@darkmira.com';

    const TRANSPORT          = 'darkmira.com';
    const TRANSPORT_USERNAME = 'username';
    const TRANSPORT_PASSWORD = 'password';

    public function processEmail($values)
    {
        $email = $this->createEmail($values);
        $this->sendEmail($email);
    }

    public function createEmail($values)
    {
        $RenderTemplate = new RenderTemplate();


        $message = Swift_Message::newInstance()
            ->setSubject(self::SUBJECT)
            ->setFrom(self::FROM)
            ->setTo($values[0])
            ->setBody($RenderTemplate->render('mail', $values));

        return $message;
    }

    public function sendEmail($email)
    {

    }
}