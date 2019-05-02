<?php

namespace Trikoder\Bundle\OAuth2Bundle\Model;

class Client
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var RedirectUri[]
     */
    private $redirectUris = [];

    /**
     * @var Grant[]
     */
    private $grants = [];

    /**
     * @var Scope[]
     */
    private $scopes = [];

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var string
     */
    private $name = null;

    public function __construct(string $identifier, string $secret)
    {
        $this->identifier = $identifier;
        $this->secret = $secret;
    }

    public function __toString(): string
    {
        return $this->getIdentifier();
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @return RedirectUri[]
     */
    public function getRedirectUris(): array
    {
        return $this->redirectUris;
    }

    /**
     * @param RedirectUri[] $redirectUris
     */
    public function setRedirectUris(RedirectUri ...$redirectUris): self
    {
        $this->redirectUris = (array) $redirectUris;

        return $this;
    }

    /**
     * @return Grant[]
     */
    public function getGrants(): array
    {
        return $this->grants;
    }

    /**
     * @param Grant[] $grants
     */
    public function setGrants(Grant ...$grants): self
    {
        $this->grants = (array) $grants;

        return $this;
    }

    /**
     * @return Scope[]
     */
    public function getScopes(): array
    {
        return $this->scopes;
    }

    /**
     * @param Scope[] $scopes
     */
    public function setScopes(Scope ...$scopes): self
    {
        $this->scopes = (array) $scopes;

        return $this;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
