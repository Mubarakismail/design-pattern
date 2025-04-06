<?php

use DesignPattern\Adapter\EmailNotification;
use DesignPattern\Adapter\Notification;
use DesignPattern\Adapter\SlackApi;
use DesignPattern\Adapter\SlackNotification;

require_once __DIR__ . "/../../vendor/autoload.php";

/*
 * Adapter is a structural design pattern, which allows incompatible objects to collaborate.
 *
 * The Adapter acts as a wrapper between two objects. It catches calls for one object and
 * transforms them to format and interface recognizable by the second object.
 *
 */

/*
 * The Adapter pattern allows you to use 3rd-party or legacy classes even if they’re incompatible with the bulk of your code.
 *  For example, instead of rewriting the notification interface of your app to support each 3rd-party service such as Slack,
 *  Facebook, SMS or (you-name-it), you can create a set of special wrappers that adapt calls from your app to an interface
 *  and format required by each 3rd-party class.
 *
 */

function clientCode(Notification $notification): void
{

    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");
}

echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotification("developers@example.com");
clientCode($notification);
echo "\n\n";


echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
clientCode($notification);