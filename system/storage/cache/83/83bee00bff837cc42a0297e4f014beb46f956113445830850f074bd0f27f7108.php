<?php

/* __string_template__2f7041f22417fc87b6df681a988383336646f7e7da4424a80d30b751a2c1c207 */
class __TwigTemplate_7817d1a59d0b84366085da10f7f2f1f3a1a0a17669ec5433497b0bd3eca71fe5 extends Twig_Template
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
        // line 31
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 32
            echo "<nav class=\"lo_navigation--wrapper\">
  <div class=\"container\">
    <ul class=\"lo_navigation\">
      ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                echo "      ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 37
                    echo "      <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
        <div class=\"dropdown-menu\">
          <div class=\"dropdown-inner\"> ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 40
                        echo "            <ul class=\"list-unstyled\">
              ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 42
                            echo "              <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "            </ul>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "</div>
          <a href=\"";
                    // line 46
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
      </li>
      ";
                } else {
                    // line 49
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
      ";
                }
                // line 51
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </ul>
  </div>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__2f7041f22417fc87b6df681a988383336646f7e7da4424a80d30b751a2c1c207";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  91 => 51,  83 => 49,  73 => 46,  70 => 45,  63 => 44,  52 => 42,  48 => 41,  45 => 40,  41 => 39,  33 => 37,  30 => 36,  26 => 35,  21 => 32,  19 => 31,);
    }
}
/* {# {% if categories %}*/
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* {% endif %} #}*/
/* {% if categories %}*/
/* <nav class="lo_navigation--wrapper">*/
/*   <div class="container">*/
/*     <ul class="lo_navigation">*/
/*       {% for category in categories %}*/
/*       {% if category.children %}*/
/*       <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*         <div class="dropdown-menu">*/
/*           <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*             <ul class="list-unstyled">*/
/*               {% for child in children %}*/
/*               <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             {% endfor %}</div>*/
/*           <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*       </li>*/
/*       {% else %}*/
/*       <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </nav>*/
/* {% endif %}*/
/* */
