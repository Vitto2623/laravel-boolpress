@extends('layouts.app')

@section('create-post', 'form')

@section('content')
    <main class="bg-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center p-5">

                <form class="row g-3" action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="title" class="form-label">Titolo Post</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="col-md-6">
                        <label for="content" class="form-label">Aggiungi contenuto:</label>
                        <textarea class="form-control" name="content" id="description" cols="500" rows="10" placeholder="...."></textarea>
                    </div>

                    <label for="image_url" class="fs-3">Carica un immagine</label>
                    <input type="file" name="image_url" id="image_url">


                        <div class="col-6">
                            <label for="category">Seleziona una categoria per il post:</label>
                            <select style="border: 2px solid blue" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">    
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>    
                    
                    <div class="col-12  text-center mt-5">
                        <button type="submit" class="btn btn-primary">Aggiungi post</button>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
@endsection