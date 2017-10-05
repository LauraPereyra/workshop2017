<!DOCTYPE html>
<html>
<title>Juguetería</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">



<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Inicio</a>
        <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Catálogo</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="#team" class="w3-bar-item w3-button">Catálogo</a>
    </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="{{asset('assets/images/fondo.jpg')}}" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">INFO.</button>
    </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-teal w3-display-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Oh snap! We just showed you a modal..</h4>
            <h5>Because we can <i class="fa fa-smile-o"></i></h5>
        </header>
        <footer class="w3-container w3-teal">
            <p>footer</p>
        </footer>
    </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>CATÁLOGO</h2>
    <p>Juguetes que ofrecemos:</p>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <div class="w3-quarter">
                <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
                <h3>The Perfect Sandwich, A Real NYC Classic</h3>
                <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
                <h3>Let Me Tell You About This Steak</h3>
                <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
                <h3>Cherries, interrupted</h3>
                <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                <p>What else?</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
                <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
                <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
        </div>

        <!-- Second Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center">
            <div class="w3-quarter">
                <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
                <h3>All I Need Is a Popsicle</h3>
                <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
                <h3>Salmon For Your Skin</h3>
                <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
                <h3>The Perfect Sandwich, A Real Classic</h3>
                <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
                <h3>Le French</h3>
                <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
        </div>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>

</div>



<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Siguenos</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>

    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-teal w3-hide-small">Subir</span>
        <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
</footer>

<script>
    // Script for side navigation
    function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }

    // Close side navigation
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>

