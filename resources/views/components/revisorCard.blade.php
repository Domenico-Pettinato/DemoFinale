<div class="container vh-100">
    <div class="row mt-5">
        <div class="col-md-7">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/{{399+$article->id}}" class="d-block w-100" alt="Immagine 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/{{400+$article->id}}" class="d-block w-100" alt="Immagine 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/{{401+$article->id}}" class="d-block w-100" alt="Immagine 3">
                    </div>
                </div>
                <!-- Controlli del carosello -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Precedente</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Successivo</span>
                </button>
            </div>
        </div>
        <div class="col-md-5">
            <h3 class="mt-2">{{$article->title}}</h3>
            <h5 class="mt-3">{{$article->category->name}}</h5>
            <h4 class="mt-3">€{{$article->price}}</h4>
            <p class="mt-3">{{$article->description}}</p>
        </div>
    </div>
</div>