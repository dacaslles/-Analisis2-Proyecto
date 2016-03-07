<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0cd15e0cb6359203cc7d6af9d801943413d5ed699107e56e6a9be83896caf091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f76e79b63a62797913c188b39e9500f4860c61ba7c76f1d0f3c4fea4ab3059 = $this->env->getExtension("native_profiler");
        $__internal_d8f76e79b63a62797913c188b39e9500f4860c61ba7c76f1d0f3c4fea4ab3059->enter($__internal_d8f76e79b63a62797913c188b39e9500f4860c61ba7c76f1d0f3c4fea4ab3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f76e79b63a62797913c188b39e9500f4860c61ba7c76f1d0f3c4fea4ab3059->leave($__internal_d8f76e79b63a62797913c188b39e9500f4860c61ba7c76f1d0f3c4fea4ab3059_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e9ddfc9d890e9379e965fef5709b2b6723c7aa2eadebcc6a056fb5c2ebf0135 = $this->env->getExtension("native_profiler");
        $__internal_7e9ddfc9d890e9379e965fef5709b2b6723c7aa2eadebcc6a056fb5c2ebf0135->enter($__internal_7e9ddfc9d890e9379e965fef5709b2b6723c7aa2eadebcc6a056fb5c2ebf0135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e9ddfc9d890e9379e965fef5709b2b6723c7aa2eadebcc6a056fb5c2ebf0135->leave($__internal_7e9ddfc9d890e9379e965fef5709b2b6723c7aa2eadebcc6a056fb5c2ebf0135_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff0ec10d2715324588dd81bbb863e9c29797d47969f8bdd773ffe2e8c51abbcf = $this->env->getExtension("native_profiler");
        $__internal_ff0ec10d2715324588dd81bbb863e9c29797d47969f8bdd773ffe2e8c51abbcf->enter($__internal_ff0ec10d2715324588dd81bbb863e9c29797d47969f8bdd773ffe2e8c51abbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff0ec10d2715324588dd81bbb863e9c29797d47969f8bdd773ffe2e8c51abbcf->leave($__internal_ff0ec10d2715324588dd81bbb863e9c29797d47969f8bdd773ffe2e8c51abbcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76baffa5395919c46b954ce2f38c9aa896f5eda1d00f04e601f1ced355d57c08 = $this->env->getExtension("native_profiler");
        $__internal_76baffa5395919c46b954ce2f38c9aa896f5eda1d00f04e601f1ced355d57c08->enter($__internal_76baffa5395919c46b954ce2f38c9aa896f5eda1d00f04e601f1ced355d57c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76baffa5395919c46b954ce2f38c9aa896f5eda1d00f04e601f1ced355d57c08->leave($__internal_76baffa5395919c46b954ce2f38c9aa896f5eda1d00f04e601f1ced355d57c08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
