<?php get_header()?>

<section id="home" class="banner" style="background-image: url(<?php echo get_field('banner_img')?>)">
      <div class="container">
        <div class="banner__wrapper">
          <h1>
            <?php echo get_field('banner_title') ?> <br />
            <?php echo get_field('banner_title2') ?>
          </h1>
          <div class="banner__btn">
            <a href="" class="btn bg--transparent">See Projects</a>
            <a href="" class="btn bg--primary">Inquire</a>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="cards">
      <div class="container">
        <div class="cards__title">
          <h2>Services</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
        </div>
        <div class="cards__wrapper">
          <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3>E-Design</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                  molestias eveniet iste ipsam laborum consectetur odit autem
                  necessitatibus nisi maxime.
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
            <a href="">More Details</a>
          </div>
          <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3>Full Design</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                  molestias eveniet iste ipsam laborum consectetur odit autem
                  necessitatibus nisi maxime.
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
            <a href="">More Details</a>
          </div>
          <div class="cards__item">
            <div class="cards__item__wrapper">
              <div class="cards__item__text">
                <h3>Ala Carte</h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum
                  molestias eveniet iste ipsam laborum consectetur odit autem
                  necessitatibus nisi maxime.
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                  <li>Lorem ipsum dolor sit amet.</li>
                </ul>
              </div>
            </div>
            <a href="">More Details</a>
          </div>
        </div>
      </div>
    </section>
    <section id="projects" class="projects">
      <div class="projects__wrapper">
        <div class="projects__item">
          <div class="cue"></div>
          <img src="./img/projects1.png" alt="" />
          <div class="projects__item__text">
            <h3>Kitchen</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
              accusantium debitis! Reprehenderit omnis nemo tempora molestiae,
              consequatur maxime a! Provident.
            </p>
            <a href="" class="btn bg--primary">See projects</a>
          </div>
        </div>
        <div class="projects__item">
          <div class="cue"></div>
          <img src="./img/projects2.png" alt="" />
          <div class="projects__item__text">
            <h3>Bathroom</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
              accusantium debitis! Reprehenderit omnis nemo tempora molestiae,
              consequatur maxime a! Provident.
            </p>
            <a href="" class="btn bg--primary">See projects</a>
          </div>
        </div>
        <div class="projects__item">
          <div class="cue"></div>
          <img src="./img/projects3.png" alt="" />
          <div class="projects__item__text">
            <h3>Living Room</h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
              accusantium debitis! Reprehenderit omnis nemo tempora molestiae,
              consequatur maxime a! Provident.
            </p>
            <a href="" class="btn bg--primary">See projects</a>
          </div>
        </div>
      </div>
    </section>
    <section id="contacts" class="contacts">
      <div class="container">
        <div class="contacts__title">
          <h2>Contacts</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            omnis!
          </p>
        </div>
        <div class="contacts__wrapper">
          <div class="contacts__form">
            <input type="text" placeholder="Name" />
            <input type="text" placeholder="Email" />
            <textarea name="" id="" cols="30" rows="10">Message</textarea>
            <a href="" class="btn bg--primary">Send Message</a>
          </div>
          <div class="contacts__social">
            <table>
              <tr>
                <td><i class="fa-solid fa-map-pin"></i></td>
                <td>Baloc Road, Brgy. San Ignacio, San Pablo City, Laguna</td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-phone"></i></td>
                <td>+639-123456789</td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-envelope"></i></td>
                <td>kamotecue@gmail.com</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>


<?php get_footer() ?>