<?php

/* themes/dedrone/templates/paragraph/paragraph--bundle_content_tech_par_page.html.twig */
class __TwigTemplate_ff5bbeccbe7992b2093f9c752436b823d1f99e37521f8594efbf024d2a20416b extends Twig_Template
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
        $tags = array("set" => 3, "block" => 10);
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 11
        echo "  <div class = \"container\">
      <div";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "      </div>

  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "           <div class = \"row\">
            <div class=\"col-12 col-sm-12 col-md-3\">
              ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_h2_title", array()), "html", null, true));
        echo "
              ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_link_label", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-12 col-sm-12 col-md-3 bundle_partner_logo justify-content-center\">
              ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_bundle_partner_logo", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
              ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_text_single", array()), "html", null, true));
        echo "
            </div>
           </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--bundle_content_tech_par_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  89 => 20,  83 => 17,  79 => 16,  75 => 14,  72 => 13,  65 => 27,  63 => 13,  59 => 12,  56 => 11,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 3,);
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
  <div class = \"container\">
      <div{{ attributes.addClass(classes) }}>
        {% block content %}
           <div class = \"row\">
            <div class=\"col-12 col-sm-12 col-md-3\">
              {{ content.field_shared_h2_title }}
              {{ content.field_shared_link_label }}
            </div>
            <div class=\"col-12 col-sm-12 col-md-3 bundle_partner_logo justify-content-center\">
              {{ content.field_bundle_partner_logo }}
            </div>
            <div class=\"col-12 col-sm-12 col-md-6\">
              {{ content.field_shared_text_single }}
            </div>
           </div>
        {% endblock %}
      </div>

  </div>
{% endblock paragraph %}", "themes/dedrone/templates/paragraph/paragraph--bundle_content_tech_par_page.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--bundle_content_tech_par_page.html.twig");
    }
}
