<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: loginn.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Find Services | QuickFix</title>
<link rel="stylesheet" href="main-style.css">
<style>
.grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px,1fr)); gap:25px; margin-top:30px; }
.card { background:white; padding:30px; border-radius:15px; text-align:center; box-shadow:0 2px 6px rgba(0,0,0,0.2); transition:0.3s; display:flex; flex-direction:column; align-items:center;}
.card:hover {transform:translateY(-10px);}
.card h4 { font-size:1.4rem; margin-bottom:10px; }
.card p { font-weight:bold; font-size:1.1rem; margin-bottom:20px; color:#4895ef; }
.search-box { width:100%; max-width:600px; margin:0 auto 40px; display:block; padding:10px; border-radius:10px; border:2px solid #eee; }
.modal-overlay { position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); display:none; justify-content:center; align-items:center; z-index:2000; }
.modal-content { background:white; padding:40px; border-radius:20px; text-align:center; max-width:400px; }
.success-icon { font-size:50px; color:#4895ef; margin-bottom:20px; }
</style>
</head>
<body>

<nav>
    <h1 onclick="window.location.href='index.html'" style="cursor:pointer">Quick<span>Fix</span></h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="find-service.php">Find Services</a></li>
        <li><a href="javascript:void(0)" onclick="logout()">Logout</a></li>
    </ul>
</nav>

<div class="container">
    <header style="text-align:center; margin-bottom:40px;">
        <h2>Available Services</h2>
        <p>Find the right expert for your task</p>
    </header>

    <input type="text" id="serviceInput" class="search-box" placeholder="Search for service..." onkeyup="filter()">

    <div class="grid" id="serviceGrid">
        <div class="card">
            <h4>Expert Plumbing</h4>
            <p>$20/hr</p>
            <button onclick="bookService('Expert Plumbing')">Book Now</button>
        </div>
        <div class="card">
            <h4>Electrical Repair</h4>
            <p>$25/hr</p>
            <button onclick="bookService('Electrical Repair')">Book Now</button>
        </div>
        <div class="card">
            <h4>AC Maintenance</h4>
            <p>$40/hr</p>
            <button onclick="bookService('AC Maintenance')">Book Now</button>
        </div>
        <div class="card">
            <h4>Car Maintenance</h4>
            <p>$75/hr</p>
            <button onclick="bookService('Car Maintenance')">Book Now</button>
        </div>
        <div class="card">
            <h4>Telephone Maintenance</h4>
            <p>$30/hr</p>
            <button onclick="bookService('Telephone Maintenance')">Book Now</button>
        </div>
    </div>
</div>

<div class="modal-overlay" id="bookingModal">
    <div class="modal-content">
        <div class="success-icon">✔</div>
        <h2 id="bookedServiceName">Service Booked!</h2>
        <p>Our professional will contact you within 30 minutes.</p>
        <button onclick="closeModal()">Great!</button>
    </div>
</div>

<script>

function filter(){
    let val = document.getElementById('serviceInput').value.toLowerCase();
    let cards = document.getElementsByClassName('card');
    for(let card of cards){
        card.style.display = card.innerText.toLowerCase().includes(val) ? "flex" : "none";
    }
}


function bookService(service){
    fetch('book-service.php',{
        method:'POST',
        headers:{'Content-Type':'application/x-www-form-urlencoded'},
        body:'service='+encodeURIComponent(service)
    })
    .then(res=>res.text())
    .then(data=>{
        if(data==="success"){
            document.getElementById('bookedServiceName').innerText = service + " Booked!";
            document.getElementById('bookingModal').style.display='flex';
        } else alert("Booking failed!");
    });
}

function closeModal(){ document.getElementById('bookingModal').style.display='none'; }


function logout(){ window.location.href='logout.php'; }


window.onclick = function(event){
    if(event.target==document.getElementById('bookingModal')) closeModal();
}
</script>

</body>
</html>