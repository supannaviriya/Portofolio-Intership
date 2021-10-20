@extends('layouts.main')


@section('content')


<div class="container-marketing">

<div class="album py-5 bg-light">
<div class="container">
    <div class="row gx-2">
        <div class="col">
            <div class="card shadow-sm">
             <a href="http://bit.ly/Project_Mulmed">
              <img src={{asset('image/foto-project_mulmed.png')}} width="100%" height="225" >
              </a>
              <div class="card-body">
                <p class="card-text">This is a 3rd semester project called the Multimedia
                  project which was jointly created by my team, we have
                  created a computer shop website using HTML5 from
                  Adobe Animate.
              </p>
                <div class="d-flex justify-content-between align-items-center">
                 
                  <small class="text-muted">Project Multimedia</small>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card shadow-sm">
              <a href="http://bit.ly/Project_DatabaseSystem">
              <img src={{asset('image/logo_sql.png')}} width="100%" height="225"> 
              </a>
              <div class="card-body">
                <p class="card-text">This is a 3rd semester project called the Database
                  System project which was jointly created by my
                  team, we have created database from a study case
                  including the ERD. Software that we used is SQL
                  Server Management Studio and Visual Paradigm.
               </p>
                <div class="d-flex justify-content-between align-items-center">
                  
                  <small class="text-muted">Project Database System</small>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col">
              <div class="card shadow-sm">
               <a href="http://bit.ly/Project_HCI">
                <img src={{asset('image/logo-projectHCI.png')}} width="100%" height="225" >
                </a>
                <div class="card-body">
                  <p class="card-text">This is a 4th semester project called the Human and
                    Computer Interaction project which was jointly
                    created by my team, we have created a website
                    using HTML5, CSS, and JavaScript.
                </p>
                  <div class="d-flex justify-content-between align-items-center">
                   
                    <small class="text-muted">Project Human and Computer Interaction</small>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>
</div>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row gx-2">
        
<div class="col">
    <div class="card shadow-sm">
     <a href="http://bit.ly/Research_paper">
      <img src={{asset('image/foto-research.png')}} width="100%" height="225" >
      </a>
      <div class="card-body">
        <p class="card-text">This is a 4th Semester International Paper called the
            Research Topic in Computer Science paper which
            was jointly created by my team, In this paper, we
            raise the topic "The Use of Big Data in Food Safety"
            which explains how big data is implemented for
            food safety.
      </p>
        <div class="d-flex justify-content-between align-items-center">
         
          <small class="text-muted">Research Topic in Computer Science Paper</small>
        </div>
      </div>
    </div>
  </div>
              
                <div class="col">
                <div class="card shadow-sm">
                  <a href="https://github.com/supannaviriya/Data-Visualization-with-R.git">
                  <img src={{asset('image/fotoR.jpg')}} width="100%" height="225"> 
                  </a>
                  <div class="card-body">
                    <p class="card-text">
                        This is my personal project called data visualization. 
                        In this project I use R languages and Rstudio  ​​to visualize 
                        data with barcharts, barplots, histograms, and pie charts.
                   </p>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <small class="text-muted">Project Data visualization using R</small>
                    </div>
                  </div>
                </div>
              </div>

              
              <div class="col">
                <div class="card shadow-sm">
                  
                  <img src={{asset('image/foto-web.png')}} width="100%" height="225"> 
                  
                  <div class="card-body">
                    <p class="card-text">
                      
                  
                    This is a personal project that I made from a web programming course. 
                    This project is called Laravel and used for my internship portfolio, 
                    in this project I created a web from Laravel 8 and publish it on Heroku.

                   </p>
                    <div class="d-flex justify-content-between align-items-center">
                      
                      <small class="text-muted">Project Laravel for Portfolio</small>
                    </div>
                  </div>
                </div>
              </div>
              
              
    </div>
    </div>
    </div>



  </div>




@endsection