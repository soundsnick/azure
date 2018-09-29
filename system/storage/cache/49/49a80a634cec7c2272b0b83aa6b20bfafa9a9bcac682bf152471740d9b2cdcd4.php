<?php

/* __string_template__e19b3bf26d67cef09c7a1c0a21d9a8877d6c70a4b4db714389476a89e3b1a0d9 */
class __TwigTemplate_c83ed5ad966d59bff9ac2afbe9c00d731ca851fa7c3607084b495a0efdd0868e extends Twig_Template
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
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"lo_search__icon\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e19b3bf26d67cef09c7a1c0a21d9a8877d6c70a4b4db714389476a89e3b1a0d9";
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
/*   <span class="input-group-btn">*/
/*     <button type="button" class="lo_search__icon"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
