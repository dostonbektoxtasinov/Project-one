@extends('Admin.layouts.main')

@section('team')
    <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <label class="form-label" style="color: red;">
                            Xodimning rasmi
                            <span style="color: black;">*</span>
                        </label>
                        <input type="file" class="form-control p-4" name="img"
                            placeholder="Rasm" />
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="control-group mb-4">
                        <label class="form-label" style="color: red;">
                            Name
                            <span style="color: black;">*</span>
                        </label>
                        <input type="text" class="form-control p-4" name="name" placeholder="Name" />
                        @error('name')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-4">
                        <label class="form-label" style="color: red;">
                            Lavozim
                            <span style="color: black;">*</span>
                        </label>
                        <input type="text" class="form-control p-4" name="lavozim" placeholder="Lavozim" />
                        @error('Lavozim')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-4">
                        <label class="form-label" style="color: red;">
                            Haqida
                            <span style="color: black;">*</span>
                        </label>
                        <input type="text" class="form-control p-4" name="about" placeholder="Haqida" />
                        @error('Haqida')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                   
                    <div class="flex">
                        <button class="btn btn-primary py-3 px-5" type="submit">
                            Saqlash
                        </button>
                        <a href="{{ route('team.index') }}" class="btn btn-success py-3 px-5 float-right">
                            Ortga qaytish
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


