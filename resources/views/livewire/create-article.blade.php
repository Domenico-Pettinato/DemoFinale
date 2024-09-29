<div class=" container vh-100">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
        <form wire:submit="store">
            <div class="mb-3">
                <label for="createArticleTitle" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="createArticleTitle" aria-describedby="emailHelp" wire:model.blur="title">
                @error('title')
                    <p class="text-danger fst-italic">{{$message}}</p>
                @enderror
            </div>
            <select class="form-select" aria-label="Default select example" wire:model.blur="category_id">
                <option value="" selected>Scegli la tua categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger fst-italic">{{$message}}</p>
            @enderror
            <div class="mb-3">
                <label for="createArticlePrice" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="createArticlePrice" wire:model.blur="price">
                @error('price')
                    <p class="text-danger fst-italic">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="createArticleDescription" class="form-label">Descrizione</label>
                <textarea class="form-control" id="createArticleDescription" rows="3" wire:model.blur="description"></textarea>
                @error('description')
                    <p class="text-danger fst-italic">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Carica annuncio</button>
        </form>
</div>
