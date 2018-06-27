<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>An Interactive Visualization of NYC Street Trees | A Project by Cloudred</title>
        <meta name="description" content="An Interactive Visualization of NYC Street Trees | a project by Cloudred">
        <meta name="viewport" content="width=device-width">
        <meta name="ROBOTS" CONTENT="INDEX, FOLLOW">
        <meta property="og:title" content="An Interactive Visualization of NYC Street Trees | A Project by Cloudred"/>
        <meta property="og:image" content="http://cloudred.com/labprojects/nyctrees/trees/grid-trees.jpg"/>
        <meta property="og:site_name" content="An Interactive Visualization of NYC Street Trees"/>

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:400,900" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
        
    </head>
    <body>

        <div id="wrapper">
            <ul id="header_links">
                <li class="twitter-btn"><a href="https://twitter.com/cloudred?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @cloudred</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                <li><a href="#" id="reset_ui">Reset</a></li>
                <li><a href="#about">About</a></li>
            </ul>
       
            <div class="container">
              <header>
                    <h1>An Interactive Visualization of NYC Street Trees</h1>
                    
                    <p>Using data provided by <a href="https://nycopendata.socrata.com" target="_blank">NYC Open Data</a>, this visualization shows the variety and quantity of street trees in the five boroughs of New York City.</p>
                </header>
            </div>

            <div id="viz_wrapper"> 
                <div id="bars">


                </div>
                <div id="trees_grid" class="Common">
                    <div id="options">
                        <label>TREE GENUS</label>
                        <div class="switch">
                            <span class="on" data-sort="Common">COMMON</span>
                            <span class="" data-sort="Latin">LATIN</span>
                        </div>
                    </div>
                    <ul class="cf">
                        
                    </ul>
                </div>

                <canvas id="tree_canvas"></canvas>
                <canvas id="hover_canvas"></canvas>
            </div>
            
            <div class="container">
                <div id="about">
                <p name="about"><h3>About</h3></p>
                
                <p>
                    We were curious about the common and no- so-common trees planted in the five boroughs of New York City. We wanted to create a visualization that allow us to quickly evaluate tree distribution.
                </p>

                <blockquote>We believe that engaging, visual interfaces have the power to make complex datasets more accessible.”</blockquote>

                 <p>
                    While this visualizes trees, which we personally love, as an essential element of any urban city, we see this as an experiment or model to visualize other datasets in an additive/subtractive format. We believe that engaging, visual interfaces have the power to make complex datasets more accessible.


                </p>
                <h3>Insight</h3>
                  <p>Trees in the Bronx and Manhattan seem to be distributed more uniformly compared to the other three boroughs. With a high concentrations of certain trees, there is a risk of a pathogen, insect or environmental stress wiping out a large amount of trees. A sizable percentage of trees have been marked “unknown” in the dataset, making the dataset incomplete.
                </p>


                <p>
                    Trees have been grouped by genus. For example, all maple species (Norway Maple, Silver Maple, etc.) have been aggregated as “Maple.”
                </p>
                <p>
                    Concept &amp; Design: <a href="http://cloudred.com/" target="_blank">Cloudred</a> | Programming: Cristian Zapata. Made with jcanvas &amp; jquery</p>

                </div>
            </div>


				
            <div class="container">
                <footer>

                  <p>&copy; Copyright <?php echo date("Y"); ?>. Cloudred Multimedia LLC. All Rights Reserved. </p>
                </footer>
            </div>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src='js/vendor/jcanvas.min.js'></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-1356890-1', 'cloudred.com');
          ga('send', 'pageview');
        </script> 
    </body>
</html>
