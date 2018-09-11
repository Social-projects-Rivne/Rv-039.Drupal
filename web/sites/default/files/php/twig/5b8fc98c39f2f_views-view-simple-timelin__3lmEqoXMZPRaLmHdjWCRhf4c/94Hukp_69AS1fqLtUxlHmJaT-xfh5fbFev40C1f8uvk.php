<?php

/* modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig */
class __TwigTemplate_4fb081154b68ed13f5dbca64ebf48826af5d961b3fdda2ca9e1eb3db0667b7e4 extends Twig_Template
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
        $tags = array("if" => 21, "for" => 30);
        $filters = array();
        $functions = array("attach_library" => 20);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
                array('attach_library')
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

        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("simple_timeline/timeline"), "html", null, true));
        echo "
";
        // line 21
        if (($context["attributes"] ?? null)) {
            // line 22
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo ">
";
        }
        // line 24
        echo "  ";
        if (($context["title"] ?? null)) {
            // line 25
            echo "    <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 27
        echo "
  <ul ";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["list"] ?? null), "attributes", array()), "html", null, true));
        echo ">

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 31
            echo "      <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
        <div class=\"timeline-item-wrapper clearfix\">
          <span class=\"timeline-marker\"></span>
          ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
        </div>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
  </ul>

";
        // line 41
        if (($context["attributes"] ?? null)) {
            // line 42
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  98 => 41,  93 => 38,  83 => 34,  76 => 31,  72 => 30,  67 => 28,  64 => 27,  58 => 25,  55 => 24,  49 => 22,  47 => 21,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for a view template to display a list of rows.
 *
 * Available variables:
 * - attributes: HTML attributes for the container.
 * - rows: A list of rows for this list.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's contents.
 * - title: The title of this group of rows. May be empty.
 * - list:
 *   - attributes: HTML attributes for the list element.
 *
 * @see template_preprocess_views_view_simple_timeline()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('simple_timeline/timeline') }}
{% if attributes -%}
  <div{{ attributes }}>
{% endif %}
  {% if title %}
    <h3>{{ title }}</h3>
  {% endif %}

  <ul {{ list.attributes }}>

    {% for row in rows %}
      <li{{ row.attributes }}>
        <div class=\"timeline-item-wrapper clearfix\">
          <span class=\"timeline-marker\"></span>
          {{ row.content }}
        </div>
      </li>
    {% endfor %}

  </ul>

{% if attributes -%}
  </div>
{% endif %}
", "modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig", "/app/web/modules/contrib/simple_timeline/templates/views-view-simple-timeline.html.twig");
    }
}
