<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_280993dbc030b5617e4abb2698b6f0fbe5b2364ae8d84a14c1608603b3c1f2e6 extends Twig_Template
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
        $__internal_962ef87f91c1ef4d3e3b0af13af6b9079500ed4a3497f6dac920712b48bac6e9 = $this->env->getExtension("native_profiler");
        $__internal_962ef87f91c1ef4d3e3b0af13af6b9079500ed4a3497f6dac920712b48bac6e9->enter($__internal_962ef87f91c1ef4d3e3b0af13af6b9079500ed4a3497f6dac920712b48bac6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_962ef87f91c1ef4d3e3b0af13af6b9079500ed4a3497f6dac920712b48bac6e9->leave($__internal_962ef87f91c1ef4d3e3b0af13af6b9079500ed4a3497f6dac920712b48bac6e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */