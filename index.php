<link rel="stylesheet" href="site/css/main1.css">
<div class="header">
  <button class="login-btn">Login</button>
</div>
<div class="tabs">
  <input type="radio" name="tabs" id="tabone" checked="checked">
  <label for="tabone">Registrering</label>
  <div class="tab">
    <h2>Registrering</h2>
    <form class="registration-form" action="/submit-registration" method="POST">
  <h2>Motel Registration Form</h2>
  
  <!-- Guest Information -->
  <label for="name">Full Name:</label>
  <input type="text" id="name" name="name" required placeholder="Enter your full name">
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required placeholder="Enter your email">
  
  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
  
  <!-- Date of Stay -->
  <label for="checkin">Check-in Date:</label>
  <input type="date" id="checkin" name="checkin" required>
  
  <label for="checkout">Check-out Date:</label>
  <input type="date" id="checkout" name="checkout" required>
  
  <!-- Room Preferences -->
  <label for="roomtype">Room Type:</label>
  <select id="roomtype" name="roomtype" required>
    <option value="single">Single Room</option>
    <option value="double">Double Room</option>
    <option value="suite">Suite</option>
  </select>
  
  <label for="requests">Special Requests:</label>
  <textarea id="requests" name="requests" rows="4" placeholder="Any special requirements or requests"></textarea>
  
  <!-- Submit Button -->
  <button type="submit" class="submit-btn">Register</button>
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