@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.behance.net%2Fnadhilramandha&psig=AOvVaw1nBxdgxVI2Til7rQulQlxf&ust=1635429550151000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIjYpYHg6vMCFQAAAAAdAAAAABAZ"width="120" height="120"></center>
                <br><br><br>
                <h1>HOME</h1>
                <br>
                <img src="https://goo.gl/maps/1bDDXQ9YQ8FmNwr99" align="center">
                <p>Kami di Downtown Social Bar menyediakan berbagai macam jenis coffe dan makanan dengan harga yang terjangkau namun sangat berkualitas. <br>
                Jl. Kahuripan No.18, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
                <br><br>
                <h1>MENU</h1>
                <br>
                <center><table border="1" style="background-color:#0000FF;color:black;border-color:blue">
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td>London Lemonade</td>
                    <td>start Rp 20.000</td>
                    <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fkatalogkuliner.com%2F2016%2F03%2Fminuman-dingin-es-lemonade-segar.html&psig=AOvVaw2-RZEaxTpp_U0ro22IF7y8&ust=1635427039406000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMD19dfW6vMCFQAAAAAdAAAAABAD"width="120" height="120"></td>
                </tr>
                <tr>
                    <td>Seoul Spring</td>
                    <td>start Rp 28.000</td>
                    <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dimanaja.com%2Fdaftar-menu%2Fshopeefood-downtown-social-bar-klojen-5387cc896e81e507b711c0669fb2aca12ad2ed2e-r&psig=AOvVaw3Zcxl3NfuL-rMnmyBC1m6E&ust=1635427137519000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKCD6YDX6vMCFQAAAAAdAAAAABAE"width="150" height="150"></td>
                </tr>
                <tr>
                    <td>Helsinki Nitro Latte</td>
                    <td>start Rp 25.000</td>
                    <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ftwitter.com%2Ftkkongca%2Fstatus%2F1373251718658490369&psig=AOvVaw1kMvbjlooqGUcqwH7scoOC&ust=1635427604929000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMiKxuPY6vMCFQAAAAAdAAAAABAD"width="120" height="120"></td>
                </tr>
                <tr>
                    <td>Savory Osaka Don</td>
                    <td>start Rp 23.000</td>
                    <td><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dimanaja.com%2Fdaftar-menu%2Fshopeefood-downtown-social-bar-klojen-5387cc896e81e507b711c0669fb2aca12ad2ed2e-r&psig=AOvVaw37My8smAqYaUsOfG63YvKE&ust=1635427750607000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIier6fZ6vMCFQAAAAAdAAAAABAD"width="120" height="120"></td>
                </tr>
                </table></center> 
                <br><br><br>
                <h1>ABOUT US</h1>
                
                <p>Jam Operasional Kami :</p>
                <table>
                    <tr>
                        <th>Hari</th>
                        <th>Jam Buka</th>
                    </tr>
                    <tr>
                        <td>Senin </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Selasa </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Rabu </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Kamis </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Jumat </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Sabtu </td>
                        <td>12.00-00.00</td>
                    </tr>
                    <tr>
                        <td>Minggu </td>
                        <td>12.00-00.00</td>
                    </tr>
                </table>
                <br><br><br>
                <h1>CONTACT US</h1>
                Telp : +6285730613541 <br>
                IG   : downtown.socialbae <br>
                Temukan Store kami di Jl. Kahuripan No.18, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111 <br>
                <br>
                <iframe src="https://goo.gl/maps/SxzNZagrnW1wqMfY9" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 <br>
                 <center>{{ __('Terimakasih telah mengunjungi website kami') }}</center>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
