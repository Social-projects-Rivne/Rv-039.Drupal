<?php

/* themes/dedrone/templates/paragraph/paragraph--slide--home-page.html.twig */
class __TwigTemplate_470dc1295b0a91a3df8620ab7a61a4fd26192648a4466b54afeb42d5fb1b50a6 extends Twig_Template
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
        $tags = array("set" => 2, "block" => 13);
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

        // line 2
        $context["classes"] = array(0 => "wrap-slide", 1 => "paragraph", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
($context["paragraph"] ?? null), "bundle", array()))), 3 => ((        // line 6
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["paragraph"] ?? null), "isPublished", array(), "method")) ? ("paragraph--unpublished") : ("")));
        // line 13
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 14
        echo "        <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "  </div>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "        <div class=\"image-wrap\">
            ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_slide_image", array()), "html", null, true));
        echo "
        </div>
        <div class=\"container\">
            <div class=\"wrap-description\">
                ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_slide_description", array()), "html", null, true));
        echo "
                ";
        // line 23
        echo "
            </div>
            <div class=\"slide-animationimage\">
                ";
        // line 27
        echo "            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/paragraph/paragraph--slide--home-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  86 => 23,  82 => 21,  75 => 17,  72 => 16,  69 => 15,  64 => 30,  62 => 15,  57 => 14,  50 => 13,  48 => 7,  47 => 6,  46 => 5,  45 => 2,);
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
    'wrap-slide',
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished',

  ]
%}
{#Default Slide#}
{#<section class='{{ content.field_sustom_css_class }}'>#}
    {% block paragraph %}
        <div{{ attributes.addClass(classes) }}>
    {% block content %}
        <div class=\"image-wrap\">
            {{ content.field_slide_image }}
        </div>
        <div class=\"container\">
            <div class=\"wrap-description\">
                {{ content.field_slide_description }}
                {#{{ content.field_button }}#}

            </div>
            <div class=\"slide-animationimage\">
                {#{{ content.field_slide_animationimage }}#}
            </div>
        </div>
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/dedrone/templates/paragraph/paragraph--slide--home-page.html.twig", "/app/web/themes/dedrone/templates/paragraph/paragraph--slide--home-page.html.twig");
    }
}
