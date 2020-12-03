<?php

namespace Flasher\Prime;

use Flasher\Prime\Manager\AbstractManager;
use Flasher\Prime\Notification\NotificationBuilderInterface;
use Flasher\Prime\Notification\NotificationInterface;

/**
 * @method NotificationBuilderInterface type($type, $message = null, array $options = array())
 * @method NotificationBuilderInterface message($message)
 * @method NotificationBuilderInterface options($options)
 * @method NotificationBuilderInterface setOption($name, $value)
 * @method NotificationBuilderInterface unsetOption($name)
 * @method NotificationBuilderInterface success($message = null, array $options = array())
 * @method NotificationBuilderInterface error($message = null, array $options = array())
 * @method NotificationBuilderInterface info($message = null, array $options = array())
 * @method NotificationBuilderInterface warning($message = null, array $options = array())
 * @method NotificationInterface getNotification()
 */
final class Flasher extends AbstractManager
{
    public function getDefaultDriver()
    {
        return $this->config->get('default');
    }
}