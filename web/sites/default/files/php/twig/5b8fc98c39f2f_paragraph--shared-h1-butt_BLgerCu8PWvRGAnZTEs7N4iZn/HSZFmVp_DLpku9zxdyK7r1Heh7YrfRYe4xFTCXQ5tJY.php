<?php

/* themes/dedrone/templates/paragraph/paragraph--shared-h1-buttons.html.twig */
class __TwigTemplate_0034178a2b272ec165f52946aede8d4889829d55982ad721f9a58507c5331caa extends Twig_Template
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
($context["paragraph"] ?? null), "isPublished", array(), "method")) ? ("paragraph--unpublished") : ("")), 4 => "d-flex justify-content-center");
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 26
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
        // line 24
        echo "  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "          <div class = \"row justify-content-center\">
                <div class=\"col-12\">
                 ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_shared_h1_title", array()), "html", null, true));
        echo "
                </div>
                <div class=\"shared_buttons justify-content-center\">
                    ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_shared_button_link", array()), 0, array(), "array"), "html", null, true));
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_shared_button_link", array()), 1, array(), "array"), "html", null, true));
        echo "
                </div>
          </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--shared-h1-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  86 => 19,  80 => 16,  76 => 14,  73 => 13,  68 => 24,  66 => 13,  61 => 12,  58 => 11,  52 => 26,  50 => 11,  48 => 7,  47 => 6,  46 => 5,  45 => 3,);
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
    not paragraph.isPublished() ? 'paragraph--unpublished',
    'd-flex justify-content-center'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
          <div class = \"row justify-content-center\">
                <div class=\"col-12\">
                 {{ content.field_shared_h1_title }}
                </div>
                <div class=\"shared_buttons justify-content-center\">
                    {{content.field_shared_button_link[0]}}
                    {{content.field_shared_button_link[1]}}
                </div>
          </div>
    {% endblock %}
  </div>
{% endblock paragraph %}


", "themes/dedrone/templates/paragraph/paragraph--shared-h1-buttons.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--shared-h1-buttons.html.twig");
    }
}
