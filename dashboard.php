<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Dashboard</title>
  <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
   
   
 <link rel="stylesheet" href="style.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2> <span class="lab la-accusoft"></span><span>PESAHELA</span></h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li><a href="" class="active"><span class="las la-igloo"></span>
        <span>Dashboard</span></a>
      </li>
      <li><a href=""><span class="las la-users"></span>
        <span>Customers</span></a>
      </li>
      <li><a href=""><span class="las la-clipboard-list"></span>
        <span>Projects</span></a>
      </li>
      <li><a href=""><span class="las la-receipt"></span>
        <span>Inventory</span></a>
      </li>
      <li><a href=""><span class="las la-user-circle"></span>
        <span>Accounts</span></a>
      </li>
      <li><a href=""><span class="fas fa-sign-out"></span>
        <span>Log out</span></a>
      </li>
      </ul>
    </div>
  </div>
<div class="main-content">
  <header>
    <h2>
      <label for="nav-toggle">
        <span class="las la-bars"></span>
      </label>
      Dashboard
    </h2>
    <div class="search-wrapper">
      <span class="las la-search"></span>
      <input type="search" placeholder="Search here"/>
    </div>
    <div class="user-wrapper">
      <img src="images/user.png" width="30px" height="30px" alt="">
      <div>
        <h4>welcome</h4>
      </div>
    </div>
  </header>
  <main>
    <div class="cards">
<div class="card-single" style="background-color: aqua;">
  <div>
    <h1>300</h1>
    <span>EXPENSES</span>
  </div>
  <div>
    <span class="fas la-money-bill"></span>
  </div>
</div>
<div class="card-single" style="background-color:bl;">
  <div>
    <h1>55000</h1>
    <span>PROFITS</span>
  </div>
  <div>
    <span class="fas la-money-bill"></span>
    
  </div>
</div>
<div class="card-single">
  <div>
    <h1>35000</h1>
    <span>ACCOUNT BALANCE</span>
  </div>
  <div>
    <span class="lab la-google-wallet"></span>
  </div>
</div>
<div class="card-single">
  <div>
    <h1>2500</h1>
    <span>WITHDRAWN</span>
  </div>
  <div>
    <span class="lab la-google-wallet"></span>
  </div>
</div>

    </div>
  </main>
</div>
</body>
</html>