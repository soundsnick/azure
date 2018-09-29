<?php

/* __string_template__587f5654e2a77547ee1dc6b6240025d8cfc91715d019d96bbe9600bbd7e51d2d */
class __TwigTemplate_b2c6650b2671d5ee20ba245b83ef480e5bf77d2146d0fcc3b82d628b8cb009eb extends Twig_Template
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
                echo "        <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
        ";
            }
            // line 11
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
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__587f5654e2a77547ee1dc6b6240025d8cfc91715d019d96bbe9600bbd7e51d2d";
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
/*     <div class="lo_latest__item__img" title="{{ product.name }}" style="background-image: url({{ product.thumb }})"></div>*/
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
