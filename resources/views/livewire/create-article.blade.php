<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
        <form wire:submit="store">
            <div class="mb-3">
                <label for="createArticleTitle" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="createArticleTitle" aria-describedby="emailHelp" wire:model="title">
            </div>
            <select class="form-select" aria-label="Default select example" wire:model="category_id">
                <option value="" selected>Scegli la tua categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="createArticlePrice" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="createArticlePrice" wire:model="price">
            </div>
            <div class="mb-3">
                <label for="createArticleDescription" class="form-label">Descrizione</label>
                <textarea class="form-control" id="createArticleDescription" rows="3" wire:model="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
