<?php

/* themes/dedrone/templates/paragraph/paragraph--shared-title-description.html.twig */
class __TwigTemplate_03a0eee4dd9a35104938c462c04ef41ac0db17bd19f32d66e5b3dad1e453ee74 extends Twig_Template
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
        $tags = array("set" => 3, "block" => 11);
        $filters = array("clean_class" => 5);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
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
        echo "
";
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 23
        echo "
";
    }

    // line 11
    public function block_paragraph($context, array $blocks = array())
    {
        // line 12
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t    <div class=\"row ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["position"] ?? null), "html", null, true));
        echo " align-self-center\">
\t\t\t<div class=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_class"] ?? null), "html", null, true));
        echo "\">
\t\t\t   ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_h1_title", array()), "html", null, true));
        echo "
\t\t\t   ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_h2_title", array()), "html", null, true));
        echo "
\t\t\t</div>
\t    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--shared-title-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  87 => 16,  83 => 15,  78 => 14,  75 => 13,  70 => 21,  68 => 13,  63 => 12,  60 => 11,  55 => 23,  53 => 11,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 3,);
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
\t    <div class=\"row {{position}} align-self-center\">
\t\t\t<div class=\"{{css_class}}\">
\t\t\t   {{ content.field_shared_h1_title }}
\t\t\t   {{ content.field_shared_h2_title }}
\t\t\t</div>
\t    </div>
    {% endblock %}
  </div>
{% endblock paragraph %}

", "themes/dedrone/templates/paragraph/paragraph--shared-title-description.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--shared-title-description.html.twig");
    }
}
