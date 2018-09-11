<?php

/* themes/dedrone/templates/views/views-view.html.twig */
class __TwigTemplate_2a8cec34a0c42f5d21a434350c9b115d609510beafed2698dcd954c884bf483a extends Twig_Template
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
        $tags = array("set" => 34, "if" => 45);
        $filters = array("clean_class" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
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

        // line 34
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), 2 => ("view-id-" .         // line 37
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 38
($context["display_id"] ?? null)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 42
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <div class=\"container\">
    ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
    ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 48
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
    ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "      <div class=\"view-header\">
        ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 54
        echo "    ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "      <div class=\"view-filters\">
        ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 59
        echo "    ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "      <div class=\"attachment attachment-before\">
        ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo "      <div class=\"view-content\">
        ";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        } elseif (        // line 69
($context["empty"] ?? null)) {
            // line 70
            echo "      <div class=\"view-empty\">
        ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if (($context["pager"] ?? null)) {
            // line 76
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 78
        echo "    ";
        if (($context["attachment_after"] ?? null)) {
            // line 79
            echo "      <div class=\"attachment attachment-after\">
        ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 83
        echo "    ";
        if (($context["more"] ?? null)) {
            // line 84
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 86
        echo "    ";
        if (($context["footer"] ?? null)) {
            // line 87
            echo "      <div class=\"view-footer\">
        ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 91
        echo "    ";
        if (($context["feed_icons"] ?? null)) {
            // line 92
            echo "      <div class=\"feed-icons\">
        ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 96
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/dedrone/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 96,  181 => 93,  178 => 92,  175 => 91,  169 => 88,  166 => 87,  163 => 86,  157 => 84,  154 => 83,  148 => 80,  145 => 79,  142 => 78,  136 => 76,  134 => 75,  131 => 74,  125 => 71,  122 => 70,  120 => 69,  115 => 67,  112 => 66,  110 => 65,  107 => 64,  101 => 61,  98 => 60,  95 => 59,  89 => 56,  86 => 55,  83 => 54,  77 => 51,  74 => 50,  72 => 49,  67 => 48,  61 => 46,  59 => 45,  55 => 44,  49 => 42,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 34,);
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
 * Theme override for a main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <div class=\"container\">
    {{ title_prefix }}
    {% if title %}
      {{ title }}
    {% endif %}
    {{ title_suffix }}
    {% if header %}
      <div class=\"view-header\">
        {{ header }}
      </div>
    {% endif %}
    {% if exposed %}
      <div class=\"view-filters\">
        {{ exposed }}
      </div>
    {% endif %}
    {% if attachment_before %}
      <div class=\"attachment attachment-before\">
        {{ attachment_before }}
      </div>
    {% endif %}

    {% if rows %}
      <div class=\"view-content\">
        {{ rows }}
      </div>
    {% elseif empty %}
      <div class=\"view-empty\">
        {{ empty }}
      </div>
    {% endif %}

    {% if pager %}
      {{ pager }}
    {% endif %}
    {% if attachment_after %}
      <div class=\"attachment attachment-after\">
        {{ attachment_after }}
      </div>
    {% endif %}
    {% if more %}
      {{ more }}
    {% endif %}
    {% if footer %}
      <div class=\"view-footer\">
        {{ footer }}
      </div>
    {% endif %}
    {% if feed_icons %}
      <div class=\"feed-icons\">
        {{ feed_icons }}
      </div>
    {% endif %}
  </div>
</div>
", "themes/dedrone/templates/views/views-view.html.twig", "/app/web/themes/dedrone/templates/views/views-view.html.twig");
    }
}
