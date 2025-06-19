<nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <center>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </center>
                </button>
                <a class="navbar-brand" href="http://www.mazzm.com">Mazzm.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                    <li <?php if($menu=='as'){echo 'class="active"';} ?>>
                        <a href="assistant-camera">
                        	<i class="pe-7s-albums"></i>
                            <p>Assistant Camera</p>
                        </a>
                    </li>
                    <li <?php if($menu=='fi'){echo 'class="active"';} ?>>
                        <a href="filmography">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Filmography</p>
                        </a>
                    </li>
                    <li <?php if($menu=='ci'){echo 'class="active"';} ?>>
                        <a href="cinematography">
                        	<i class="pe-7s-portfolio"></i>
                            <p>Work</p>
                        </a>                        
                    </li>                    
                    <li <?php if($menu=='co'){echo 'class="active"';} ?>>
                        <a href="contact">
                        	<i class="pe-7s-call"></i>
                            <p>Contact</p>
                        </a>
                    </li>   
                    <li>
                        <a href="https://www.imdb.com/name/nm6229716/" target="_blank">
                        	<i class="pe-7s-call"></i>
                            <p>IMDb</p>
                        </a>
                    </li>                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>