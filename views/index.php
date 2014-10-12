<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" href="../images/icon.png">

    <!-- Bootstrap theme -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/bootstrap-admin-theme.css" rel="stylesheet">

    <!-- Custom theme -->
    <link href="../css/jumbotron.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>GPSBus</title>

    <style type="text/css" id="holderjs-style"></style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/google-map.js" ></script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">GPS Bus</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="navbar-right">
                    <a class="navbar-brand" href="#"><?php echo"Logans"; ?></a>
                </div>
            </div><!--/.navbar-collapse -->
        </div>
    </div>


    <div class="container">

        <div class="main-panel">
            <div id="map_canvas" class="map"></div>

            <!--<div class="routes">
                <ul id="routes">
                    <li>19</li>                    <li>20</li>
                    <li>22</li>                    <li>23</li>
                    <li>24</li>                    <li>25a</li>
                    <li>26</li>                    <li>27</li>
                    <li>28</li>                    <li>29</li>
                    <li>30</li>                    <li>32</li>
                    <li>33</li>                    <li>34</li>
                    <li>35</li>                    <li>36</li>
                    <li>37</li>                    <li>38</li>
                    <li>39</li>                    <li>40</li>
                    <li>41</li>                    <li>42</li>
                    <li>43</li>                    <li>44</li>
                    <li>44a</li>                    <li>45</li>
                    <li>46</li>                    <li>47</li>
                    <li>48</li>                    <li>49</li>
                    <li>50</li>                    <li>52</li>
                    <li>53</li>                    <li>54</li>
                </ul>
            </div>-->
            <div class="col-md-2 bootstrap-admin-col-left routes">
                <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                    <li class="active">
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 1 (Катіон - Озерна)</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 2</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 14</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 15</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 16</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 17</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> 18</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>

        <footer>
            <p>© Company 2014</p>
        </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>


</body></html>