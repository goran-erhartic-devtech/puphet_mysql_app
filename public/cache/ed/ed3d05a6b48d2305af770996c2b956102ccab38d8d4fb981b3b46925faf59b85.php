<?php

/* employee.twig */
class __TwigTemplate_452762aa40bbfe51545633c028981889ac5d9f72efd9c45d6de5a1a022ee64e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
    <title>SimpleApp</title>
</head>
<body>

<h1>Employee by id:</h1>
<p>Name: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["obj"] ?? null), "name", array()), "html", null, true);
        echo "<br>
    Age: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["obj"] ?? null), "age", array()), "html", null, true);
        echo "<br>
    Deparment: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["obj"] ?? null), "department", array()), "html", null, true);
        echo "<br>
    Project: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["obj"] ?? null), "project", array()), "html", null, true);
        echo "<br>
    Active: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["obj"] ?? null), "isActive", array()), "html", null, true);
        echo "</p>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "employee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "employee.twig", "/var/www/public/templates/employee.twig");
    }
}
