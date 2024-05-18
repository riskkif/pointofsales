<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point Of Sales</title>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <script src="{{ url('/webfont') }}/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Raleway:300,400,700,900"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <style>
        body {
            font-family: 'Raleway';
            background-color: #e9ebec;
        }

        @media print {
            body {
                visibility: hidden;
            }

            #section-to-print {
                display: block !important;
                visibility: visible;
                position: absolute;
                z-index: 2;
                width: 100%;
                left: 0;
                top: 0;
                bottom: 0;
                right: 0;
            }
        }
    </style>
</head>

<body>


    @if (session()->has('msg_status'))
        <div class="alert alert-{{ session('msg_status') }}" role="alert">
            {!! session('msg') !!}
        </div>
    @endif
    @yield('content')

    <script>
        var subtotal_price = 0;
        var total_price = 0;

        function addToCart(id, nama, harga) {
            const element = document.getElementById("list-menu");
            const element_total = document.getElementById("total");
            const element_subtotal = document.getElementById("subtotal");
            const element_charge = document.getElementById("charge");
            const element_pay_charge = document.getElementById("pay_charge");

            const found = sessionStorage.getItem(`${id}`);

            if (found == null) {
                sessionStorage.setItem(`${id}`, '1');
                element.innerHTML += ` <tr>
                            <td width="50%" align="left">${nama}</td>
                            <td width="20%" align="right"id="${id}"></td>
                            <td width="30%" align="right" id="harga-${id}">Rp ${formatRp(String(harga))}</td>
                        </tr>`;
                subtotal_price += harga;
                total_price += harga;
                element_subtotal.innerHTML = `Rp ${formatRp(String(subtotal_price))}`;
                element_total.innerHTML = `Rp ${formatRp(String(total_price))}`;
                element_charge.innerHTML = `Rp ${formatRp(String(total_price))}`;
                element_pay_charge.innerHTML = `Rp ${formatRp(String(total_price))}`;
            } else {
                const qty = document.getElementById(`${id}`);
                const element_price = document.getElementById(`harga-${id}`);
                const found = sessionStorage.getItem(`${id}`);
                var new_qty = parseInt(found) + 1;
                var new_price = new_qty * harga;
                sessionStorage.setItem(`${id}`, new_qty);
                qty.innerHTML = `x${new_qty}`;
                element_price.innerHTML = `Rp ${formatRp(String(new_price))}`;
                subtotal_price += harga;
                total_price += harga;
                element_subtotal.innerHTML = `Rp ${formatRp(String(subtotal_price))}`;
                element_total.innerHTML = `Rp ${formatRp(String(total_price))}`;
                element_charge.innerHTML = `Rp ${formatRp(String(total_price))}`;
                element_pay_charge.innerHTML = `Rp ${formatRp(String(total_price))}`;
            }
            
        }

        window.onload = function() {
            sessionStorage.clear();
        }

        var btnPrint = document.getElementById("print");
        btnPrint.onclick = function() {
            var prtContent = document.getElementById("bill");
            window.print()
        }

        
        function formatRp(angka) {
            let number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return rupiah;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>