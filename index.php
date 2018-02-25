<?php include 'header.php';?>

<section id="home" class="hero is-fullheight is-dark">
  <div class="parallax">
  </div>
  <div class="hero-body post-parallax">
    <div class="container">
      <div class="columns">
        <div class="column is-8-desktop is-offset-2-desktop has-text-centered">
          <img class="logo" src="assets/brand/logo.svg" alt="Vikanda Gonzales">
          <h1 class="title is-2 is-spaced">
            Hi, I'm Vikanda.
          </h1>
          <h2 class="subtitle is-4">
            I'm a <strong>designer</strong> / <strong>developer</strong> who loves creating beautiful things.
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-foot has-text-centered">
    <a href="#about">
      <small>See my work</small>
      <span class="lnr-chevron-down"></span>
    </a>
  </div>
</section>

<?php include 'nav.php';?>

<section id="about" class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-8-desktop is-offset-2-desktop is-10-tablet is-offset-1-tablet">
        <div class="content">
          <div class="columns is-6 is-variable">
            <div class="profile column is-4">
              <img src="assets/photo.jpg" alt="Vikanda">
            </div>
            <div class="column is-8">
              <h1 class="title has-text-centered">Vikanda Gonzales</h1>
              <p class="has-text-justified">
                I'm a graphic and web designer, illustrator, linguist, polyglot, and gamer. I've spent most of my life moving between different countries. I started designing when I was 11 in an attempt to cope with culture shock, and it turned into one of my most long-lived passions. When I'm not designing, I enjoy traveling, playing video and tabletop games, trying different food, playing the piano, and learning more languages.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="content">
        <div class="columns has-text-centered">
          <div class="skill column is-4-widescreen">
            <span class="lnr-palette"></span>
            <h2 class="title">
              Visual Design<br>& UI/UX
            </h2>
            <h4 class="title">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h4>
            <?php include 'design-stack.php';?>
          </div>
          <div class="skill column is-4-widescreen">
            <span class="lnr-desktop"></span>
            <h2 class="title">
              Front-end<br>Development
            </h2>
            <h4 class="title">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h4>
            <?php include 'design-stack.php';?>
          </div>
          <div class="skill column is-4-widescreen">
            <span class="lnr-server"></span>
            <h2 class="title">
              Back-end<br>Development
            </h2>
            <h4 class="title">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h4>
            <?php include 'design-stack.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="hero is-medium is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="content">
        <div class="columns is-gapless has-text-centered">
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/your-divine-addictions/0.png" alt="Your Divine Addictions">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/gonzales-music/0.png" alt="Gonzales Music">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/vintage-blossoms/0.png" alt="Vintage Blossoms">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/veil-creations/0.png" alt="Veil Creations">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/veil-guild/0.png" alt="Veil Guild">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/the-chobocobros/0.png" alt="The Chobocobros">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/nino-vanessa/0.png" alt="Nino & Vanessa">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/devin-samantha/0.png" alt="Devin & Samantha">
          </div>
          <div class="column is-4-desktop is-6-tablet">
            <img src="assets/projects/meraki/0.png" alt="Meraki">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-8-desktop is-offset-2-desktop is-10-tablet is-offset-1-tablet">
        <div class="content has-text-centered">
          <h1 class="title">Keep in Touch</h1>
          <h3 class="title">For any inquiries, please email me at:</h3>
          <h3 class="subtitle"><a href="mailto:vikanda.gonzales@yahoo.com">vikanda.gonzales@yahoo.com</a></h3>
          <?php include 'social.php';?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>
