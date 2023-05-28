@extends('Admin.layouts.main')

@section('about')
<h1 class="text-center p-3">
    About 
</h1>
<div class="container py-5" style="display: flex; justify-content: center;">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('about.store') }}" method="post">
                @csrf
                <div class="control-group mb-4">
                    <label class="form-label" style="color: red;">
                        Sheriklar
                        <span style="color: black;">*</span>
                    </label>
                    <input type="text" class="form-control p-4" name="name" placeholder="Sheriklar" value="{{ old('name') }}" />
                    @error('Sheriklar')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
               
                <div class="control-group mb-4">
                    <label class="form-label" style="color: red;">
                        Ular Qancha
                        <span style="color: black;">*</span>
                    </label>
                    <input type="number" class="form-control p-4" name="number" placeholder="Ular qancha" value="{{ old('number') }}"/>
                    @error('Nomer')
                        <p class="help-block text-danger mt-4">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                        Saqlash
                    </button>
                    <a href="{{ route('about.index') }}" class="btn btn-success py-3 px-5 float-right">
                        Ortga qaytish
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection