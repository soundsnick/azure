<?php

/* __string_template__701de62cfb57ea33e80e1765f214e234aaef0d99de1f5f4c7fe70594bd0ee695 */
class __TwigTemplate_e8b0c34a0e6e8e7a06012438e7f10ce500e86be73f9bcf590defcc59e80522d8 extends Twig_Template
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
  <div class=\"row\">";
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
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
    
</div>
";
        // line 14
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__701de62cfb57ea33e80e1765f214e234aaef0d99de1f5f4c7fe70594bd0ee695";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     */
/* </div>*/
/* {{ footer }}*/
/* */
