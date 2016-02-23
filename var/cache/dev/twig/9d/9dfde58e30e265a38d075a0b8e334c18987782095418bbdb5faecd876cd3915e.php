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
        $__internal_1d68c04c54623f2f8102d762895961a5fd5e5e95bc20d4ce0517be55a57cd30d = $this->env->getExtension("native_profiler");
        $__internal_1d68c04c54623f2f8102d762895961a5fd5e5e95bc20d4ce0517be55a57cd30d->enter($__internal_1d68c04c54623f2f8102d762895961a5fd5e5e95bc20d4ce0517be55a57cd30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d68c04c54623f2f8102d762895961a5fd5e5e95bc20d4ce0517be55a57cd30d->leave($__internal_1d68c04c54623f2f8102d762895961a5fd5e5e95bc20d4ce0517be55a57cd30d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e0060480213c96539f36f353286bb450c10b79989b1c7d06bfbb1b4042d7f2b = $this->env->getExtension("native_profiler");
        $__internal_5e0060480213c96539f36f353286bb450c10b79989b1c7d06bfbb1b4042d7f2b->enter($__internal_5e0060480213c96539f36f353286bb450c10b79989b1c7d06bfbb1b4042d7f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e0060480213c96539f36f353286bb450c10b79989b1c7d06bfbb1b4042d7f2b->leave($__internal_5e0060480213c96539f36f353286bb450c10b79989b1c7d06bfbb1b4042d7f2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec353a1062d69068cdf1293a17d78d52afc0f314acf1d64aec64914de8a8db9b = $this->env->getExtension("native_profiler");
        $__internal_ec353a1062d69068cdf1293a17d78d52afc0f314acf1d64aec64914de8a8db9b->enter($__internal_ec353a1062d69068cdf1293a17d78d52afc0f314acf1d64aec64914de8a8db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec353a1062d69068cdf1293a17d78d52afc0f314acf1d64aec64914de8a8db9b->leave($__internal_ec353a1062d69068cdf1293a17d78d52afc0f314acf1d64aec64914de8a8db9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbacabb7f5d40cbe863e406312e6d9d63622991674618defb7791e86dabb3f5d = $this->env->getExtension("native_profiler");
        $__internal_dbacabb7f5d40cbe863e406312e6d9d63622991674618defb7791e86dabb3f5d->enter($__internal_dbacabb7f5d40cbe863e406312e6d9d63622991674618defb7791e86dabb3f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbacabb7f5d40cbe863e406312e6d9d63622991674618defb7791e86dabb3f5d->leave($__internal_dbacabb7f5d40cbe863e406312e6d9d63622991674618defb7791e86dabb3f5d_prof);

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
