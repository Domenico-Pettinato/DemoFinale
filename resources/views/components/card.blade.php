<div class="card col-4">
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
</div>
