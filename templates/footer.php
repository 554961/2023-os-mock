<style>

body {
  display: flex;
  flex-direction: column;
  font-family: Arial, sans-serif;
  min-height: 100vh;
  flex: 1; /* pushes footer to bottom when content is short */

}
/* --- Page layout for sticky footer --- */
html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
    
}


/* Main content area */
main {
  flex: 1;
}

/* Gradient text */
.gradient-text {
  background: linear-gradient(90deg, #ff6a00, #ee0979);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Footer styling */
footer {
  width: 100%;
  text-align: center;
  background-color: white;
  
}

/* Footer layout */
.footer-links {
  display: flex;
  justify-content: center;
  gap: 25%;
  padding-top: 10px;
  color: black;
}

/* Links */
a, a:link, a:hover, a:visited {
  text-decoration: none;
  color: black;
}

/* Lists */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

p {
  padding-left: 20%;
}
</style>
</head>
<body>

<footer>
  <div class="footer-links">
    <div>
      <p><strong>Support</strong></p>
      <ul>
        <li>Contact Us</li>
        <li>Privacy Policy</li>
        <li><a href="/2023-os-mock/TOS">Terms of Service</a></li>
      </ul>
    </div>
    <div>
      <p><strong>About</strong></p>
      <ul>
        <li><a href="/2023-os-mock/about-us">About Us</a></li>
        <li><a href="/2023-os-mock/meet-the-team">Our Team</a></li>
      </ul>
    </div>
    <div>
      <p><strong>Follow Us</strong></p>
      <ul>
        <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
        <li><a href="https://www.discord.com" target="_blank">Discord</a></li>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
      </ul>
    </div>
  </div>
  <br>
  <small>&copy; 2026 Health Advice Group. All rights reserved.</small>
</footer>



</body>
</html>
