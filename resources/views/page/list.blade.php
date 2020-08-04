@include("include.header")

<main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container">
      
<br>
       <div class="section-title">
          <h2 ><strong> LISTE DES APPRENANT</strong></strong></h2> 
          <a class="btn btn-primary" href="{{ route('nouveau') }}">Ajouter un apprenant</a>
         
        </div>
<div class="table responsive fcontainer" class="tableau">
<table class="table table-striped table-bordered table-over texte1" class="tableau">
<thead>
<th>N°</th>
<th>Nom/prenom</th>
<th>contact</th>
<th>Email</th>
<th>Details</th>
<th>Modifier</th>
<th>Suprimer</th>
</thead>
<tbody>
<?php $i=0; ?>
@foreach($apprenants as $apprenant)
<?php $i++; ?>
<tr>
<td>{{$i}}</td>
<td>{{$apprenant->nom}} {{$apprenant->prenom}}</td>
<td>{{$apprenant->contact}}</td>
<td>{{$apprenant->email}}</td>
<td><a class="btn btn-primary" href=" ">Détail</a></td>
<td><a class="btn btn-dark" href="">Modifier</a></td>
<td>
<form onsubmit="return confirm('voulez-vous vraiment supprimer?')" method="POST" action="{{ route('apprenant.supprimer',['email'=>$apprenant->email]) }}">
@csrf

<input type="submit" value="supprimer" class="btn btn-danger">
 </form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>

</div>
  </section><!-- End Hero -->
  <hr>
     
    
<!-- 
  </main>End #main -->

  
  @include("include.footer")
