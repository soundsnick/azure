<?php

/* __string_template__68e0892fca3e509c8a52d02733b66582149a8962bf742bf881549ed2b16334d5 */
class __TwigTemplate_e9deea8bb33da88d67022f5fdaa4598b2fba9fa7d94b7a5473a31df959af3dbe extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">
    ";
        // line 4
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 12
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 14
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__68e0892fca3e509c8a52d02733b66582149a8962bf742bf881549ed2b16334d5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  53 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
