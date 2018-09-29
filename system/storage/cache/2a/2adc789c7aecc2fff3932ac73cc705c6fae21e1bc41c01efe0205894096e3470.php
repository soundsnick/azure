<?php

/* __string_template__a5c80ae852b78dc0da00a8af11e4d631ab274b4356873f7370197b9e5e71511f */
class __TwigTemplate_a1bbccc31655abc1be6606a89d1686f96f6a33d90b5a153942d154177cf29f94 extends Twig_Template
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
    </a>
    <div class=\"lo_latest__item__info\">
      <h4 class=\"lo_latest__title\"><a href=\"";
            // line 8
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
      <div class=\"lo_latest__price--wrapper\">
        ";
            // line 10
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 11
                echo "        <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
        ";
            }
            // line 13
            echo "        <span class=\"lo_latest__see\">";
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
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a5c80ae852b78dc0da00a8af11e4d631ab274b4356873f7370197b9e5e71511f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  56 => 13,  50 => 11,  48 => 10,  41 => 8,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="lo_latest">*/
/* {% for product in products %}*/
/*   <div class="lo_latest__item">*/
/*     <a href="{{ product.href }}">*/
/*       <div class="lo_latest__item__img" title="{{ product.name }}" style="background-image: url({{ product.thumb }})"></div>*/
/*     </a>*/
/*     <div class="lo_latest__item__info">*/
/*       <h4 class="lo_latest__title"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*       <div class="lo_latest__price--wrapper">*/
/*         {% if product.price %}*/
/*         <span class="lo_latest__price">{{ product.price}}</span>*/
/*         {% endif %}*/
/*         <span class="lo_latest__see">{{ text_next }}</span>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endfor %}*/
/* </div>*/
/* */
