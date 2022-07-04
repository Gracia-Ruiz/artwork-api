@extends('layouts.app')
@section('content')
<main class="container vh-100 mt-5">
    <header class="row">
        <section class="col-12 col-md-7 my-5 mx-auto">
            <h1 class="mb-5">Edit artwork</h1>
            <form method="#" action="#" class="form" enctype="multipart/form-data" onsubmit="return validation()">
                <div class="my-5">
                    <label for="language" class="label">Language<span class="asterisk">*</span></label> 
                    <select name="Language" id="#" class="ps-2 language select">
                        <option value="1">English</option>
                        <option value="2">Español</option>
                        <option value="3">Italiano</option>
                    </select>
                    <span class="d-none d-md-inline help">Help</span> 
                </div>
                <div class="mb-4">
                    <label for="title" class="label">Title<span class="asterisk">*</span></label>
                    <input type="text" class="ps-2 select title" required>
                </div>
                <div class="mb-4">
                    <label for="serie" class="label">Serie name<span class="info">&#128712;
                    </span></label>
                    <input type="text" class="ps-2 select serie" required>
                </div>
                <div class="mb-4">
                    <label for="artist" class="label">Artist<span class="asterisk">*</span></label> 
                    <select name="artist" id="#" class="ps-2 select artist">
                        <option value="1">Adam Birkett</option>
                        <option value="2">Jon Doe</option>
                        <option value="3">Maria la Portuguesa</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="year" class="label">Year</label>
                    <input type="text" class="ps-2 select year" required>
                </div>
                <div class="mb-4">
                    <label for="inventory" class="label">Inventory ID<span class="asterisk">*</span><span class="info">&#128712;
                    </span></label>
                    <input type="text" class="ps-2 select inventory" required>
                </div>
                <div class="mb-4">
                    <label for="status" class="label">Status<span class="asterisk">*</span></label> 
                    <select name="status" id="#" class="ps-2 select status">
                        <option value="1">Reserved</option>
                        <option value="2">Available</option>
                    </select>
                </div>
            </form>
        </div>
    </header>
</main>  
@endsection