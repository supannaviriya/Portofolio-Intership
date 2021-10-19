@extends('layouts.main')

@section('content')
    
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
               <a href="http://bit.ly/Project_Mulmed">
                <img src={{asset('image/foto-project_mulmed.png')}} width="100%" height="225" >
                </a>
                <div class="card-body">
                  <p class="card-text">This is a 3rd semester project called the Multimedia
                    project which was jointly created by my team, we have
                    created a computer shop website using HTML5 from
                    Adobe Animate.</p>
                  <div class="d-flex justify-content-between align-items-center">
                   
                    <small class="text-muted">Project Multimedia</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            



    </div>
</div>



@endsection