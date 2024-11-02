<!DOCTYPE html>
<html lang="fr">
<?php
include $P_header;
?>

<body class="index-page">
  <?php
  include $P_tete;
  include $P_script;
  ?>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/bg.jpg" alt="" data-aos="fade-in" />

      <div class="container">
        <div class="row">
          <div class="col-lg-10" style="margin-bottom: 30px">
            <h2 data-aos="fade-up" data-aos-delay="100">
              Bienvenue à Arcadia Zoo
            </h2>
            <p data-aos="fade-up" data-aos-delay="200">
              Découvrez notre parc écologique au cœur de la forêt de
              Brocéliande
            </p>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
            <a href="home#services" class="primary btn-getst">Découvrir</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-5 content">
            <h3>Zoo Arcadia</h3>
            <h2>Notre Zoo Écologique</h2>
            <p>
              Le zoo Arcadia, situé près de la légendaire forêt de Brocéliande
              en Bretagne, France, est un lieu unique qui accueille ses
              visiteurs depuis 1960. Réputé pour sa diversité animale et son
              engagement envers la préservation de la faune et de
              l’environnement, ce zoo est organisé en différents habitats
              naturels recréant les conditions de vie des animaux : la savane,
              la jungle, et les marais.
            </p>
            <p>
              C’est un lieu où la faune, l’éducation, et l’écologie se
              rencontrent pour le plaisir de tous.
            </p>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-sun"></i>
                  <h3>100% Autonome</h3>
                  <p>Énergies renouvelables et autosuffisance énergétique</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-tree"></i>
                  <h3>Respect de la Nature</h3>
                  <p>Préservation des espèces et de leur habitat naturel</p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-house-add"></i>
                  <h3>Diversité des habitats</h3>
                  <p>
                    Immersion dans des environnements variés, recréant les
                    habitats naturels des animaux pour une expérience
                    authentique.
                  </p>
                </div>
              </div>
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-recycle"></i>
                  <h3>Zéro Déchet</h3>
                  <p>Engagement total dans le recyclage et le compostage</p>
                </div>
              </div>
              <!-- End Icon Box -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">
      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in" />

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1"
                class="purecounter" id="nombre_avis_valide"></span>
              <p>Avis</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1"
                class="purecounter" id="nombre_animaux"></span>
              <p>Animaux</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1"
                class="purecounter" id="nombre_utilisateurs_role_2"></span>
              <p>Vétérinaires</p>
            </div>
          </div>
          <!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1"
                class="purecounter" id="nombre_habitats"></span>
              <p>Habitats</p>
            </div>
          </div>
          <!-- End Stats Item -->
        </div>
      </div>
    </section>
    <!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-4" id="listeServices">

        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- Team Section -->
    <section id="habitats" class="team section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Habitats</h2>
        <p></p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-5" id="listeHabitats">

        </div>
        <div class="centerx">
          <a href="habitats" class="btn btn-getst">Voir les habitats</a>
        </div>
      </div>
    </section>
    <!-- /Team Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="assets/img/cta-bg.jpg" alt="" />

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Votre avis nous interesse</h3>
              <p></p>
              <a class=" cta-btn" onclick="afficherModal()">Laisser un commentaire</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Témoignages</h3>
            <p>
              Le zoo Arcadia est bien plus qu'un simple parc animalier. Grâce
              à son engagement écologique, ses habitats immersifs, et son
              souci constant du bien-être animal, il offre à ses visiteurs une
              expérience unique et enrichissante. Voici quelques témoignages
              de visiteurs ravis qui ont pu découvrir la magie de ce lieu
              exceptionnel :
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>
              <div class="swiper-wrapper" id="listeCommentaires">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p></p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p>A108 Street</p>
                  <p>Bretagne, France</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez nous</h3>
                  <p>+33 5589 55488 55</p>
                  <p>+33 6678 254445 41</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>info@zoo-arcadia.com</p>
                  <p>contact@zoo-arcadia.com</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Heure d'ouverture</h3>
                  <p>Mardi - Dimanche</p>
                  <p>9:00 - 15:00</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="200">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre nom" required="" />
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Votre Email" required="" />
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujet" required="" />
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <button type="submit">Envoyer le Message</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>
  <?php include $P_pied ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Modal -->
  <div class="modal fade" id="avisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Votre commentaire
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="php-email-form" id="formCommentaire" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-12">
                <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" required="" />
              </div>

              <div class="col-12">
                <textarea class="form-control" id="commentaire" rows="6" placeholder="Commentaire"
                  required=""></textarea>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-success" id="vSubmit">
                  Envoyer le commentaire <i class="bi bi-arrow-right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(() => {
      asyncPost("recap/get", [], "v", false, false)
        .then(reponse => {
          $("#nombre_avis_valide").attr('data-purecounter-end', reponse.data.nombre_avis_valide || 0)
          $("#nombre_habitats").attr('data-purecounter-end', reponse.data.nombre_habitats || 0)
          $("#nombre_utilisateurs_role_2").attr('data-purecounter-end', reponse.data.nombre_utilisateurs_role_2 || 0)
          $("#nombre_animaux").attr('data-purecounter-end', reponse.data.nombre_animaux || 0)
          new PureCounter();
        })
      asyncPost("services/get", [], "v", false, false)
        .then(reponse => {
          reponse.data.map(service => {
            $("#listeServices").append(` <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0">
                <i class="bi bi-${service.icone}"></i>
              </div>
              <div>
                <h4 class="title">
                  <a   class="stretched-link">${service.nom}</a>
                </h4>
                <p class="description">
                  ${service.description}
                </p>
              </div>
            </div>
          </div>`)
          })
        })
      asyncPost("habitats/get", [], "v", false, false)
        .then(reponse => {
          reponse.data.map(habitat => {
            $("#listeHabitats").append(` <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/habitats/${habitat.image}" class="img-fluid" alt="" />
              <div class="social" key="${habitat.slug}"></div>
            </div>
            <div class="member-info text-center">
              <h4>${habitat.nom}</h4>
              <p>${habitat.description}
                
              </p>
            </div>
          </div>`)
            $(".social").click(function () {
              var key = $(this).attr("key");
              window.location.href = "habitat-detail/" + key;
            });
          })
        })
      asyncPost("commentaires/online", [], "v", false, false)
        .then(reponse => {
          reponse.data.map(message => {
            $("#listeCommentaires").append(` 
            <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-x1.jpg" class="testimonial-img flex-shrink-0"
                        alt="" />
                      <div>
                        <h3>${message.pseudo}</h3>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>${message.commentaire}</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <p style="align:right">${moment(message.date_creation).format("dddd DD MMMM YYYY à HH:mm")}</p>
                  </div>
                </div>
                `)

          })
        })
    })

    $("#formCommentaire").submit((e) => {
      e.preventDefault()
      asyncPost("commentaires/send", [{ key: "commentaire", value: $('#commentaire').val() }, { key: "pseudo", value: $('#pseudo').val() },], "vSubmit", false, false)
        .then(reponse => {
          if (reponse.result) {
            $("#avisModal").modal("hide")
            alert("Votre Commentaire a été soumis à validation")
            $("#commentaire").val('')
            $("#pseudo").val('')
          }
        })
    })

    const afficherModal = () => {
      $("#avisModal").modal("show")
    }
  </script>
</body>

</html>