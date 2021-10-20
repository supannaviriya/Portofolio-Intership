@extends('layouts.main')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>
  var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-toggle="popover"]' ) );
  var popoverList = popoverTriggerList.map( function( popoverTrigger )
  {
      return new bootstrap.Popover( popoverTrigger );
  } );
</script>

<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" 
title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
  Click to toggle popover
</button>

<main class="container  col-xxl-8 px-4 py-5">
<div class="row flex-lg-row-reverse p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-10 col-sm-8 col-lg-6">
    <img src={{asset('image/logo-kmbd.png')}} class=" mx-lg-5 img-fluid" alt="Bootstrap Themes" width="350" height="400" loading="lazy" >
    </div>

    <div class="col-md-6 px-0">
      <h1 class="display-4 fw-bold">Organization Experience</h1>
      <p class="fs-4 lead mt-4">While studying, I was also active in organizing the Dhammavaddhana Buddhist Student Family, which provided many soft skills such as leadership, public speaking, critical thinking.
    </p>
    </div>
  </div>

  <div class="row mb-2">

    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
  
          </div>
        </div>
      </div>
    </div>


   </div>
  

</main>

@endsection

