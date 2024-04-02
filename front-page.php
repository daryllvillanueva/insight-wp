<?php get_header()?>

<section id="home" class="banner" style="background-image: url(<?php echo get_field('banner_img')?>)">
      <div class="container">
        <div class="banner__wrapper">
          <h1>
            <?php echo get_field('banner_title') ?> <br />
            <?php echo get_field('banner_title2') ?>
          </h1>
          <div class="banner__btn">
            <a href="" class="btn bg--transparent"><?php echo get_field('banner_btn1') ?></a>
            <a href="" class="btn bg--primary"><?php echo get_field('banner_btn2') ?></a>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="cards">
      <div class="container">
        <div class="cards__title">
          <h2><?php echo get_field('features_title')?></h2>
          <p><?php echo get_field('features_par')?></p>
        </div>
        <div class="cards__wrapper">

          <?php 
            $args = array(
              'post_type' => 'featuresPost', 
              'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args)
          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

          <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3><?php the_title()?></h3>
                <?php the_excerpt()?>
                <ul>
                  <li><?php echo get_field('list_1')?></li>
                  <li><?php echo get_field('list_1')?></li>
                  <li><?php echo get_field('list_1')?></li>
                  <li><?php echo get_field('list_1')?></li>
                  <li><?php echo get_field('list_1')?></li>
                </ul>
              </div>
            </div>
            <a href=""><?php echo get_field('features_btn')?></a>
          </div>

          <?php echo get_the_post_thumbnail() ?>
            <?php
              endwhile;
                else :
                   echo "no available content yet";
              endif;
                wp_reset_postdata();
          ?>
        
        </div>
      </div>
    </section>
    <section id="projects" class="projects">
      <div class="projects__wrapper">

        <?php 
            $args = array(
              'post_type' => 'projectPost', 
              'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args)
        ?>

        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

        <div class="projects__item">
          <div class="cue"></div>
          <img src="<?php echo get_field('projects_image')?>" alt="" />
          <div class="projects__item__text">
            <h3><?php the_title()?></h3>
            <?php the_excerpt()?>
            <a href="" class="btn bg--primary"><?php echo get_field('projects_btn')?></a>
          </div>
        </div>

        <?php echo get_the_post_thumbnail() ?>
            <?php
              endwhile;
                else :
                   echo "no available content yet";
              endif;
                wp_reset_postdata();
        ?>

      </div>
    </section>
    <section id="contacts" class="contacts">
      <div class="container">
        <div class="contacts__title">
          <h2><?php echo get_field('contacts_title')?></h2>
          <p>
            <?php echo get_field('contacts_par')?>
          </p>
        </div>
        <div class="contacts__wrapper">
          <div class="contacts__form">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email" />
            <textarea name="" id="" cols="30" rows="10"><?php echo get_field('contacts_textarea')?></textarea>
            <a href="" class="btn bg--primary"><?php echo get_field('contacts_btn')?></a>
          </div>
          <div class="contacts__social">
            <table>
              <tr>
                <td><i class="fa-solid fa-map-pin"></i></td>
                <td><?php echo get_field('contacts_list_1')?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-phone"></i></td>
                <td><?php echo get_field('contacts_list_2')?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-envelope"></i></td>
                <td><?php echo get_field('contacts_list_3')?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>


<?php get_footer() ?>