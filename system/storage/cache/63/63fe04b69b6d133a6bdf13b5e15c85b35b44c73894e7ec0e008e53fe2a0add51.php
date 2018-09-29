<?php

/* __string_template__f98d3019f14ca8b8dafa10dcabe6437b7b26d6e96d20259dd70c73c7a5f54f30 */
class __TwigTemplate_775cddbc82a6460dd45f1dac019594e9c2c66b1be4db20417552ef397a33124b extends Twig_Template
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
        echo "<div class=\"lo_latest\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  <div class=\"lo_latest__item\">
      <div class=\"lo_latest__item__img\" title=\"";
            // line 4
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo ")\"></div>
      <div class=\"lo_latest__item__info\">
        <h4 class=\"lo_latest__title\"><a href=\"";
            // line 6
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <div class=\"lo_latest__price--wrapper\">
          ";
            // line 8
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 9
                echo "          <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
          ";
            }
            // line 11
            echo "          <span class=\"lo_latest__see\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "</span>
        </div>
      </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__f98d3019f14ca8b8dafa10dcabe6437b7b26d6e96d20259dd70c73c7a5f54f30";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  51 => 11,  45 => 9,  43 => 8,  36 => 6,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="lo_latest">*/
/* {% for product in products %}*/
/*   <div class="lo_latest__item">*/
/*       <div class="lo_latest__item__img" title="{{ product.name }}" style="background-image: url({{ product.thumb }})"></div>*/
/*       <div class="lo_latest__item__info">*/
/*         <h4 class="lo_latest__title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <div class="lo_latest__price--wrapper">*/
/*           {% if product.price %}*/
/*           <span class="lo_latest__price">{{ product.price}}</span>*/
/*           {% endif %}*/
/*           <span class="lo_latest__see">{{ text_next }}</span>*/
/*         </div>*/
/*       </div>*/
/*   </div>*/
/* {% endfor %}*/
/* </div>*/
/* */
