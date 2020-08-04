
@include("include.header1")

  
  

<main id="main">
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1>Bienvenue</h1>
    <p> sur votre <span class="typed" data-typed-items="Application, Plateforme, Espace de travail,"></span></p>
  </div>
</section><!-- End Hero -->
<hr>
   
<a class="dropdown-item" href="register">ajouter un Administrateur</a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
           </form> <br>
          

</main><!-- End #main -->

@include("include.footer")