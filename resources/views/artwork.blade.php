@extends('layouts.app')
@section('content')
<main class="container px-5">
    <header class="row mt-5 p-5 justify-content-center">
        <section class="col-12 col-md-7 ps-5 pe-0 imageContainer" id="imageContainer">
        </section>
        <section class="col-12 col-md-5 ps-0 d-flex flex-column justify-content-between text-group">
            <div class="padding-text">
                <h2 id="title" class="h1"></h2>
                <p class="interventions">From series: Interventions</p>
                <p id="author" class="author"></p>
                <div class="d-flex">
                    <div class="d-flex align-items-center">
                        <div class="d-inline-block circleGreen"></div><span class="reserved me-4">Reserved</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-inline-block circleRed"></div><span class="reserved">Available</span>
                    </div>
                </div>
                <p id="stockNumber" class="text-uppercase"></p>
                <p id="age"></p>
                <p id="size"></p>
                <p class="">800€ . 1,299 USD . 700€ with discount</p>
            </div>
            <div class="group-btn">
                <button class="bg-transparent btn-pen"><i class="fa-solid fa-pen"></i></button>
                <button class="btn text-white btn-export">Export PDF</button>
                <button class="text-white btn-send ">Export & send PDF</button>
            </div>
        </section>
    </header>
</main>
@push('scripts')
<script>
    async function getData() {
        const promise = await fetch('http://127.0.0.1:8000/api/index')
        const data = await promise.json();
        
        const artworks = data.artworks;
        
        /* si tenemos muchos datos y queremos hacer un foreach y maquetar de forma dinámica, empezaríamos por aquí */
        /* convertir a Set por si hay duplicados */
        /* volver a convertir a array con Array.from para iterar con el foreach */
        /*  let titles = Array.from(new Set(artworks.map( el => el.title))) */
        /* console.log(titles); */
        /* console.log(artworks[0].title); */
        
        
        /*  primera obra */
        let title = document.querySelector('#title');
        title.innerHTML =
        artworks[0].title;
        
        let author = document.querySelector('#author');
        author.innerHTML =
        artworks[0].author;
        
        let age = document.querySelector('#age');
        age.innerHTML =
        artworks[0].age;
        
        let stockNumber = document.querySelector('#stockNumber');
        stockNumber.innerHTML =
        artworks[0].stockNumber;
        
        let size = document.querySelector('#size');
        size.innerHTML =
        artworks[0].size;
        
        
        let imageContainer = document.querySelector('#imageContainer');
        let image = document.createElement('img')
        image.src = `http://127.0.0.1:8000/storage/${artworks[0].image}`
        image.alt = artworks[0].title;
        
        imageContainer.appendChild(image);
        /*  segunda obra */
        /*  let title = document.querySelector('#title');
        title.innerHTML = 
        artworks[1].title;
        
        let author = document.querySelector('#author');
        author.innerHTML = 
        artworks[1].author;
        
        let age = document.querySelector('#age');
        age.innerHTML = 
        artworks[1].age;
        
        let stockNumber = document.querySelector('#stockNumber');
        stockNumber.innerHTML = 
        artworks[1].stockNumber;
        
        let size = document.querySelector('#size');
        size.innerHTML = 
        artworks[1].size; 
        
        
        let imageContainer = document.querySelector('#imageContainer');
        let image = document.createElement('img')
        image.src = `http://127.0.0.1:8000/storage/${artworks[1].image}`
        
        imageContainer.appendChild(image);*/
    }
    
    getData();
</script>
@endpush
@endsection

