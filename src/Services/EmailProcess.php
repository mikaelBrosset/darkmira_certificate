<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class EmailProcess
{
    public function processEmail($values)
    {
        try {
            $message = $this->createEmail($values);
            $this->sendEmail($message);

        } catch (Exception $e) {
            echo sprintf("There was a problem sending an email to %s", $values[0]);
        }
    }

    public function createEmail($values)
    {
        $RenderTemplate = new RenderTemplate();

        $message = Swift_Message::newInstance()
            ->setSubject(constant('SUBJECT'))
            ->setFrom(constant('FROM'), constant('FROMNAME'))
            ->setTo($values[0])
            ->setBody($RenderTemplate->render('mail', $values));

        return $message;
    }

    public function sendEmail($message)
    {
        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);
        $mailer->send($message);
    }
}