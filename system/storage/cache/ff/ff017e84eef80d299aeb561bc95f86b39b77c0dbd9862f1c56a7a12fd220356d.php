<?php

/* __string_template__672f1abc7ff3a0363d4b0d2deaeceacb5b0f940b58d6f201b6901dbff1cf9a48 */
class __TwigTemplate_11558715e340b01bee92d1713c630cddd7da65f6ef60c9094e5796b3da251f44 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<nav class=\"lo_navigation--wrapper\">
  <div class=\"container\">
    <ul class=\"lo_navigation\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "      ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 7
                    echo "      <li class=\"dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
        <div class=\"dropdown-menu\">
          <div class=\"dropdown-inner\"> ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 10
                        echo "            <ul class=\"list-unstyled\">
              ";
                        // line 11
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 12
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
                        // line 14
                        echo "            </ul>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "</div>
          <a href=\"";
                    // line 16
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
      </li>
      ";
                } else {
                    // line 19
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
      ";
                }
                // line 21
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </ul>
  </div>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__672f1abc7ff3a0363d4b0d2deaeceacb5b0f940b58d6f201b6901dbff1cf9a48";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  91 => 21,  83 => 19,  73 => 16,  70 => 15,  63 => 14,  52 => 12,  48 => 11,  45 => 10,  41 => 9,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
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
