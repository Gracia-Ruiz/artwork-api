<nav class="container-fluid mb-3 py-3 bg-dark">
    <ul class="d-flex justify-content-center m-0">
      <li><a href="{{  route ('artwork')  }}">Artwork</a></li>
      <li><a href="{{  route ('store-view')  }}">Create artwork</a></li>
      <li><a href="{{ route('edit-view',['id'=> $artworks->id]) }}">Edit artwork</a></li>
    </ul>
</nav>