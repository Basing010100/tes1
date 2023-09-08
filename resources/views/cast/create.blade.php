@extends('layout.master')

@section('judul')
    Tambah Cast
@endsection


@section('content')
<from method="post" action="/cast">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
        </div>

        @error('Nama')
        <div class="alert alert-danger">({ $massage })</div>
        @enderror

    <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" value="" class="form-control">
        </div>
    
        @error('Umur')
        <div class="alert alert-danger">({ $massage })</div>
        @enderror

        <div class="form-group">
        <label>Bio</label>
        <textarea class="form-group" name="bio"> </textarea>
        </div>

        @error('Bio')
        <div class="alert alert-danger">({ $massage })</div>
        @enderror

        <button type="submit" class="btn btn-primary">Simpan </button>
        </form>

    @endsection