@extends('layouts.app')
@section('content')
<main class="container-fluid mt-5">
  <header class="row">
    <section class="col-12 my-5 mx-auto">
      <h1>Create artwork</h1>
    </section>
    <section>
      <form method="#" action="#" class="row my-4 form" enctype="multipart/form-data" onsubmit="return validation()">
        {{--  primera columna --}}
        <div class="col-2 pe-0">
          <label for="language" class="label">Language<span class="asterisk">*</span></label> 
          <label for="title" class="label">Title<span class="asterisk">*</span></label>
          <label for="serie" class="label">Serie name<span class="info">&#128712;
          </span></label>
          <label for="artist" class="label">Artist<span class="asterisk">*</span></label> 
          <label for="year" class="label">Year</label>
          <label for="inventory" class="label">Inventory ID<span class="asterisk">*</span><span class="info">&#128712;
          </span></label>
          <label for="status" class="label">Status<span class="asterisk">*</span></label> 
          <label for="available" class="label">Availability<span class="asterisk">*</span></label> 
          <label for="ownership" class="label">Ownership</label> 
          <label for="tags" class="label">Tags</label>
          <label for="dimensions" class="label">Dimensions<div class="details-input-dimensions">(Height x Width x Depth)</div></label>
          <label for="video" class="label duration-video">Duration (video)<div class="details-input-dimensions">(Hrs : Min : Secs)</div></label>
          <label for="weight" class="label">Weight</label> 
          <label for="editions" class="mt-5 label">Editions<span class="asterisk">*</span></label> 
          <label for="price" class="mt-5 label">Price<span class="asterisk">*</span></label> 
          <label for="serie" class="label artist-amount">Artist amount<span class="info">&#128712;</span></label>
          <label for="description" class="mt-4 label">Description</label>
          <label for="type" class="mt-4 label">Type</label>
          <label for="technique" class="mt-4 label">Technique</label>
          <label for="support" class="mt-4 label">Support</label>
          <label for="material" class="mt-4 label">Material</label>
          <label for="location" class="mt-4 label">Location</label>
          <label for="sublocation" class="mt-4 label">SubLocation</label>
          <label for="notes" class="mt-4 label">Notes</label>
          <label for="documentation-notes" class="mt-4 label">Documentation<span class="info">&#128712;</span><br>notes</label>
          <label for="pdf-notes" class="mt-4 label">PDF notes<span class="info">&#128712;</span></label>
          
        </div> 
        {{--  segunda columna --}}
        <div class="col-10 pe-0">
          <select name="Language" id="#" class="ps-2 select language d-inline">
            <option value="1">English</option>
            <option value="2">Español</option>
            <option value="3">Italiano</option>
          </select>
          <span class="d-none d-md-inline help">Help</span>
          <input type="text" class="select" required> 
          <input type="text" class="select" required>
          <select name="artist" id="#" class="select">
            <option value="1">Adam Birkett</option>
            <option value="2">Jon Doe</option>
            <option value="3">Maria la Portuguesa</option>
          </select>
          <input type="text" class="ps-2 select" required>
          <input type="text" class="ps-2 select" required>
          <select name="status" id="#" class="ps-2 select">
            <option value="1">Reserved</option>
            <option value="2">Available</option>
          </select>
          <select name="available" id="#" class="ps-2 select">
            <option value="1">Available</option>
            <option value="2">Reserved</option>
          </select>
          <select name="ownership" id="#" class="ps-2 select">
            <option selected>Select an option</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <input type="text" class="ps-2 select" required>
          <div class="d-flex check-relative">
            <button class="border-0 add-dimensions">Add dimensions</button>
            <div class="form-check form-switch check-dimensions d-none d-md-block">
              <label class="form-check-label" for="flexSwitchCheckChecked">Variable dimensions</label>
              <input class="form-check-input bg-danger border-check" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            </div>
          </div>
          <div class="mt-5 group-input">
            <input type="number" class="dimensions-input">
            <input type="number" class="dimensions-input">
            <input type="number" class="dimensions-input">
            <select name="units" id="#" class="select-units">
              <option value="1">cm</option>
              <option value="2">in</option>
            </select>
            <input type="text" class="input-category px-4">
            <span><i class="fa-solid fa-x x-icon"></i></span>
          </div>
          <div class="mt-3 group-input">
            <input type="number" class="dimensions-input">
            <input type="number" class="dimensions-input">
            <input type="number" class="dimensions-input">
            <select name="units" id="#" class="select-units">
              <option value="1">in</option>
              <option value="2">cm</option>
            </select>
            <input type="text" class="input-category px-4">
            <span><i class="fa-solid fa-x x-icon"></i></span>
          </div>
          <div class="mt-3">
            <input type="number" class="video-input">
            <input type="number" class="video-input">
            <input type="number" class="video-input">
          </div>
          <input type="number" class="mt-3 weight-input">
          <div class="d-flex unique-editions">
            <input type="text" class="ps-2 editions" required>
            <button class="border-0 config-edition">Configurar ediciones</button>
            <div class="form-check form-switch unique-dimensions d-none d-md-inline">
              <label class="form-check-label" for="flexSwitchCheckChecked">Unique edition</label>
              <input class="form-check-input bg-danger border-check" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
              <span class="d-none d-md-inline details-editions">There must be at least one edit to be<br>able to use this functionality</span>
            </div>
          </div>
          <button class="border-0 mt-3 add-dimensions">Add price</button>
          <div class="form-check form-switch d-none d-md-inline price-check">
            <label class="form-check-label no-price" for="flexSwitchCheckChecked">No price</label>
            <input class="form-check-input bg-secondary border-check" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          </div> 
          <div class="mt-3">
            <input type="number" class="video-input">
            <select name="units" id="#" class="select-units">
              <option value="1">EUR</option>
              <option value="2">USD</option>
            </select>
            <input type="text" class="price-input">
            <span><i class="fa-solid fa-x x-icon"></i></span>
          </div> 
          <div class="mt-3">
            <input type="number" class="video-input">
            <select name="units" id="#" class="select-units">
              <option value="1">USD</option>
              <option value="2">EUR</option>
            </select>
            <input type="text" class="price-input">
            <span><i class="fa-solid fa-x x-icon"></i></span>
          </div>
          <div class="mt-3">
            <input type="number" class="video-input">
            <select name="units" id="#" class="select-units">
              <option value="1">EUR</option>
              <option value="2">USD</option>
            </select>
            <input type="text" class="price-input">
            <span><i class="fa-solid fa-x x-icon"></i></span>
          </div> 
          <input type="number" class="mt-4 price-input">  
          <select name="units" id="#" class="percent-select">
            <option value="1">Percent</option>
            <option value="2">Percent</option>
          </select>  
          <input type="text" class="ps-2 select mt-3" required>
          <select name="available" id="#" class="ps-2 mt-3 select">
            <option value="1">Available</option>
            <option value="2">Reserved</option>
          </select>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
          <input type="text" class="ps-2 select mt-2" required>
        </div>  
      </form>
    </section>
  </header>
</main>  
@endsection