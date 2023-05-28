@extends('Admin.layouts.main')

@section('table')
   <div class="container py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="succe" method="post">
                    @csrf
                    <div class="control-group mb-4">
                        <label for=""></label>
                        <input type="text" class="form-control p-4" name="ertalab" placeholder="Dars ertalab" />
                        @error('Dars vaqti')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="kech" placeholder="Dars kech" />
                        @error('Dars vaqti')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="lokatsiya" placeholder="Lokatsiya" />
                        @error('Manzil')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="number" class="form-control p-4" name="nomer" placeholder="Telefon nomer" />
                        @error('Nomer')
                            <p class="help-block text-danger mt-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <input type="email" class="form-control p-4" name="email" placeholder="example@gmail.com" />
                        @error('Email')
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