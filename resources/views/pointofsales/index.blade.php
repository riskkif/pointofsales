@extends('pointofsales.template')
@section('content')




    <div class="row g-0 text-center p-4">
        <div class="col-sm-6 col-md-8">
            <div class="row">
                @foreach ($products as $menu)
                    <div class="card my-2 mx-3"
                        onclick='addToCart("{{ $menu->id }}", "{{ $menu->nama }}", {{ $menu->harga }})'
                        style="width: 17rem; padding: 0;cursor: pointer;">
                        <div class="overflow-hidden">
                            <img width="280px" height="150px" src='{{ asset("storage/$menu->gambar") }}'
                                style="object-fit: cover;" alt="{{ $menu->nama }}">
                        </div>
                        <h3 class="card-text">{{ $menu->nama }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card">
                <div class="card-header" style="background-color: #e3e6f3">
                    <div class="float-start">
                    <ion-icon name="person-circle-outline" style="color: navy; font-size: 85px;"></ion-icon>
                        <br>
                        <h5 style="font-weight:bold; color:navy;">Customer</h5>
                    </div>
                    <div class="float-end ">
                    <ion-icon name="list-outline" style="color: navy; font-size: 85px;"></ion-icon>
                        <br>
                        <h5 style="font-weight:bold; color:navy;">Billing List</h5>
                    </div>
                    <div class="mt-5">
                        <h1 style="font-weight: bold;">New Customer</h1>
                    </div>
                </div>
                <div class="card-body" id="section-to-print">
                    <table class="table table-hover">
                        <tr>
                            <td class="text-center">
                                <h3>Dine In <ion-icon name="chevron-down-outline"  style="font-size: 20px; color: navy;"></ion-icon></i></h3>
                            </td>
                        </tr>
                    </table>
                    <table class="table" style="border: 0px solid #fff;" id="bill">
                        <tr>
                            <td width="40%" align="left">1.</td>
                            <td width="20%"></td>
                            <td width="40%" align="right">View Table</td>
                        </tr>
                        <tbody id="list-menu">

                        </tbody>
                        <tr>
                            <td width="50%" align="left">Sub Total :</td>
                            <td width="20%" align="right"> </td>
                            <td width="30%" align="right" id="subtotal">0</td>
                        </tr>
                        <tr>
                            <td width="50%" align="left">Total :</td>
                            <td width="20%" align="right"> </td>
                            <td width="30%" align="right" id="total">0</td>
                        </tr>
                    </table>
                </div>
                <table class="table table-hover" style="border-top: 1px solid #e3e6f3;font-size: 20px">
                    <tr>
                        <td class="text-center">
                            <button class="btn bg-white btn-light text-dark border-0" onclick="location.reload()">
                            Clear Sale</button>
                        </td>
                    </tr>
                </table>
                <div class="card-footer m-0 p-0">
                    <div>
                        <button type="button" class="btn border-0 me-1 btn-secondary text-dark btn-lg float-start"
                            style="border-radius: 0; width: 49%; background-color: #e3e6f3; font-weight: bold;" data-bs-toggle="modal"
                            data-bs-target="#savebill" >Save Bill</button>
                        <button type="button" class="btn border-0  btn-secondary text-dark btn-lg float-end"
                            style="border-radius: 0; width: 50%; background-color: #e3e6f3; font-weight: bold;" id="print">
                            Print Bill</button>
                    </div>
                    <div style="height: 75px">
                        <button type="button" class="btn border-0 text-white btn-lg float-start"
                            style="border-radius: 0;width: 19%; background-color:navy">
                            <ion-icon name="receipt-outline" style="font-size:25px;"></ion-icon>
                            <br>
                            Split Bill
                        </button>
                        <button type="button" class="btn border-0 text-white btn-lg float-end"
                            style="border-radius: 0;width: 80%; height: 100%; background-color:navy;" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Charge Rp <span id="charge">0</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection