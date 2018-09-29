<?php

/* __string_template__2f6873e59a250442369abdb792905bbe0c1ab0f5f402afb983080255aabb1044 */
class __TwigTemplate_74f32a71791d7fe6f4032b4e27b2899d92ffde60e176225991a4e6e16e8ca10c extends Twig_Template
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
        echo "<div id=\"search\" class=\"lo_search\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"lo_search__field\" />
  <span class=\"lo_search__icon--button\">
    <button type=\"button\" class=\"lo_search__icon\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__2f6873e59a250442369abdb792905bbe0c1ab0f5f402afb983080255aabb1044";
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
/* <div id="search" class="lo_search">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="lo_search__field" />*/
/*   <span class="lo_search__icon--button">*/
/*     <button type="button" class="lo_search__icon"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
