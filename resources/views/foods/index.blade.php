@extends('layouts.main')

@section('main')

  <main>
    {{-- JUMBOTRON --}}
    <section id="jumbotron" class="text-white">
      <div class="layer">
        <h1>Il cibo che ami direttamente a casa tua</h1>
      </div>
    </section>
    {{-- /JUMBOTRON --}}

    {{-- SERVICES --}}
    <div class="container">
      <section id="services" class="d-flex justify-content-center p-4">

        <div class="single_card">
          <img src="https://res.cloudinary.com/glovoapp/image/fetch///https://glovoapp.com/images/why-glovo/restaurants.svg" alt="">
          <h3 class="mt-4">500+ ristoranti</h3>
          <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eaque natus unde fugiat nisi alias suscipit velit excepturi?</p>
        </div>
  
        <div class="single_card">
          <img src="https://res.cloudinary.com/glovoapp/image/fetch///https://glovoapp.com/images/why-glovo/delivery.svg" alt="">
          <h3 class="mt-4">Consegna rapida</h3>
          <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eaque natus unde fugiat nisi alias suscipit velit excepturi?</p>
        </div>
  
        <div class="single_card">
          <img src="https://res.cloudinary.com/glovoapp/image/fetch///https://glovoapp.com/images/why-glovo/groceries.svg" alt="">
          <h3 class="mt-4">I migliori piatti e bevande della zona</h3>
          <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eaque natus unde fugiat nisi alias suscipit velit excepturi?</p>
        </div>
  
      </section>
    </div>
    {{-- /SERVICES --}}

    {{-- RESTAURANTS --}}
    <section id="restaurants" class="bg-danger p-4 text-white">
      <h3>restaurants</h3>
      <div class="slick-carousel">
        <div class="bg-warning" style="width: 300px; height: 200px;"></div>
        <div class="bg-primary" style="width: 300px; height: 200px;"></div>
        <div class="bg-success" style="width: 300px; height: 200px;"></div>
        <div class="bg-secondary" style="width: 300px; height: 200px;"></div>
        <div class="bg-dark" style="width: 300px; height: 200px;"></div>
        <div class="bg-info" style="width: 300px; height: 200px;"></div>
      </div>
    </section>
    {{-- /RESTAURANTS --}}


  </main>

@endsection
