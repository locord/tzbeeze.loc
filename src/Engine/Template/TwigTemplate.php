<?php

namespace Engine\Template;


use Twig\Environment;

class TwigTemplate implements Template
{
    private $twig;
    private $extension;

    public function __construct(Environment $twig, $extension)
    {
        $this->twig = $twig;
        $this->extension = $extension;
    }

    public function render($name, array $params = []): string
    {
        return $this->twig->render($name . $this->extension, $params);
    }
}