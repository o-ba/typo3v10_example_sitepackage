<?php

declare(strict_types=1);

namespace Bo\TYPO3v10ExampleSitepackage\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;
use TYPO3\CMS\Core\Mail\FluidEmail;
use TYPO3\CMS\Core\Mail\Mailer;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SendMail implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     * @throws TransportExceptionInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ((bool)($request->getQueryParams()['send-mail'] ?? false)) {

            $mail = GeneralUtility::makeInstance(MailMessage::class)
                ->to(new Address('some@email.com', 'John Doe'))
                ->subject('E-Mail from our new TYPO3 v10 installation')
                ->text('TYPO3 10 LTS is here! Give it a try!')
                ->html(
                    '<h2>TYPO3 10 LTS is here!</h2>'
                    . '<h4>Give it a try!</h4>'
                );

            $mail->send();

        }

        if ((bool)($request->getQueryParams()['send-fluid-mail'] ?? false)) {

            $mail = GeneralUtility::makeInstance(FluidEmail::class)
                ->to(new Address('some@email.com', 'John Doe'))
                ->subject('Fluid E-Mail from our new TYPO3 v10 installation')
                ->assignMultiple([
                    'headline' => 'TYPO3 10 LTS is here!',
                    'content' => 'Give it a try!'
                ]);

            GeneralUtility::makeInstance(Mailer::class)->send($mail);

        }

            return $handler->handle($request);
    }
}
