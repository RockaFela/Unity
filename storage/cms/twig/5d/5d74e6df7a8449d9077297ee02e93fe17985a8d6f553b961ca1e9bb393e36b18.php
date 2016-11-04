<?php

/* C:\wamp\www\web/themes/offa/pages/samples/about.htm */
class __TwigTemplate_6e2e699f66e939c8c7c3362b7594727fc79c8d0c73d321726743bd2b6bde2126 extends Twig_Template
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
        echo "<section id=\"about-us\">
        <div class=\"container\">
\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t<h2>About Corlate</h2>
\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t</div>
\t\t\t
\t\t\t<!-- about us slider -->
\t\t\t<div id=\"about-slider\">
\t\t\t\t<div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<!-- Indicators -->
\t\t\t\t  \t<ol class=\"carousel-indicators visible-xs\">
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
\t\t\t\t  \t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t<img src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider_one.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider_one.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider_one.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i> 
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t<a class=\" right carousel-control hidden-xs\"href=\"#carousel-slider\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 
\t\t\t\t\t</a>
\t\t\t\t</div> <!--/#carousel-slider-->
\t\t\t</div><!--/#about-slider-->
\t\t\t
\t\t\t
\t\t\t<!-- Our Skill -->
\t\t\t<div class=\"skill-wrap clearfix\">
\t\t\t
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Our Skill</h2>
\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"joomla-skill\">                                   
\t\t\t\t\t\t\t\t<p><em>85%</em></p>
\t\t\t\t\t\t\t\t<p>Joomla</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"html-skill\">                                  
\t\t\t\t\t\t\t\t<p><em>95%</em></p>
\t\t\t\t\t\t\t\t<p>HTML</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
\t\t\t\t\t\t\t<div class=\"css-skill\">                                    
\t\t\t\t\t\t\t\t<p><em>80%</em></p>
\t\t\t\t\t\t\t\t<p>CSS</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
\t\t\t\t\t\t\t<div class=\"wp-skill\">
\t\t\t\t\t\t\t\t<p><em>90%</em></p>
\t\t\t\t\t\t\t\t<p>Wordpress</p>                                     
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t
            </div><!--/.our-skill-->
\t\t\t

\t\t\t<!-- our-team -->
\t\t\t<div class=\"team\">
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Team of Corlate</h2>
\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 104
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/man1.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 132
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/man2.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->       

\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 177
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/man3.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"";
        // line 203
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/man4.jpg");
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t</div><!--section-->
\t\t</div><!--/.container-->
    </section><!--/about-us-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\web/themes/offa/pages/samples/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 203,  212 => 177,  164 => 132,  133 => 104,  52 => 26,  46 => 23,  40 => 20,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"about-us\">
        <div class=\"container\">
\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t<h2>About Corlate</h2>
\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t</div>
\t\t\t
\t\t\t<!-- about us slider -->
\t\t\t<div id=\"about-slider\">
\t\t\t\t<div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<!-- Indicators -->
\t\t\t\t  \t<ol class=\"carousel-indicators visible-xs\">
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
\t\t\t\t\t    <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
\t\t\t\t  \t</ol>

\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/slider_one.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div>
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/slider_one.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t   <div class=\"item\">
\t\t\t\t\t\t\t<img src=\"{{ 'assets/images/slider_one.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"> 
\t\t\t\t\t   </div> 
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
\t\t\t\t\t\t<i class=\"fa fa-angle-left\"></i> 
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t\t<a class=\" right carousel-control hidden-xs\"href=\"#carousel-slider\" data-slide=\"next\">
\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i> 
\t\t\t\t\t</a>
\t\t\t\t</div> <!--/#carousel-slider-->
\t\t\t</div><!--/#about-slider-->
\t\t\t
\t\t\t
\t\t\t<!-- Our Skill -->
\t\t\t<div class=\"skill-wrap clearfix\">
\t\t\t
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Our Skill</h2>
\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"joomla-skill\">                                   
\t\t\t\t\t\t\t\t<p><em>85%</em></p>
\t\t\t\t\t\t\t\t<p>Joomla</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"html-skill\">                                  
\t\t\t\t\t\t\t\t<p><em>95%</em></p>
\t\t\t\t\t\t\t\t<p>HTML</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
\t\t\t\t\t\t\t<div class=\"css-skill\">                                    
\t\t\t\t\t\t\t\t<p><em>80%</em></p>
\t\t\t\t\t\t\t\t<p>CSS</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\">
\t\t\t\t\t\t\t<div class=\"wp-skill\">
\t\t\t\t\t\t\t\t<p><em>90%</em></p>
\t\t\t\t\t\t\t\t<p>Wordpress</p>                                     
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t
            </div><!--/.our-skill-->
\t\t\t

\t\t\t<!-- our-team -->
\t\t\t<div class=\"team\">
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Team of Corlate</h2>
\t\t\t\t\t<p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/man1.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-top wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/man2.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!--/.col-lg-4 -->\t\t\t\t\t
\t\t\t\t</div> <!--/.row -->
\t\t\t\t<div class=\"row team-bar\">
\t\t\t\t\t<div class=\"first-one-arrow hidden-xs\">
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"first-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"second-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"third-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"fourth-arrow hidden-xs\">
\t\t\t\t\t\t<hr> <i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div> <!--skill_border-->       

\t\t\t\t<div class=\"row clearfix\">   
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">\t
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/man3.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"single-profile-bottom wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"media-object\" src=\"{{ 'assets/images/man4.jpg'|theme }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t<h4>Jhon Doe</h4>
\t\t\t\t\t\t\t\t\t<h5>Founder and CEO</h5>
\t\t\t\t\t\t\t\t\t<ul class=\"tag clearfix\">
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Web</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ui</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Ux</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"btn\"><a href=\"#\">Photoshop</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"social_icons\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li> 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--/.media -->
\t\t\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t<!--/.row-->
\t\t\t</div><!--section-->
\t\t</div><!--/.container-->
    </section><!--/about-us-->";
    }
}
