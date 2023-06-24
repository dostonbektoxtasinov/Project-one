@extends('Admin.layouts.main')

@section('table')
    <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="succe" method="post">
                    <form action="{{ route('table.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group mb-4">
                            <label for=""></label>
                            <input type="text" class="form-control p-4" name="ism" placeholder="Ism" />
                            @error('Ism')
                                <p class="help-block text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="familya" placeholder="Familya" />
                            @error('Familya')
                                <p class="help-block text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="lavozim" placeholder="Lavozim" />
                            @error('Lavozim')
                                <p class="help-block text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="stavka" placeholder="Stavka" />
                            @error('Stavka')
                                <p class="help-block text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <input type="number" class="form-control p-4" name="number" placeholder="Raqam" />
                            @error('number')
                                <p class="help-block text-danger mt-4">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex">
                            <button class="btn btn-primary py-3 px-5" type="submit">
                                Saqlash
                            </button>
                            <a href="{{ route('table.index') }}" class="btn btn-success py-3 px-5 float-right">
                                Ortga qaytish
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
