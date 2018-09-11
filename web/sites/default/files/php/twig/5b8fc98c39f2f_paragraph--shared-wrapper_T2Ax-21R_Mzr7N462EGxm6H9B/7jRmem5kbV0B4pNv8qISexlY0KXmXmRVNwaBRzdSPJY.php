<?php

/* themes/dedrone/templates/paragraph/paragraph--shared-wrapper.html.twig */
class __TwigTemplate_90a84bdb46a9e67e4274d6bf63d90cfdf127eeb7ae45ac608bdc5ae6b0bbfa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 3, "block" => 10, "if" => 13);
        $filters = array("clean_class" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
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

        // line 3
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
($context["paragraph"] ?? null), "bundle", array()))), 2 => ((        // line 6
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 3 => (( !$this->getAttribute(        // line 7
($context["paragraph"] ?? null), "isPublished", array(), "method")) ? ("paragraph--unpublished") : ("")));
        // line 10
        $this->displayBlock('paragraph', $context, $blocks);
        // line 35
        echo "
";
    }

    // line 10
    public function block_paragraph($context, array $blocks = array())
    {
        // line 11
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "  </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "       ";
        if ((($context["style"] ?? null) == "Color")) {
            // line 14
            echo "          <div style=\"background-color:#";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["background_color"] ?? null), "html", null, true));
            echo ";\">
          <div class= \"";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_class"] ?? null), "html", null, true));
            echo "\">   

       ";
        } elseif ((        // line 17
($context["style"] ?? null) == "Image")) {
            // line 18
            echo "          <div class = \"background_image\" style=\"background:linear-gradient(90deg,rgba(0,0,0,0) 0%,hsla(0,0%,0%,0)),url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["background_image_url"] ?? null), "html", null, true));
            echo ") no-repeat center top;\">
          <div class= \"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_class"] ?? null), "html", null, true));
            echo "\"> 

       ";
        } elseif ((        // line 21
($context["style"] ?? null) == "Gradient_image")) {
            // line 22
            echo "          <div class = \"background_image\" style=\"background:linear-gradient(90deg,rgba(0,0,0,.5) 21%,hsla(0,0%,7%,0)), url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["background_image_url"] ?? null), "html", null, true));
            echo ") no-repeat center top;\">
          <div class= \"";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_class"] ?? null), "html", null, true));
            echo "\"> 

       ";
        } else {
            // line 26
            echo "          <div>
          <div class = \"";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_class"] ?? null), "html", null, true));
            echo "\">
       ";
        }
        // line 29
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_content", array()), "html", null, true));
        echo "
          </div>
          </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--shared-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  116 => 27,  113 => 26,  107 => 23,  102 => 22,  100 => 21,  95 => 19,  90 => 18,  88 => 17,  83 => 15,  78 => 14,  75 => 13,  72 => 12,  67 => 33,  65 => 12,  60 => 11,  57 => 10,  52 => 35,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# #}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
       {% if (style == \"Color\") %}
          <div style=\"background-color:#{{background_color}};\">
          <div class= \"{{css_class}}\">   

       {% elseif (style == \"Image\") %}
          <div class = \"background_image\" style=\"background:linear-gradient(90deg,rgba(0,0,0,0) 0%,hsla(0,0%,0%,0)),url({{ background_image_url }}) no-repeat center top;\">
          <div class= \"{{css_class}}\"> 

       {% elseif (style == \"Gradient_image\") %}
          <div class = \"background_image\" style=\"background:linear-gradient(90deg,rgba(0,0,0,.5) 21%,hsla(0,0%,7%,0)), url({{ background_image_url }}) no-repeat center top;\">
          <div class= \"{{css_class}}\"> 

       {% else %}
          <div>
          <div class = \"{{css_class}}\">
       {% endif %}
            {{ content.field_content }}
          </div>
          </div>
    {% endblock %}
  </div>
{% endblock paragraph %}

", "themes/dedrone/templates/paragraph/paragraph--shared-wrapper.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--shared-wrapper.html.twig");
    }
}
