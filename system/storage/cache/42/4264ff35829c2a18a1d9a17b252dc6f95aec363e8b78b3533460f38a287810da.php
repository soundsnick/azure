<?php

/* __string_template__c8038822bc5154243348063e51648ca9dd0cd9464d1f9eec7c11ed3846cf5b2d */
class __TwigTemplate_d7d27e3467e87dd83e381fe65a6eb77ec7b4f11e0c14fc852df123d9d49ef1e8 extends Twig_Template
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
    <div class=\"lo_latest__item__img\">
      <img src=\"";
            // line 6
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
    </div>
    <div class=\"lo_latest__item__info\">
      <h4 class=\"lo_latest__title\"><a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
      <div class=\"lo_latest__price--wrapper\">
        ";
            // line 11
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 12
                echo "        <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
        ";
            }
            // line 14
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
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c8038822bc5154243348063e51648ca9dd0cd9464d1f9eec7c11ed3846cf5b2d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  58 => 14,  52 => 12,  50 => 11,  43 => 9,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h3 class="lo_module-title">{{ heading_title }}</h3>*/
/* <div class="lo_latest">*/
/* {% for product in products %}*/
/*   <div class="lo_latest__item">*/
/*     <div class="lo_latest__item__img">*/
/*       <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" />*/
/*     </div>*/
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
