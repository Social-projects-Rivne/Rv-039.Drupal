<?php

/* themes/dedrone/templates/paragraph/paragraph--text-row.html.twig */
class __TwigTemplate_19dc2fc10220610096c614ee3d49b7496ae03be999e7fa747142c2b0f1f12e26 extends Twig_Template
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
        $tags = array("set" => 2, "block" => 10);
        $filters = array("clean_class" => 4, "without" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class', 'without'),
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
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["paragraph"] ?? null), "bundle", array()))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 3 => (( !$this->getAttribute(        // line 6
($context["paragraph"] ?? null), "isPublished", array(), "method")) ? ("paragraph--unpublished") : ("")));
        // line 9
        echo "<section class='";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "css_class", array()), "html", null, true));
        echo "'>
";
        // line 10
        $this->displayBlock('paragraph', $context, $blocks);
        // line 24
        echo "</section>
";
    }

    // line 10
    public function block_paragraph($context, array $blocks = array())
    {
        // line 11
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"container\">
      ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "    </div>
  </div>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "          <div class=\"title\">
            ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_title", array()), "html", null, true));
        echo "
          </div>
          <div class=\"wrap-items\">
              ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_title"), "html", null, true));
        echo "
          </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--text-row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  85 => 15,  82 => 14,  79 => 13,  73 => 21,  71 => 13,  65 => 11,  62 => 10,  57 => 24,  55 => 10,  50 => 9,  48 => 6,  47 => 5,  46 => 4,  45 => 2,);
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
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
<section class='{{ content.css_class }}'>
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    <div class=\"container\">
      {% block content %}
          <div class=\"title\">
            {{ content.field_title }}
          </div>
          <div class=\"wrap-items\">
              {{ content|without('field_title') }}
          </div>
      {% endblock %}
    </div>
  </div>
{% endblock paragraph %}
</section>
", "themes/dedrone/templates/paragraph/paragraph--text-row.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--text-row.html.twig");
    }
}
