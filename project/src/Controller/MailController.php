<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function index(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('bob@mail.com')
            ->to('jeaneymar@mail.com')
            ->subject('Test')
            ->text('Ceci est un test');
        $mailer->send($email);

            return $this->render('mail/index.html.twig', [
                'controller_name' => 'MailController',
            ]);
    }
}
