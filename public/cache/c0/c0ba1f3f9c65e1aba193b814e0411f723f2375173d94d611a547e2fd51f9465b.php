<?php

/* employees.twig */
class __TwigTemplate_3862e400e9734da3fdd7c81899c5d741b99f3952f8eabf747710b1335b5f2f4f extends Twig_Template
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

<h1>Employees:</h1>

<ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obj"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <h3>User:</h3>
        Name: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "<br>
        Age: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "age", array()), "html", null, true);
            echo "<br>
        Deparment: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "department", array()), "html", null, true);
            echo "<br>
        Project: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "project", array()), "html", null, true);
            echo "<br>
        Active: ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "isActive", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "employees.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "employees.twig", "/var/www/public/templates/employees.twig");
    }
}
