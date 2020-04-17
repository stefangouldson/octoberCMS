<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\laravel\october/themes/eduonix/pages/about.htm */
class __TwigTemplate_5cb4489c3eba57561f2be678e8d4ab7c8417ec929d300b86892d54bdbbffbc25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Welcome to the About page</h1>
<hr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/pages/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Welcome to the About page</h1>
<hr>", "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/pages/about.htm", "");
    }
}
