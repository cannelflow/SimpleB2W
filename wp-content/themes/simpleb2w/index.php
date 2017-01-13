<?php get_header() ; ?>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri() ; ?>/img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name"><?php bloginfo('name') ; ?></span>
                        <hr class="star-light">
                        <span class="skills"><?php bloginfo('description') ; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-sm-4 portfolio-item">
                      <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <?php
                          if ( has_post_thumbnail() ) {
                             the_post_thumbnail('full', array('class' => 'img-responsive'));
                            }
                        ?>
                        <!--<img src="<?php echo get_template_directory_uri() ; ?>/img/portfolio/cabin.png" class="img-responsive" alt="">-->
                      </a>
                    </div>
                <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            
            <?php
              $args = array(
                     'page_id' => '24',
                  );
              $query = new WP_Query($args);      
            ?>
            
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php endwhile; else : ?>
	        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php the_title() ; ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <?php the_content() ; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                   
                   <?php echo do_shortcode('[contact-form-7 id="27" title="Contact form"]') ; ?>
                   
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ; ?>    