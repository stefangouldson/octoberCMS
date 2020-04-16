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

/* C:\xampp\htdocs\laravel\october\install-mast/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_4b1af49431a4d875bc519f4bb0bf7b8769799ed54be650ac1d2b0d9a125f5675 extends \Twig\Template
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
        echo "<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\october\\install-mast/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>", "C:\\xampp\\htdocs\\laravel\\october\\install-mast/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
