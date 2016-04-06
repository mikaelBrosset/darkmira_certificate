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

            if ($this->sendEmail($message))
            {
                echo sprintf("Email sent to %s \n", $values['email']);

            } else {
                echo sprintf("ERROR Email failed to send to %s \n", $values['email']);
            }

        } catch (Exception $e) {
            echo sprintf("There was a problem sending an email to %s \n", $values['email']);
        }
    }

    public function createEmail($values)
    {
        $values['url'] = constant('CERTIFICATEBASEURL').$values['uniqueid'];

        $RenderTemplate = new RenderTemplate();

        $message = Swift_Message::newInstance()
            ->setSubject(constant('SUBJECT'))
            ->setFrom(constant('FROM'), constant('FROMNAME'))
            ->setTo($values['email'])
            ->setBody($RenderTemplate->render('mail', $values, 1));

        return $message;
    }

    public function sendEmail($message)
    {
        $transport = Swift_MailTransport::newInstance();

        $mailer = Swift_Mailer::newInstance($transport);

        return $mailer->send($message);
    }
}