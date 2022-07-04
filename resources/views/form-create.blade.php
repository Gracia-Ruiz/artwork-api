@extends('layouts.app')
@section('content')
<main class="container vh-100 mt-5">
    <header class="row">
        <section class="col-12 my-5 mx-auto">
            <h1>Create artwork</h1>
        </section>
        <section>
            <form method="#" action="#" class="row my-4 form" enctype="multipart/form-data" onsubmit="return validation()">
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
                    <label for="status" class="label">Dimensions<div class="details-input-dimensions">(Height x Width x Depth)</div></label>
                </div> 
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
                        <option value="1">Reserved</option>
                        <option value="2">Available</option>
                    </select>
                    <select name="ownership" id="#" class="ps-2 select">
                        <option selected>Select an option</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <input type="text" class="ps-2 select" required>
                    <div class="d-flex check-relative">
                        <button class="border-0 add-dimensions">Add dimensions</button>
                        <div class="form-check form-switch check-dimensions">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Variable dimensions</label>
                            <input class="form-check-input bg-danger border-check" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>
                </div>  
            </form>
        </section>
    </header>
</main>  
@endsection