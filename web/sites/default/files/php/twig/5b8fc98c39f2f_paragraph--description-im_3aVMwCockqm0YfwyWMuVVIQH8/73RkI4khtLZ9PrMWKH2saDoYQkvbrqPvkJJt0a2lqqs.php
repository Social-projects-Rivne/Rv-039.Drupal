<?php

/* themes/dedrone/templates/paragraph/paragraph--description-images-button.html.twig */
class __TwigTemplate_2341f0fbd80a13390115c996a46abea9150b3685d8005e22707145d6fbb201f4 extends Twig_Template
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
        $tags = array("set" => 2, "block" => 11);
        $filters = array("clean_class" => 4, "without" => 19);
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
        echo "
<section class='";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "css_class", array()), "html", null, true));
        echo "'>
  ";
        // line 11
        $this->displayBlock('paragraph', $context, $blocks);
        // line 28
        echo "</section>
";
    }

    // line 11
    public function block_paragraph($context, array $blocks = array())
    {
        // line 12
        echo "    <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
      <div class=\"container\">
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "      </div>
    </div>
  ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "            <div class=\"titles-wrap\">
                ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_description", array()), "html", null, true));
        echo "
            </div>
            <div class=\"thumbs-wrap\">
                ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_description", "field_link_customers"), "html", null, true));
        echo "
            </div>
            <div class=\"button-wrap\">
                ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_link_customers", array()), "html", null, true));
        echo "
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--description-images-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  93 => 19,  87 => 16,  84 => 15,  81 => 14,  75 => 25,  73 => 14,  67 => 12,  64 => 11,  59 => 28,  57 => 11,  53 => 10,  50 => 9,  48 => 6,  47 => 5,  46 => 4,  45 => 2,);
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
            <div class=\"titles-wrap\">
                {{ content.field_description }}
            </div>
            <div class=\"thumbs-wrap\">
                {{ content|without('field_description', 'field_link_customers') }}
            </div>
            <div class=\"button-wrap\">
                {{ content.field_link_customers }}
            </div>
        {% endblock %}
      </div>
    </div>
  {% endblock paragraph %}
</section>
", "themes/dedrone/templates/paragraph/paragraph--description-images-button.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--description-images-button.html.twig");
    }
}
