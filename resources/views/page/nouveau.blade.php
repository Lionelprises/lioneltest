@include("include.header")
  <main id="main">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('../../assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Cars App</title>
     </head>

<body>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="card " id= "carte">
 
                <div class="card-body ">
                <form  method="post" action="{{route('apprenant.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                        <div class="col-6">
                        <h4 class="formm"> NOUVEL APPRENANT</h4>
                        <div class="form-group">
                                        <div class="custom-file">
                                        <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                        </div>
                                </div>  
                                <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" name="nom"  class="form-control  ">
                                </div>
                                <div class="form-group">
                                        <label for="prenom">Prenom(s) :</label>
                                        <input type="text" name="prenom" id="prenom" class="form-control  ">
                                </div>
                                <div class="form-group">
                                        <label for="filiere">Date de naissance</label>
                                        <input type="text" name="date" id="date" class="form-control  ">
                                        
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="nom">Ville d'origine</label>
                                        <input type="text" name="ville" id="ville" class="form-control  ">
                                        
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="nom">formation</label>
                                        <input type="text" name="formation" id="formation" class="form-control  ">
                                        
                                        </select>
                                </div>
                                <div class="form-group">         
                                        <label for="nom">Etablissement</label>
                                        <input type="text" name="etablissement" id="etablissement" class="form-control  ">
                                      
                                        </select>
                                </div>
                                
                               
                            
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" name="email" id="email" class=" form-control">
                                       

                                </div>
                        <label for="email">contact</label>
                        <br>
                                        <input type="text" name="contact" id="email" class=" form-control">
                                        <br>
                                        <div class="form-group">
                                        <label for="tuteurs_id">Tuteur</label>
                                        <select name="tuteurs_id" class="form-control">
                                        <option value="0" >Choisir le Tuteur</option>
                                        <?php $i=0; ?>
                                        @foreach($tuteurs as $tuteur)
                                        <?php $i++; ?>
                                        <option  value="{{$tuteur->id}}">{{$i}}. {{$tuteur->nom}} {{$tuteur->prenom}}</option>
                                        @endforeach
                                        </select>
                                </div>
                                        <div>
                                        <button type="submit" class="btn btn-success w-40 float-right">Enregistrer</button>
                                        </div>
                                        </form>
                              <br>
                            
                             
                              <form  method="post" action="{{route('tuteur.store')}}">
                              @csrf
                        <h4 class="formm">TUTEUR</h4> 
                                <div class="form-group">
                               
                                        <label for="nom">Nom:</label>
                                        <input type="text" name="nom" id="nom" class="form-control  ">
                                </div>
                                <div>
                                        <label for="ufr">Prénom (s)</label>
                                        <input type="text" name="prenom" id="nom" class="form-control  ">
        
                                    
                                       
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        <label for="nom">Profession</label>
                                        <input type="text" name="profession" id="nom" class="form-control  ">
                                      
                                       
                                        
                                
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="nom">Telephone</label>
                                        <input type="text" name="telephone" id="nom" class="form-control  ">
                                      
                                
                                     
                                       
                                        </select>
                                        
                                </div>
                                <button type="submit" class="btn btn-success w-40 float-right">Enregistrer</button>
            
                </div>
                        
                </form>
            </div>
            </div>

 
</body>
 





    </div>
  </section><!-- End Hero -->
  <hr>
     
    

  </main><!-- End #main -->

  @include("include.footer")





