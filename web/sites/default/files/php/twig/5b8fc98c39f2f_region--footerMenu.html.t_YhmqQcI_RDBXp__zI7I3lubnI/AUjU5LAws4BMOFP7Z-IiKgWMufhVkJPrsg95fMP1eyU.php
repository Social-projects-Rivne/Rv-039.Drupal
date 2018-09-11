<?php

/* themes/dedrone/templates/region--footerMenu.html.twig */
class __TwigTemplate_4bf8c6082b1488a5517a5e9f9273d6e2a738b8fcf0e13d0b9fea91e3fd7b66ef extends Twig_Template
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
        $tags = array("set" => 7);
        $filters = array("clean_class" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 5
        echo "
";
        // line 7
        $context["classes"] = array(0 => "footerMenu", 1 => "region", 2 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 10
($context["region"] ?? null))));
        // line 13
        echo "
<div ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class = \"container\">
    <div class = \"row\">
      ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/region--footerMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  52 => 14,  49 => 13,  47 => 10,  46 => 7,  43 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# This is a twig template for footer menu region
 - This region is used Bootstrap for 
 - Stylesheets for this region: <theme folder>/scss/_footer_menu.scss
#}

{%
  set classes = [
    'footerMenu',
    'region',
    'region-' ~ region|clean_class,
  ]
%}

<div {{ attributes.addClass(classes) }}>
  <div class = \"container\">
    <div class = \"row\">
      {{ content }}
    </div>
  </div>
</div>", "themes/dedrone/templates/region--footerMenu.html.twig", "/app/web/themes/dedrone/templates/region--footerMenu.html.twig");
    }
}
