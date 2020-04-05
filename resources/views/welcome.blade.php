@extends('layouts.app')

@section('content')
    <div class="container">
        <p style="font-size:36px;" class="mt-5"><span class="text-danger">Hotabnb</span> Book unique homes and<br> experience a city like a local.</p>
        
        <form action="" method="">
            @csrf
            <div class="form-group">
                <div class="row">
                    <input type="text" name="" class="form-control d-inline-block" style="width:40%;" placeholder="Where are you going?">
                    <input type="date" name="" class="form-control d-inline-block ml-5" style="width:20%;">
                    <input type="date" name="" class="form-control d-inline-block ml-5" style="width:20%;">
                </div>
                <div class="row mt-5 text-right">
                    <div class="col-12 text-center">
                        <input type="submit" class="btn btn-danger w-25 d-inline-block" value="Search">
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-5">
    
        <div class="homes">
            <h2 class="mb-3">Homes</h2>
            <div class="d-flex justify-content-between">
                <div class="card m-0 d-inline-block" style="width:30%;">
                    <div class="card-img-top">
                        <img src="/avatars/house1.jpg" alt="" class="w-100">
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, distinctio rerum sit omnis voluptates reiciendis ipsa voluptate expedita beatae natus, libero facere eum aut esse molestias illum quia optio dignissimos.
                    </div>
                </div>
                <div class="card m-0 d-inline-block" style="width:30%;">
                    <div class="card-img-top">
                        <img src="/avatars/house1.jpg" alt="" class="w-100">
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, distinctio rerum sit omnis voluptates reiciendis ipsa voluptate expedita beatae natus, libero facere eum aut esse molestias illum quia optio dignissimos.
                    </div>
                </div>
                <div class="card m-0 d-inline-block" style="width:30%;">
                    <div class="card-img-top">
                        <img src="/avatars/house1.jpg" alt="" class="w-100">
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, distinctio rerum sit omnis voluptates reiciendis ipsa voluptate expedita beatae natus, libero facere eum aut esse molestias illum quia optio dignissimos.
                    </div>
                </div>
            </div>

        <div class="homes mx-auto mt-5">
            <h2>Cities</h2>
            <div class="row mt-5">
                <div class="col-3">
                    Tokyo
                    <a href="">
                        <img src="/avatars/tokyo.jpeg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Kyoto
                    <a href="">
                        <img src="/avatars/kyoto.jpg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Hokkaido
                    <a href="">
                        <img src="/avatars/hokkaido.jpeg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
                <div class="col-3">
                    Osaka
                    <a href="">
                        <img src="/avatars/osaka.jpg" alt="" class="w-100" style="height:190px;">
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection