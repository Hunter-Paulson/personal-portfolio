<header>
    <div class='toplogo'>
        <a href='index.php'><img id='logo-button' src='images/logo2.png' alt="Hunter Paulson's logo."/></a>
    </div>

    <nav>
        <ul id='main-navigation'>
            <li  <?php  echo $page == 'index'  ? 'class="active"' : 'class=""'; ?>><a class='button' aria-label='Go to home page' href='./index.php'>Work</a></li>
            <li  <?php  echo $page == 'about' ? 'class="active"' : 'class=""'; ?>><a class='button' aria-label='Go to about me page' href='./about.php'>About</a></li>
            <li  <?php  echo $page == 'fun' ? 'class="active"' : 'class=""'; ?>><a class='button' aria-label='Go to fun projects page' href='./fun.php'>Fun</a></li>
            <li><a class='button' aria-label='Go to contact section' href='#contact'>Contact</a></li>
        </ul>
    </nav>
</header>