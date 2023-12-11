<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portafolio|| Eileen Cano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    
<!--estamos creando la barra de navegacion-->
<!--Narvbar-->

<div class ="container">
 
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eileen Cano</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projects">Projects</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div class="row">

   <div class= "col-md-2"></div>

   <div class= "col-md-4">
    <img src="portafolio.png" class="img-" alt="..."></div>

   <div class= "col-md-4 text-center"><br><br><br><br><br>
   <div class="container-body">
        <h6 class="text-md-center fw-bold">Hello!,I'm</h6>
        <h1 class="text-md-center fw-bold">Eileen Cano</h1>
        <h3 class="text-md-center fw-bold">frontend Developer</h3></div>
        
        <div class="container text-center">
          <button type="button" style=" border-radius: 20px;" class="btn btn-light" onclick="window.open('./assets/Currículum.pdf')">Download CV </button>
          <button type="button" style=" border-radius: 20px;" class="btn btn-dark" onclick="location.href='./#contact'">Contact Info</button>
        </div>
       

        <div class="container  p-3">
        <a href="https://github.com/eileencano"><img src="./assets/github.png" width="30px" alt=""></a>
        <img src="assets/linkedin.png" class=img-fluid  width=30px alt="..."> 
        </div>

   </div>


   <div class= "col-md-2"></div>

 </div>
 
 
 <br><br><br><br><br>


<!--segunda parte-->
 <!--About-->
 

  <div class="row">
<div class="row p-5">
  <p class="text-center" id="about">Get to know more.</p>
  <h1 class="text-center" >About me</h1>
</div>

<div class="row">
  <div class= "col-md-1"></div>
  <div class= "col-md-5">
      <img src="porta2.jpeg" class="img-fluid" alt="...">
</div>
  
  <div class="col-md-5 cold-lg-5 text-center p-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="./assets/education.png" width="50px" alt="">
            <h5 class="card-title">Education</h5>
            <p>
              Academic Bachelor-Heisenberg (2018) <br>
              Technologist software analysis and development SENA (2025)
            </p>
          </div>
        </div> <br>
        <p style="text-align: justify; margin: 1;">I am a passionate developer with a solid foundation in programming and problem-solving. Interested in expanding skills, taking on challenges, and exploring new technologies..</p>
        <div class= "col-md-1"></div>
        
  </div>
         
      </div><br><br><br>
      
    </div>
</div> 

<br><br><br>
<img src="assets/arrow.png" class="rounded float-end" width="30px" alt="logo">
<br><br><br><br>

<!--Tercera parte-->
 <!--experience-->

 

<div class="container-body">
<p class="text-center" id="experience">Explore by</p>
 <h1 class="text-md-center fw-bold">Experience</h1>
 </div><br><br><br>
 
 <div class="row">

 <div class="col-md-2"></div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="text-center">Frontend Development</h5>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">HTML<p class="text-start">Basic</p><br>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">JavaScript<p class="text-start">Basic</p><br>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">CSS<p class="text-start">Basic</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5 class="text-center">Fronted Development</h5>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">Git<p class="text-start">Basic</p><br>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">SQL<p class="text-start">Basic</p><br>
        <img src="assets/checkmark.png" class="img-fluid" width="30PX" alt="logo">Php<p class="text-start">Basic</p>
      </div>
    </div>
  </div>
</div>



<br><br><br>
<img src="assets/arrow.png" class="rounded float-end" width="30px" alt="logo">
<br><br><br><br><br><br>


<!--Cuarta parte-->
 <!--Projects-->
 <div class="row">
  <p class="text-lowercase text-center" id="projects">Browse My Recent</p>
  <h1 class="text-center" >Projects</h1>
</div>

<div class="container p-3">
<div class="row row-cols-1 row-cols-md-3">
  <div class="col">
    <div class="card">
      <img src="portafolio1.png"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Project One</h5>
        <div class="container text-center">
        <a href=https://github.com/eileencano/Portafolio-EileenCano.git><button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Github</a></button>
          <button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Live Demo</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/project-2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Project Two</h5>
        <div class="container text-center">
          <button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Github</button>
          <button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Live Demo</button>
        </div>
      </div>
    </div>

  </div>
  <div class="col">
    <div class="card">
      <img src="assets/project-3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Project Three</h5>
        <div class="container text-center">
          <button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Github</button>
          <button type="button" class="btn btn-outline-dark" style=" border-radius: 20px;">Live Demo</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<img src="assets/arrow.png" class="rounded float-end" width="30px" alt="logo">
<br><br><br><br><br><br>


<!--parte Final-->
 <!--Contact Me-->
 <div class="row m-1 p-2">
  <p class="text-center" id="contact"> Get in Touch</p>
  <h1 class="text-center p-2">Contact Me</h1>

  <div class= "col-md-2 text-center p-2"></div>
  <div class="card text-center" style="width: 50rem; border-radius: 30px;">
    <div class="card-body text-center">
      <ul class="list-inline text-center">
        <li class="list-inline-item"><a href=""><img class="img-fluid" src="./assets/email.png" alt="" width="50px">eileencano45@gmail.com</a>
        </li>
        <li class="list-inline-item"><a href=""><img class="img-fluid" src="./assets/linkedin.png" alt="" width="50px">https://www.linkedin.com/in/eileen-cano-a7a3912a4/</a>
        </li>
      </ul>
    </div>
  </div>
</div>
  <div class="text-center">
       <p>Copyright © Eileen Cano. All Rights Reserved</p>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>  
   

  </body>
</html>