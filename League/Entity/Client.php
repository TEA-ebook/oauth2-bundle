<?php

namespace Trikoder\Bundle\OAuth2Bundle\League\Entity;

use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;

final class Client implements ClientEntityInterface
{
    use EntityTrait, ClientTrait;

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getIdentifier();
    }

    /**
     * @param string[] $redirectUri
     */
    public function setRedirectUri(array $redirectUri)
    {
        $this->redirectUri = $redirectUri;
    }
}
