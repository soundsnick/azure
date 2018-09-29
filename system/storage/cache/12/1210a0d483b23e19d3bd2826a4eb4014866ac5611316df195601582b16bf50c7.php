<?php

/* __string_template__da0f90db5cb20c09235815c550fdb0265a163c8249c54857740c0120b492fdbc */
class __TwigTemplate_c46666de9fa3d7ce46518ae2a991a02a8b0ca27b31fe8eba6c801aec2ba5c00d extends Twig_Template
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
        echo "<h3 class=\"lo_module-title\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
<div class=\"lo_latest\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"lo_latest__item\">
    <div class=\"lo_latest__item__img\" title=\"";
            // line 5
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($context["product"], "image", array());
            echo ")\"></div>
    <div class=\"lo_latest__item__info\">
      <h4 class=\"lo_latest__title\"><a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
      <div class=\"lo_latest__price--wrapper\">
        ";
            // line 9
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 10
                echo "        <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
        ";
            }
            // line 12
            echo "        <span class=\"lo_latest__see\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__da0f90db5cb20c09235815c550fdb0265a163c8249c54857740c0120b492fdbc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  54 => 12,  48 => 10,  46 => 9,  39 => 7,  32 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3 class="lo_module-title">{{ heading_title }}</h3>*/
/* <div class="lo_latest">*/
/* {% for product in products %}*/
/*   <div class="lo_latest__item">*/
/*     <div class="lo_latest__item__img" title="{{ product.name }}" style="background-image: url({{ product.image }})"></div>*/
/*     <div class="lo_latest__item__info">*/
/*       <h4 class="lo_latest__title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*       <div class="lo_latest__price--wrapper">*/
/*         {% if product.price %}*/
/*         <span class="lo_latest__price">{{ product.price}}</span>*/
/*         {% endif %}*/
/*         <span class="lo_latest__see">{{ text_next }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* </div>*/
/* */
