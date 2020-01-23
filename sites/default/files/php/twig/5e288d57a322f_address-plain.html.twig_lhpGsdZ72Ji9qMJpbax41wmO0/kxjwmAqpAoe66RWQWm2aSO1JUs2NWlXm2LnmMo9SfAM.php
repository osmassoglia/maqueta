<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/address/templates/address-plain.html.twig */
class __TwigTemplate_01f780876518d12830550eced1cdddeb1b16b92b6e3bd536a8920d44f1c18b35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 36];
        $filters = ["escape" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 35
        echo "<p class=\"address\" translate=\"no\">
  ";
        // line 36
        if ((($context["given_name"] ?? null) || ($context["family_name"] ?? null))) {
            // line 37
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["given_name"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["family_name"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 39
        echo "  ";
        if (($context["organization"] ?? null)) {
            // line 40
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["organization"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 42
        echo "  ";
        if (($context["address_line1"] ?? null)) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line1"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 45
        echo "  ";
        if (($context["address_line2"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_line2"] ?? null)), "html", null, true);
            echo " <br>
  ";
        }
        // line 48
        echo "  ";
        if ($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])) {
            // line 49
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["dependent_locality"] ?? null), "code", [])), "html", null, true);
            echo " <br>
  ";
        }
        // line 51
        echo "  ";
        if ((($this->getAttribute(($context["locality"] ?? null), "code", []) || ($context["postal_code"] ?? null)) || $this->getAttribute(($context["administrative_area"] ?? null), "code", []))) {
            // line 52
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["locality"] ?? null), "code", [])), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["postal_code"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["administrative_area"] ?? null), "code", [])), "html", null, true);
            echo " <br>
  ";
        }
        // line 54
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["country"] ?? null), "name", [])), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/address/templates/address-plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 54,  107 => 52,  104 => 51,  98 => 49,  95 => 48,  89 => 46,  86 => 45,  80 => 43,  77 => 42,  71 => 40,  68 => 39,  60 => 37,  58 => 36,  55 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/address/templates/address-plain.html.twig", "/home/webs/maqueta/modules/contrib/address/templates/address-plain.html.twig");
    }
}
