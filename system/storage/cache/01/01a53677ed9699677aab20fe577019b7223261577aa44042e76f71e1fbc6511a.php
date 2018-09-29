<?php

/* __string_template__882e48bf3efa262897f2c06ce718b5439e8ab7471645c285b91ae0b476e74b20 */
class __TwigTemplate_cf0fcff2d9c630674a73e6e0dab9314c78f800a972f038564daee332819fb82f extends Twig_Template
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
    <a href=\"";
            // line 4
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">
      <div class=\"lo_latest__item__img\" title=\"";
            // line 5
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($context["product"], "thumb", array());
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
                echo "          <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
          ";
            }
            // line 12
            echo "          <span class=\"lo_latest__see\">";
            echo (isset($context["text_next"]) ? $context["text_next"] : null);
            echo "
        </div>
      </div>
    </a>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__882e48bf3efa262897f2c06ce718b5439e8ab7471645c285b91ae0b476e74b20";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  55 => 12,  49 => 10,  47 => 9,  40 => 7,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="lo_latest">*/
/* {% for product in products %}*/
/*   <div class="lo_latest__item">*/
/*     <a href="{{ product.href }}">*/
/*       <div class="lo_latest__item__img" title="{{ product.name }}" style="background-image: url({{ product.thumb }})"></div>*/
/*       <div class="lo_latest__item__info">*/
/*         <h4 class="lo_latest__title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <div class="lo_latest__price--wrapper">*/
/*           {% if product.price %}*/
/*           <span class="lo_latest__price">{{ product.price}}</span>*/
/*           {% endif %}*/
/*           <span class="lo_latest__see">{{ text_next }}*/
/*         </div>*/
/*       </div>*/
/*     </a>*/
/*   </div>*/
/* {% endfor %}*/
/* </div>*/
/* */
