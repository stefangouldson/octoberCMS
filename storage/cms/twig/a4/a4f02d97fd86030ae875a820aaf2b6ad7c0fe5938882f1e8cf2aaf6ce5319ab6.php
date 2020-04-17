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

/* C:\xampp\htdocs\laravel\october/themes/eduonix/pages/home.htm */
class __TwigTemplate_2f203a198aec9d9aed67a785b95cd1419185344896e199fd1da01198db3a9a39 extends \Twig\Template
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
        echo "<div class=\"jumbotron text-center\">
    <h1>Welcome</h1>
    <h2>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "site_name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h2>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_description", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron text-center\">
    <h1>Welcome</h1>
    <h2>{{ this.theme.site_name }}</h2>
    <p>{{ this.theme.site_description }}</p>
</div>", "C:\\xampp\\htdocs\\laravel\\october/themes/eduonix/pages/home.htm", "");
    }
}
