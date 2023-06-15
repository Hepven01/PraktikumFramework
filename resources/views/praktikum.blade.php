<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cendana Villas</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"></head>
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet"></head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Cendana Villas</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#recommended">Recommended</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home" >
            <img src="https://img.freepik.com/premium-photo/home-house-exterior-design-showing-tropical-pool-villa-with-sun-bed_41487-564.jpg?w=740">
            <div class="kolom">
                <p class="deskripsi display">Cari Villa #Cendanaaja</p>
                <h2>Kepuasan Anda Nomor 1</h2>
                <p>Indonesian Family Choice</p>
                <p><a href="{{ url('/pelajari') }}" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk fasilitas -->
        <section id ="fasilitas">
            <div class="kolom">
                <p class="deskripsi">You Will Need This</p>
                <h2>Cendana Villas</h2>
                <p>It is equipped with very complete facilities such as AC, TV and Wifi, Workspace, GYM, Swimming pool and Bathroom equipped with warm water, hairdryer and shampoo.</p>
                <p>We also have a 24-hour reception service and have a very large vehicle parking area equipped with security and CCTV in several places.</p>
                <p>We provide many attractive promos, don't miss it! let's register soon and get many other promos.</p>
                <p><a href="" onclick="myFunction()" class="tbl-pink">Promo Info</a></p>
            </div>
            <img src="https://img.freepik.com/premium-photo/3d-rendering-luxury-living-room-interior-design-interior_674881-1737.jpg?w=740">
        </section>

        <!-- untuk recommended -->
        <section id="recommended">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Recommendation</p>
                    <h2>Recommended</h2>
                    <p>Next are some of the room recommendations we have.</p>
                </div>

                <div class="recommended-list">
                    <div class="kartu-recommended">
                        <img src="https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/jasa-arsitek-jember-jawa-timur-desain-rumah-bapak-taufan-57887115100720024922-9.jpg"/>
                        <p>VIP 1</p>
                    </div>
                    <div class="kartu-recommended">
                        <img src="https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/jasa-arsitek-banten-desain-rumah-villa-bali-2-lantai-bapak-warsa-89529586290920030311-1.jpg"/>
                        <p>VIP 2</p>
                    </div>
                    <div class="kartu-recommended">
                        <img src="https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/1280/jasa-arsitek-jakarta-barat-desain-rumah-ibu-rita-418899314061020101830-3.jpg"/>
                        <p>VIP 3</p>
                    </div>
                    <div class="kartu-recommended">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/406102187.jpg?k=db7ce5f8cf5b14a4646cc0255759d0f516de02b72f24522e7b98a9c370f442af&o=&hp=1"/>
                        <p>VIP 4</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Cendana Villas</h3>
                    <p>Indonesian Family Choice</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Villa Cendana is a villa located on the island of Bali, this villa prioritizes customer satisfaction by providing good service, complete facilities and lots of promos and price discounts. The location of our villa is also very strategic, you can relax by enjoying the beautiful views of the beach and stunning mountain views, this will make your vacation even more enjoyable. What are you waiting for, just contact us directly at the number listed on the side, we are ready to serve 24 hours.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl . Ahmad Yani Bali</p>
                    <p>Kode Pos: 72109</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p> <b> YouTube : </b>Cendana Villas</p>
                    <p> <b> Instagram: </b>cendana_villa</p>
                    <p> <b> Email: </b>CendanaVillas@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction(){
            alert("You can get a 20% discount for booking a room and 30% for booking a VIP room at the end of the year.");
        }
    </script>
</body>
</html>
