<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e83371804a4f70fa65ae7d6e259df403b8c8d24ee8b8145bd02b4573cddf83f9 extends Twig_Template
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
        $__internal_7406ce07bcdee724ad26852fd693d06ce17dad74ccc47f544d0fd7b70a4b9ab2 = $this->env->getExtension("native_profiler");
        $__internal_7406ce07bcdee724ad26852fd693d06ce17dad74ccc47f544d0fd7b70a4b9ab2->enter($__internal_7406ce07bcdee724ad26852fd693d06ce17dad74ccc47f544d0fd7b70a4b9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7406ce07bcdee724ad26852fd693d06ce17dad74ccc47f544d0fd7b70a4b9ab2->leave($__internal_7406ce07bcdee724ad26852fd693d06ce17dad74ccc47f544d0fd7b70a4b9ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */