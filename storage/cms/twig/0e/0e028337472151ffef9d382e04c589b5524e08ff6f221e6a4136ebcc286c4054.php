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

/* C:\xampp\htdocs\laravel\october/themes/eduonix/partials/site/footer.htm */
class __TwigTemplate_e6b8f5d46caf3ac86455965b58e3eb8d46e4883f78d4e0af35c02003bbe85277 extends \Twig\Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2020 CMS</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"text-center\">Copyright &copy; 2020 CMS</p>", "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/partials/site/footer.htm", "");
    }
}
