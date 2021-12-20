@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Articulo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Título *</label>
                                <input type="text" name="title" class="form-control" required
                                    value="{{ old('title', $post->title) }}">
                            </div>
                            <div class="form-group">
                                <label>Imagen *</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Contenido *</label>
                                <textarea name="body" class="form-control" rows="6"
                                    required>{{ old('body', $post->body) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Contenido Embebido</label>
                                <textarea name="iframe" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
                            </div>
                            <div class="form-group">
                                @csrf
                                @method('PUT')
                                <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
