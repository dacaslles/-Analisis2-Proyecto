<?php

/* ::base.html.twig */
class __TwigTemplate_a3bcf502ec14dc73876ffd73b2fd446011ff79d98984c1e46d5afc6d39f59c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f79c74e63be8dec57e96e2ac8502672acf03f3dcd6ea90f5d64535636ed507 = $this->env->getExtension("native_profiler");
        $__internal_35f79c74e63be8dec57e96e2ac8502672acf03f3dcd6ea90f5d64535636ed507->enter($__internal_35f79c74e63be8dec57e96e2ac8502672acf03f3dcd6ea90f5d64535636ed507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35f79c74e63be8dec57e96e2ac8502672acf03f3dcd6ea90f5d64535636ed507->leave($__internal_35f79c74e63be8dec57e96e2ac8502672acf03f3dcd6ea90f5d64535636ed507_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cd0fc2e6e0023d3571eb7575f2a41a7e552b22a2ca2435f9b3b6f258785f608 = $this->env->getExtension("native_profiler");
        $__internal_2cd0fc2e6e0023d3571eb7575f2a41a7e552b22a2ca2435f9b3b6f258785f608->enter($__internal_2cd0fc2e6e0023d3571eb7575f2a41a7e552b22a2ca2435f9b3b6f258785f608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2cd0fc2e6e0023d3571eb7575f2a41a7e552b22a2ca2435f9b3b6f258785f608->leave($__internal_2cd0fc2e6e0023d3571eb7575f2a41a7e552b22a2ca2435f9b3b6f258785f608_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3927cedf3b676123955cb6bc6e258a15b648477c82b8dced4359fbc65aca66f1 = $this->env->getExtension("native_profiler");
        $__internal_3927cedf3b676123955cb6bc6e258a15b648477c82b8dced4359fbc65aca66f1->enter($__internal_3927cedf3b676123955cb6bc6e258a15b648477c82b8dced4359fbc65aca66f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3927cedf3b676123955cb6bc6e258a15b648477c82b8dced4359fbc65aca66f1->leave($__internal_3927cedf3b676123955cb6bc6e258a15b648477c82b8dced4359fbc65aca66f1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_acbc6dac8c734cdf1e68e411f96e5cfbfed254dac1e1071b5e2843d8cc721a2d = $this->env->getExtension("native_profiler");
        $__internal_acbc6dac8c734cdf1e68e411f96e5cfbfed254dac1e1071b5e2843d8cc721a2d->enter($__internal_acbc6dac8c734cdf1e68e411f96e5cfbfed254dac1e1071b5e2843d8cc721a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_acbc6dac8c734cdf1e68e411f96e5cfbfed254dac1e1071b5e2843d8cc721a2d->leave($__internal_acbc6dac8c734cdf1e68e411f96e5cfbfed254dac1e1071b5e2843d8cc721a2d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80ce6f0b0d5b1ec8ef1366644fc5eff63eb73fc0fc9fd752029fa7bc91e27bc1 = $this->env->getExtension("native_profiler");
        $__internal_80ce6f0b0d5b1ec8ef1366644fc5eff63eb73fc0fc9fd752029fa7bc91e27bc1->enter($__internal_80ce6f0b0d5b1ec8ef1366644fc5eff63eb73fc0fc9fd752029fa7bc91e27bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80ce6f0b0d5b1ec8ef1366644fc5eff63eb73fc0fc9fd752029fa7bc91e27bc1->leave($__internal_80ce6f0b0d5b1ec8ef1366644fc5eff63eb73fc0fc9fd752029fa7bc91e27bc1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
