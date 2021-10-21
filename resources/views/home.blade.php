@extends('layouts.main')

@section('content')

<div class="container-marketing">
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src= {{ asset('image/foto_formal.jpg') }} class="rounded mx-lg-5 img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold  mb-3">Supanna Viriya Guna Kongoasa</h1>
        <p class="mb-5">Student of School of Computer Science Bina Nusantara University</p>
        <h3 class="display-7 fw-bold lh-1 mt-4"> About Me: </h3>
        <p class="lead text-justify">Currently an active 5th Semester student at
                        the School of Computer Science and Database
                        Streaming at Bina Nusantara University. Active
                        in learning things related to data such as
                        Database, Big Data, Database Design, Data
                        Mining. Active in the organization to acquire
                        soft skills such as leadership, teamwork,
                        critical thinking, time management.</p>
        
                        <p class="fw-bold mt-2"> Check out my portfolio presentation:</p>
                        <a href="https://drive.google.com/file/d/1A-xvdljORSMDWnaMgbNnAS6oK2mPUbGw/view?usp=sharing">
                        <button type="button" class="btn btn-outline-primary">Portfolio</button></a>

        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          
        </div>
      </div>
    </div>
  </div>

  
<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse text-center p-4 p-md-5 mb-4 text-white rounded bg-danger">
    
    <div class="col-lg-12">
      <h1 class="display-5 fw-bold  mb-3">Skill and Abilites</h1>
  
      
  <div class="container overflow-hidden">
    <div class="row gx-2">

      <div class="mt-2 col-6">
       <div class="fs-4 text-center text-white p-4 border bg-dark">Time Management</div>
      </div>

      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">SQL Server Management Studio</div>
      </div>

      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Critical Thinking</div>
      </div>
    
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">C Programming</div>
      </div>

      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Public Speaking</div>
      </div>

      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Laravel</div>
      </div>
      
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Problem Solving</div>
      </div>
      
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">HTML5, CSS, JavaScript</div>
      </div>
      
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Teamwork</div>
      </div>
      
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">R Programming</div>
      </div>
   
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">leadership</div>
      </div>
      
      <div class="mt-2 col-6">
        <div class="fs-4 text-center text-white p-4 border bg-dark">Microsoft Word, Microsoft Excel, Microsoft Power Point</div>
      </div>
    
    </div>
  </div>
      <div class="d-grid gap-2 d-md-flex justify-content-center-center">
        
      </div>
    </div>
  </div>
</div>


<div class="row flex-lg-row-reverse p-4 p-mt-2 mb-5 text-white rounded bg-success">
  <div class="mr-5 d-inline">
  <img src={{asset('image/logo-binus.png')}} class="mx-lg-5 img-fluid" alt="Bootstrap Themes" width="400" height="400" loading="lazy" >
  </div>

  <div class="d-inline">
    <h1 class="display-4 fw-bold">Education</h1>
    <h2 class="col-md-6 fs-4">Jembatan Budaya Junior High School</h2>
    <p class="col-md-6 fs-5">2013-2016</p>
    
    <h2 class="col-md-6 fs-4">Jembatan Budaya Senior High School</h2>
    <p class="col-md-6 fs-5">Science Major 2016-2019</p>

    <h2 class="col-md-6 fs-4">Bina Nusantara University
      </h2>
    <p class="col-md-6 fs-5">Computer Science Major 2019-2023</p>
  </p>
  </div>
</div>





</div>



@endsection
