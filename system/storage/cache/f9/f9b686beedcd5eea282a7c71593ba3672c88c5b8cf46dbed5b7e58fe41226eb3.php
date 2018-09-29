<?php

/* __string_template__b2777bccc99c527b5efea8984b0abe4e2c68d7010504b6ffd4cd5ed27af3066c */
class __TwigTemplate_497178f873d2da70267aee0e813d5ba1f3f452a0ef263a0b8d07e8c1ada384fa extends Twig_Template
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
<!-- <div class=\"lo_latest--wrapper\"> ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 3
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 5
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <p>";
            // line 8
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
        ";
            // line 9
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 10
                echo "        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 11
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 12
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
        ";
            }
            // line 14
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 15
                echo "        <p class=\"price\"> ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 16
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 17
                    echo " <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> ";
                }
                // line 18
                echo "          ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    echo " <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span> ";
                }
                echo " </p>
        ";
            }
            // line 19
            echo " </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 21
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 22
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 23
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " </div> -->
<div class=\"lo_latest\">
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "  <div class=\"lo_latest__item\">
    <div class=\"lo_latest__item__img\">
      <img src=\"";
            // line 32
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" />
    </div>
    <div class=\"lo_latest__item__info\">
      <h4 class=\"lo_latest__title\"><a href=\"";
            // line 35
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
      <div class=\"lo_latest__price--wrapper\">
        ";
            // line 37
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 38
                echo "        <span class=\"lo_latest__price\">";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</span>
        ";
            }
            // line 40
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
        // line 45
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b2777bccc99c527b5efea8984b0abe4e2c68d7010504b6ffd4cd5ed27af3066c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 45,  173 => 40,  167 => 38,  165 => 37,  158 => 35,  148 => 32,  144 => 30,  140 => 29,  136 => 27,  123 => 23,  117 => 22,  111 => 21,  107 => 19,  95 => 18,  88 => 17,  82 => 16,  79 => 15,  76 => 14,  67 => 12,  60 => 11,  55 => 10,  53 => 9,  49 => 8,  43 => 7,  32 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <h3 class="lo_module-title">{{ heading_title }}</h3>*/
/* <!-- <div class="lo_latest--wrapper"> {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p>{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">{% for i in 1..5 %}*/
/*           {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*           {% endfor %}</div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price"> {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*           {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*         {% endif %} </div>*/
/*       <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %} </div> -->*/
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
