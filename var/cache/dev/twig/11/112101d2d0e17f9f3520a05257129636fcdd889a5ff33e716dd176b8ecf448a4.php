<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* employe/add.html.twig */
class __TwigTemplate_6a189a0b10d88d3e2850c871b850db515d9c63265d9c33b886c0b87eb982e62c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ée";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   ";
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <h1>Editer un employé</h1>
    ";
        } else {
            // line 9
            echo "        <h1>Ajouter un employé</h1>
    ";
        }
        // line 11
        echo "    ";
        // line 12
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

        <div class=\"nomPrenom\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'row');
        echo "
        </div>
        <div> 
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 20, $this->source); })()), "dateNaissance", [], "any", false, false, false, 20), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 21, $this->source); })()), "dateEmbauche", [], "any", false, false, false, 21), 'row');
        echo "  
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 22, $this->source); })()), "ville", [], "any", false, false, false, 22), 'row');
        echo "   
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 23, $this->source); })()), "entreprise", [], "any", false, false, false, 23), 'row');
        echo " 
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 24, $this->source); })()), "submit", [], "any", false, false, false, 24), 'row');
        echo " 
        </div>  

    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEmploye"]) || array_key_exists("formAddEmploye", $context) ? $context["formAddEmploye"] : (function () { throw new RuntimeError('Variable "formAddEmploye" does not exist.', 27, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 27,  136 => 24,  132 => 23,  128 => 22,  124 => 21,  120 => 20,  114 => 17,  110 => 16,  104 => 13,  101 => 12,  99 => 11,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ée{% endblock %}

{% block body %}
   {% if edit %}
        <h1>Editer un employé</h1>
    {% else %}
        <h1>Ajouter un employé</h1>
    {% endif %}
    {# {{ form(formAddEmploye) }} #}

    {{ form_start(formAddEmploye) }}

        <div class=\"nomPrenom\">
            {{ form_row(formAddEmploye.prenom) }}
            {{ form_row(formAddEmploye.nom) }}
        </div>
        <div> 
            {{ form_row(formAddEmploye.dateNaissance) }}
            {{ form_row(formAddEmploye.dateEmbauche) }}  
            {{ form_row(formAddEmploye.ville) }}   
            {{ form_row(formAddEmploye.entreprise) }} 
            {{ form_row(formAddEmploye.submit) }} 
        </div>  

    {{ form_end(formAddEmploye) }}

{% endblock %}", "employe/add.html.twig", "C:\\laragon\\www\\SfEntreprise\\templates\\employe\\add.html.twig");
    }
}
