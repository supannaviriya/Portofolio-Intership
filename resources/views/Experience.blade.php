@extends('layouts.main')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



<main class="container  col-xxl-8 px-4 py-5">
<div class="row flex-lg-row-reverse p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-10 col-sm-8 col-lg-6">
    <img src={{asset('image/logo-kmbd.png')}} class="mx-lg-5 img-fluid" alt="Bootstrap Themes" width="350" height="400" loading="lazy" >
    </div>

    <div class="col-md-6 px-0">
      <h1 class="display-4 fw-bold">Organization Experience</h1>
      <p class="fs-4 lead mt-4">While studying, I was also active in organizing the Dhammavaddhana Buddhist Student Family, which provided many soft skills such as leadership, public speaking, critical thinking.
    </p>
    </div>
  </div>

  <div class="container-marketing">
  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Head of Dhamma and Education Division KMBD BINUS University</h2>
      <p class="text-muted">January 2021 - December 2021</p>
      <p class="lead fw-bold">My Job as a Head of Dhamma and Education Division is as follows:</p>
      <ul class="list-unstyled lh-base">
        <ul>
        <li class="mt-3">Organize all routine activities in the
          Dhamma and Education Division such as
          Chanting, Buddhist Education Class, and
          Dhamma Class.
        </li>
        <li class="mt-3">Coordinate with all Activists and Staff in
          the Dhamma and Education Division.
        </li>
        <li class="mt-3">
          Responsible for all relations related to
          Dhamma and Education Division.
        </li>
      </ul>
      </ul>
     </div>
      <div class="col-md-5 order-md-1">
        <img src={{asset('image/foto-kobid1.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
     
      </div>
    </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Activist of Dhamma and Education Division KMBD BINUS University</h2>
      <p class="text-muted">January 2021 - December 2021</p>
      <p class="lead fw-bold">My Job as a Activist Dhamma and Education Division is as follows:</p>

      <ul class="list-unstyled lh-base">
        <ul>
        <li class="mt-3">Assist in managing routine
          activities in the Dhamma and
          Education Division.
        </li>
        <li class="mt-3">Actively participates in routine
          activities in the Dhamma and
          Education Division.
        </li>
      </ul>
      </ul>
    </div>

    <div class="col-md-5 order-md-1">
      <img src={{asset('image/foto-aktivis1.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Event Advisor of Magha Puja 2564 B.E./2021</h2>
      <p class="text-muted">December 2020 - March 2021</p>
      <p class="lead text-justify">
        This Magha Puja celebration aims to
        celebrate the Buddhist holy day which
        commemorates 4 important events.
        The Magha Puja event has a theme,
        Strong with the heart Dhamma, which
        aims to strengthen the hearts of
        Buddhist students.</p>
        
        <ul class="list-unstyled lh-base">
        <ul>
       <li class="mt-3">
        My job as an event advisor is to
        supervise and guide the committee
        and is responsible for the success of
        the event.
        </li> 
        </ul>
        </ul>
      </div>
    <div class="col-md-5">
      <img src={{asset('image/poster-magha_puja.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
      <li class="text-center">
        <a class = "link-dark" href="https://kmbd.info/event/39"> Magha Puja 2021</a>
      </li>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Event Advisor of Asadha Puja 2565 B.E./2021</h2>
      <p class="text-muted">March 2021 - August 2021</p>
      <p class="lead text-justify">
        This Asadha Puja celebration aims to
        celebrate the Buddhist holy day which
        commemorates 3 important events.
        The Magha Puja event has a theme, Fill
        Your Personality With Dhamma, which
        aims to discuss our personality that
        related to Dhamma.
        </p>
        
        <ul class="list-unstyled lh-base">
        <ul>
       <li class="mt-3">
        My job as an event advisor is to
        supervise and guide the committee
        and is responsible for the success of
        the event.
        </li> 
        </ul>
        </ul>
      </div>
    <div class="col-md-5">
      <img src={{asset('image/poster-asadha-puja.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
      <li class="text-center">
        <a class = "link-dark" href="https://student-activity.binus.ac.id/kmbd/2021/08/asadha-puja-2565-b-e-2021/"> Asadha Puja 2021</a>
      </li>
    </div>
  </div>

  <hr class="featurette-divider">


  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Event Advisor of Temu Keakraban Aktivis Pengurus</h2>
      <p class="text-muted">June 2020 - July 2021</p>
      <p class="lead text-justify">
        Temu Keakraban Aktivis Pengurus or TKAP is
        one of the internal activities of the
        Dhammavaddhana KMB which aims to build
        solidarity between KMBD administrators and
        activists. TKAP has the theme Una In
        Perpetuum which means One In Forever.
        This theme means that by participating in this
        event, all activists and staff can have a good
        relationship and become closer.
</p>
        
        <ul class="list-unstyled lh-base">
        <ul>
       <li class="mt-3">
        My job as an event advisor is to supervise and
        guide the committee and is responsible for
        the success of the event.
        </li> 
        </ul>
        </ul>
      </div>
    <div class="col-md-5">
      <img src={{asset('image/poster-tkap.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
      <li class="text-center">
        <a class = "link-dark" href="https://kmbd.info/event/52"> TKAP 2021</a>
      </li>
    </div>
  </div>

  <hr class="featurette-divider">


  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Project Manager of LKMB Activist KMBD BINUS University
        </h2>
      <p class="text-muted">December 2020 - April 2021</p>
      <p class="lead text-justify">
        LKMB Activist is a leadership training
        for activists with the theme Born To
        Be A Leader Through Dhamma. The
        purpose of this training is to train
        activists to become good leaders
        according to Buddhist teachings.</p>
        
        <ul class="list-unstyled lh-base">
        <ul>
       <li class="mt-3">
        My job as an project manager is in
        charge of designing the training
        concept, dividing tasks between all
        committees and being responsible for
        the success of the event.
        </li> 
        </ul>
        </ul>
      </div>
    <div class="col-md-5">
      <img src={{asset('image/poster-lkmbA.png')}} class="mt-lg-1 img-thumbnail"  width="500" height="500">
      <li class="text-center">
        <a class = "link-dark" href="https://kmbd.info/event/38"> LKMB Aktivis 2021</a>
      </li>
    </div>
  </div>

  <hr class="featurette-divider">




   </div>
  

</main>

@endsection

