<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid top-jumbotron">
  <div class="container">
    <!--<h1 class="display-4">notify</h1>-->
    <div class="jumbotron-logo"></div>
    <p class="lead">A great new free app<br>does exactly what you need.</p>
  </div>
</div>


<!--<div class="blog-masthead">-->
<div class="container">
    <div class="card-deck">
        <div class="card">

            <div class="card-img-top">
                <!--<img class="image1" src="wp-content/themes/notifyTheme/img/container.png" />-->
                <img class="featured-icon gears-icon" src="wp-content/themes/notifyTheme/img/gear-white-icon.png" />
            </div>  
            <!--<img class="card-img-top" src="wp-content/themes/notifyTheme/img/container.png" alt="Card image cap">-->

            <div class="card-body">
                <h5 class="card-title">Free For All</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>

            <div class="card-footer">
            </div>
        </div>

        <div class="card">

            <div class="card-img-top">
                <img class="featured-icon star-icon" src="wp-content/themes/notifyTheme/img/star-white-icon.png" />
            </div>

            <div class="card-body">
                <h5 class="card-title">Technical Support</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>

            <div class="card-footer">
            </div>
        </div>
        <div class="card">

            <div class="card-img-top">
                <img class="featured-icon earth-icon" src="wp-content/themes/notifyTheme/img/earth-white-icon.png" />
            </div>

            <div class="card-body">
                <h5 class="card-title">Countless Posibilities</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>

            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid contact-jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h4>Get notified about any update!</h4>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla nisl congue congue. Maecenas nec condimentum libero, at elementum mauris. Phasellus eget nisi dapibus, ultricies nisl at, hendrerit risusuis ornare luctus id sollicitudin ante lobortis at.</p>
                <form>
                    <input class="form-control" id="email" style="width:300px; float:left;" type="email" placeholder="your email@example.com" > <input class="btn btn-success" type="submit" value="Join!">
                </form>
            </div>
            <div class="col-lg-5">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/iFkQEnO3yQI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="col-sm-8 blog-main">
 
 < ?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
 <h2 class="blog-post-title">< ?php the_title(); ?></h2>
 <p class="blog-post-meta">< ?php the_date(); ?> by < ?php the_author(); ?></p>
 < ?php the_content(); ?>
 </div><!-- /.blog-post -->
 <!--< ?php
 endwhile;
 } 
 ?>

 <nav>
 <ul class="pager">
 <li>< ?php next_posts_link('Previous'); ?></li>
 <li>< ?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>

</div>--><!-- /.blog-main -->
<?php get_footer(); ?>