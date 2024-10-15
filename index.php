<link rel="stylesheet" href="site/css/main.css">
<div class="header">
  <button class="login-btn">Login</button>
</div>
<div class="tabs">
  <input type="radio" name="tabs" id="tabone" checked="checked">
  <label for="tabone">Registrering</label>
  <div class="tab">
    <h2>Registrering</h2>
    <form action="/registrering_page.php" target="_blank">
      <p><input class="user_name" type="text" placeholder="Navn" required name="Name"></p>
      <p><input class="user_email" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="user_message" type="text" placeholder="Melding" required name="Message"></p>
      <p><button class="user_submit" type="submit">SEND MELDING</button></p>
    </form>
  </div>
  
  <input type="radio" name="tabs" id="tabtwo">
  <label for="tabtwo">Booking</label>
  <div class="tab">
    <h2>Booking</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  
  <input type="radio" name="tabs" id="tabthree">
  <label for="tabthree">Administrativt</label>
  <div class="tab">
    <h2>Administrativt</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
  </div>
</div>