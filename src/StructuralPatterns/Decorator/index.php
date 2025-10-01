<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

use PhpDesignPatterns\StructuralPatterns\Decorator\EmailNotifier;
use PhpDesignPatterns\StructuralPatterns\Decorator\SMSDecorator;
use PhpDesignPatterns\StructuralPatterns\Decorator\SlackDecorator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$emailNotifier = new EmailNotifier();

$notifier = new SlackDecorator(
    new SMSDecorator(
        $emailNotifier
    )
);

$message = new Notification(
    to: 'test@example.com',
    subject: 'Test Notification',
    body: 'This is a test notification.',
    meta: ['priority' => 'high', 'name' => 'Mike']
);

$notifier->send($message);
