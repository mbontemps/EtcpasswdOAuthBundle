<?php

namespace Etcpasswd\OAuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Etcpasswd\OAuthBundle\DependencyInjection\Security\Factory\OAuthFactory;

/**
 *
 * @author   Marcel Beerta <marcel@etcpasswd.de>
 */
class EtcpasswdOAuthBundle extends Bundle
{

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new OAuthFactory());
    }
}