<?php

/* themes/dedrone/templates/region--header.html.twig */
class __TwigTemplate_0cd9c366e0dce55052f5aa2d3d7995692f1a73d594f9ad908f11a0e83247868a extends Twig_Template
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
        $tags = array("set" => 2, "if" => 8);
        $filters = array("clean_class" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        $context["classes"] = array(0 => "header", 1 => "region", 2 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 5
($context["region"] ?? null))));
        // line 8
        if (($context["content"] ?? null)) {
            // line 9
            echo "  <header";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
\t <div class=\"container\">
     <div class=\"clearfix\">
        ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
      </div>
\t </div>
  </HEADER>
";
        }
        // line 17
        echo "      
";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  55 => 12,  48 => 9,  46 => 8,  44 => 5,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
  set classes = [
    'header',
    'region',
    'region-' ~ region|clean_class,
  ]
%}
{% if content %}
  <header{{ attributes.addClass(classes) }}>
\t <div class=\"container\">
     <div class=\"clearfix\">
        {{ content }}
      </div>
\t </div>
  </HEADER>
{% endif %}
      
", "themes/dedrone/templates/region--header.html.twig", "/app/web/themes/dedrone/templates/region--header.html.twig");
    }
}
