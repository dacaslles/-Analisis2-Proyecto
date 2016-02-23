<?php

/* base.html.twig */
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
        $__internal_ff51fe8fc9931df9052dd5b4409233c2f0055cc74a999add39a77206196c3e81 = $this->env->getExtension("native_profiler");
        $__internal_ff51fe8fc9931df9052dd5b4409233c2f0055cc74a999add39a77206196c3e81->enter($__internal_ff51fe8fc9931df9052dd5b4409233c2f0055cc74a999add39a77206196c3e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ff51fe8fc9931df9052dd5b4409233c2f0055cc74a999add39a77206196c3e81->leave($__internal_ff51fe8fc9931df9052dd5b4409233c2f0055cc74a999add39a77206196c3e81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dfa06980f68b23c251406b3301c3c2363f8278f94f7808e017d1b8c8067806a = $this->env->getExtension("native_profiler");
        $__internal_1dfa06980f68b23c251406b3301c3c2363f8278f94f7808e017d1b8c8067806a->enter($__internal_1dfa06980f68b23c251406b3301c3c2363f8278f94f7808e017d1b8c8067806a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1dfa06980f68b23c251406b3301c3c2363f8278f94f7808e017d1b8c8067806a->leave($__internal_1dfa06980f68b23c251406b3301c3c2363f8278f94f7808e017d1b8c8067806a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_864099ca58d2dbe108b9aded7acc0c6c22109d117d2a2df438d2274eaf7f6b24 = $this->env->getExtension("native_profiler");
        $__internal_864099ca58d2dbe108b9aded7acc0c6c22109d117d2a2df438d2274eaf7f6b24->enter($__internal_864099ca58d2dbe108b9aded7acc0c6c22109d117d2a2df438d2274eaf7f6b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_864099ca58d2dbe108b9aded7acc0c6c22109d117d2a2df438d2274eaf7f6b24->leave($__internal_864099ca58d2dbe108b9aded7acc0c6c22109d117d2a2df438d2274eaf7f6b24_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6bc38814602f9ea594766414615318f0fff649cba6686d5d7b2c8a3b8ac1d8b = $this->env->getExtension("native_profiler");
        $__internal_d6bc38814602f9ea594766414615318f0fff649cba6686d5d7b2c8a3b8ac1d8b->enter($__internal_d6bc38814602f9ea594766414615318f0fff649cba6686d5d7b2c8a3b8ac1d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6bc38814602f9ea594766414615318f0fff649cba6686d5d7b2c8a3b8ac1d8b->leave($__internal_d6bc38814602f9ea594766414615318f0fff649cba6686d5d7b2c8a3b8ac1d8b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf9e75df6a0057cbed251de1f78bcb4a525c4bc670a7ee1f6db7c230595f8b28 = $this->env->getExtension("native_profiler");
        $__internal_bf9e75df6a0057cbed251de1f78bcb4a525c4bc670a7ee1f6db7c230595f8b28->enter($__internal_bf9e75df6a0057cbed251de1f78bcb4a525c4bc670a7ee1f6db7c230595f8b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf9e75df6a0057cbed251de1f78bcb4a525c4bc670a7ee1f6db7c230595f8b28->leave($__internal_bf9e75df6a0057cbed251de1f78bcb4a525c4bc670a7ee1f6db7c230595f8b28_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
