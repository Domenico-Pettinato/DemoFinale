<div class="col-12 col-md-6 col-lg-4">
  <div class="cardWrapper">
      <img class="cardImageCustom" src="https://picsum.photos/{{400+$article->id}}" alt="">
      <h2 class="cardTextCustom">{{$article->title}}</h2>
      <h5 class="cardTextCustom">{{$article->category->name}}</h5>
      <h4 class="cardTextCustom">€{{$article->price}}</h4>
      <p class="cardTextCustom cardDescriptionCustom">{{$article->description}}</p>
      <p class="cardTextCustom">Articolo di {{$article->user->name}}</p>
      <button>Call to Action</button>
  </div>
</div>




{{-- <div class="card col-4">
  <img src="..." alt="...">
  <div>
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">
      {{$article->description}}
      <button>Scopri di più</button>
    </p>
  </div>
  <ul>
    <li>
      {{$article->price}}
    </li>
  </ul>
  <li>
    <a href="#" >link</a>
  </li>
  <li>
    <p>Annuncio di: {{$article->user->name}}</p>
  </li>
</div> --}}
