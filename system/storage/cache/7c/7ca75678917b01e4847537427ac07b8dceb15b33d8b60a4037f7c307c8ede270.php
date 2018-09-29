<?php

/* __string_template__7eae379ccdde30ad00ece6959415d647b1e9e01f9dc0d38edc4f4baaaff9ffa4 */
class __TwigTemplate_30a5377cb994f3dfe4828b65fbf24f057292df9b3eec052709b9ac0eba4e2a16 extends Twig_Template
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
    <div id=\"content\" class=\"";
        // line 4
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 5
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 7
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7eae379ccdde30ad00ece6959415d647b1e9e01f9dc0d38edc4f4baaaff9ffa4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  32 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">*/
/*     <div id="content" class="{{ class }}">{{ content_top }}{{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
