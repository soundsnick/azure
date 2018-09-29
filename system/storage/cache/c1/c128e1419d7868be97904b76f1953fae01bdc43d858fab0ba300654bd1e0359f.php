<?php

/* __string_template__d606b5d5aac26aee4f48ad92f158d615d2a10495ac352d6c7d1a858f6bc8cf40 */
class __TwigTemplate_9e119e03cedba8ded4cb2d95caaed342920adcc3108388b7bc4415f3c303c0ca extends Twig_Template
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
        echo "<div id=\"search\" class=\"lo_search--wrapper\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"lo_search\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"lo_search__icon\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__d606b5d5aac26aee4f48ad92f158d615d2a10495ac352d6c7d1a858f6bc8cf40";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="lo_search--wrapper">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="lo_search" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="lo_search__icon"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
