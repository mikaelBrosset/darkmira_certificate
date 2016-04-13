<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class EmailProcess
{
    public function processEmail(Alumni $alumni)
    {
        try {
            $message = $this->createEmail($alumni);

            if ($this->sendEmail($message))
            {
                echo sprintf("Email sent to %s \n", $alumni->getEmail());

            } else {
                echo sprintf("ERROR Email failed to send to %s \n", $alumni->getEmail());
            }

        } catch (Exception $e) {
            echo sprintf("There was a problem sending an email to %s \n", $alumni->getEmail());
        }
    }

    public function createEmail(Alumni $alumni)
    {
        $alumni->setUrl(constant('CERTIFICATEBASEURL').$alumni->getRandomNumber());

        $RenderTemplate = new RenderTemplate();

        $message = Swift_Message::newInstance()
            ->setSubject(constant('SUBJECT'))
            ->setFrom(constant('FROM'), constant('FROMNAME'))
            ->setTo($alumni->getEmail())
            ->setBody($RenderTemplate->render('mail', $alumni, 1));

        return $message;
    }

    public function sendEmail($message)
    {
        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);

        return $mailer->send($message);
    }
}