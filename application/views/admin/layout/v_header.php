<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><?= $title?></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

     

        <ul class="nav navbar-right navbar-top-links">
            
            </li>
            <li class="">
                <a class=""  href="#">
                    <i class="fa fa-user fa-fw"></i> Welcome, <?=$this->session->userdata('nama_user');?> <b class=""></b>
                </a>
               
            </li>
        </ul>
        <!-- /.navbar-top-links -->
