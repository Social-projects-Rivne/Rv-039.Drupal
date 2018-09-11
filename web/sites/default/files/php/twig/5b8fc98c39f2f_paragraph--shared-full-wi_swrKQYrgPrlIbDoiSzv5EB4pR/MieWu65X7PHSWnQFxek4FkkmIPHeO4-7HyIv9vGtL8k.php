<?php

/* themes/dedrone/templates/paragraph/paragraph--shared-full-width-col-7-col-5.html.twig */
class __TwigTemplate_11b9627aab25719eb0236194586cc38c87bea6ee6177e02441c1da70fca12cc3 extends Twig_Template
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
        // line 24
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
        // line 22
        echo "  </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "      <div class = \"row\">
            <div class=\"col-7\">
              ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_columns", array()), 0, array(), "array"), "html", null, true));
        echo "
            </div>
            <div class=\"col-5\">
              ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_columns", array()), 1, array(), "array"), "html", null, true));
        echo "
            </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--shared-full-width-col-7-col-5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 13,  73 => 12,  68 => 22,  66 => 12,  61 => 11,  58 => 10,  52 => 24,  50 => 10,  48 => 7,  47 => 6,  46 => 5,  45 => 3,);
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
      <div class = \"row\">
            <div class=\"col-7\">
              {{content.field_columns[0]}}
            </div>
            <div class=\"col-5\">
              {{content.field_columns[1]}}
            </div>
      </div>
    {% endblock %}
  </div>
{% endblock paragraph %}


", "themes/dedrone/templates/paragraph/paragraph--shared-full-width-col-7-col-5.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--shared-full-width-col-7-col-5.html.twig");
    }
}
