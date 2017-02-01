<!DOCTYPE html>
<html>

<head>
    <?php
    include(__DIR__.'/fragment/head.php');
    ?>
</head>

<body>

<div id="wrapper">



    <?php
    include(__DIR__.'/fragment/menu.php');
    ?>



    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


        <div class="row">

            <div class="col-lg-3 col-md-6">
                <elbiniou-cardpanel>
                    <property name="color">primary</property>
                    <property name="title">Hello</property>
                    <property name="subTitle">CardPanel</property>
                    <property name="icon">fa-bomb</property>
                </elbiniou-cardpanel>
            </div>


            <div class="col-lg-3 col-md-6">
                <elbiniou-cardpanel>
                    <property name="title">John</property>
                    <property name="subTitle">Doe</property>
                </elbiniou-cardpanel>
            </div>


            <div class="col-lg-3 col-md-6">
                <elbiniou-cardpanel>
                    <property name="color">yellow</property>
                    <property name="title">Hello</property>
                    <property name="subTitle">World</property>
                    <property name="icon">fa-shopping-cart</property>
                </elbiniou-cardpanel>
            </div>


            <div class="col-lg-3 col-md-6">
                <elbiniou-cardpanel>
                    <property name="color">red</property>
                    <property name="title">Hello</property>
                    <property name="subTitle">World</property>
                    <property name="icon">fa-cubes</property>
                </elbiniou-cardpanel>
            </div>





        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">



            <elbiniou-panel>
                <property name="title">Simple panel</property>
                <property name="icon">fa-hand-pointer-o </property>
                <property name="content">Panel content</property>
            </elbiniou-panel>



            <elbiniou-panel>
                <property name="title">
                    My Area Chart Example
                </property>
                <property name="icon">fa-bar-chart-o</property>

                <property name="content">
                    <div id="area-chart" style="height:300px"></div>
                </property>
            </elbiniou-panel>




                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                        <div class="pull-right">





                            <elbiniou-dropdownmenu>
                                <property  name="title">DROPDOWNMENU</property>
                            </elbiniou-dropdownmenu>







                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>3325</td>
                                            <td>10/21/2013</td>
                                            <td>3:20 PM</td>
                                            <td>$234.34</td>
                                        </tr>
                                        <tr>
                                            <td>3324</td>
                                            <td>10/21/2013</td>
                                            <td>3:03 PM</td>
                                            <td>$724.17</td>
                                        </tr>
                                        <tr>
                                            <td>3323</td>
                                            <td>10/21/2013</td>
                                            <td>3:00 PM</td>
                                            <td>$23.71</td>
                                        </tr>
                                        <tr>
                                            <td>3322</td>
                                            <td>10/21/2013</td>
                                            <td>2:49 PM</td>
                                            <td>$8345.23</td>
                                        </tr>
                                        <tr>
                                            <td>3321</td>
                                            <td>10/21/2013</td>
                                            <td>2:23 PM</td>
                                            <td>$245.12</td>
                                        </tr>
                                        <tr>
                                            <td>3320</td>
                                            <td>10/21/2013</td>
                                            <td>2:15 PM</td>
                                            <td>$5663.54</td>
                                        </tr>
                                        <tr>
                                            <td>3319</td>
                                            <td>10/21/2013</td>
                                            <td>2:13 PM</td>
                                            <td>$943.45</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-lg-8">
                                <div id="bar-chart" style="height: 500px;"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge"><i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge info"><i class="fa fa-save"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                        <hr />
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-gear"></i> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">






            <elbiniou-panel>
                <property name="title">Imbrication</property>

                <property name="content">

                    <elbiniou-cardpanel>
                        <property name="color">primary</property>
                        <property name="title">Hello</property>
                        <property name="subTitle">CardPanel</property>
                        <property name="icon">fa-bomb</property>
                    </elbiniou-cardpanel>



                    <elbiniou-cardpanel>
                        <property name="color">primary</property>
                        <property name="title">Hello</property>
                        <property name="subTitle">CardPanel</property>
                        <property name="icon">fa-bomb</property>
                    </elbiniou-cardpanel>




                    <elbiniou-dropdownmenu>
                        <property  name="title">DROPDOWNMENU</property>
                    </elbiniou-dropdownmenu>
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>

                </property>
            </elbiniou-panel>





                <elbiniou-panel>
                    <property name="title">Hello</property>
                    <property name="content">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small"><em>11:32 AM</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                            <span class="pull-right text-muted small"><em>11:13 AM</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-warning fa-fw"></i> Server Not Responding
                            <span class="pull-right text-muted small"><em>10:57 AM</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                            <span class="pull-right text-muted small"><em>9:49 AM</em>
                                </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-money fa-fw"></i> Payment Received
                            <span class="pull-right text-muted small"><em>Yesterday</em>
                                </span>
                        </a>
                    </div>
                    </property>

                </elbiniou-panel>





                <elbiniou-panel>
                    <property name="title">Donut Chart Example</property>
                    <property name="icon">fa-bolt </property>
                    <property name="content">
                        <div id="donut-chart" style="height: 500px"></div>
                        <a href="#" class="btn btn-default btn-block">View Details</a>
                    </property>
                </elbiniou-panel>




                <!-- /.panel -->
                <div class="chat-panel panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comments fa-fw"></i> Chat
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-refresh fa-fw"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle fa-fw"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-times fa-fw"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-clock-o fa-fw"></i> Away
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <ul class="chat">
                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Jack Sparrow</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Jack Sparrow</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                        </div>
                    </div>
                    <!-- /.panel-footer -->
                </div>
                <!-- /.panel .chat-panel -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->















        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Buttons</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Default Buttons
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h4>Normal Buttons</h4>
                        <p>
                            <button type="button" class="btn btn-default">Default</button>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </p>
                        <br>
                        <h4>Disabled Buttons</h4>
                        <p>
                            <button type="button" class="btn btn-default disabled">Default</button>
                            <button type="button" class="btn btn-primary disabled">Primary</button>
                            <button type="button" class="btn btn-success disabled">Success</button>
                            <button type="button" class="btn btn-info disabled">Info</button>
                            <button type="button" class="btn btn-warning disabled">Warning</button>
                            <button type="button" class="btn btn-danger disabled">Danger</button>
                            <button type="button" class="btn btn-link disabled">Link</button>
                        </p>
                        <br>
                        <h4>Button Sizes</h4>
                        <p>
                            <button type="button" class="btn btn-primary btn-lg">Large button</button>
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-primary btn-sm">Small button</button>
                            <button type="button" class="btn btn-primary btn-xs">Mini button</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                        </p>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Circle Icon Buttons with Font Awesome Icons
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h4>Normal Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
                        </button>
                        <br>
                        <br>
                        <h4>Large Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
                        </button>
                        <br>
                        <br>
                        <h4>Extra Large Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i>
                        </button>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Outline Buttons with Smooth Transition
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h4>Outline Buttons</h4>
                        <p>
                            <button type="button" class="btn btn-outline btn-default">Default</button>
                            <button type="button" class="btn btn-outline btn-primary">Primary</button>
                            <button type="button" class="btn btn-outline btn-success">Success</button>
                            <button type="button" class="btn btn-outline btn-info">Info</button>
                            <button type="button" class="btn btn-outline btn-warning">Warning</button>
                            <button type="button" class="btn btn-outline btn-danger">Danger</button>
                            <button type="button" class="btn btn-outline btn-link">Link</button>
                        </p>
                        <br>
                        <h4>Outline Button Sizes</h4>
                        <p>
                            <button type="button" class="btn btn-outline btn-primary btn-lg">Large button</button>
                            <button type="button" class="btn btn-outline btn-primary">Default button</button>
                            <button type="button" class="btn btn-outline btn-primary btn-sm">Small button</button>
                            <button type="button" class="btn btn-outline btn-primary btn-xs">Mini button</button>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block level button</button>
                        </p>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Social Buttons with Font Awesome Icons
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h4>Social Buttons</h4>
                        <a class="btn btn-block btn-social btn-bitbucket">
                            <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                        </a>
                        <a class="btn btn-block btn-social btn-dropbox">
                            <i class="fa fa-dropbox"></i> Sign in with Dropbox
                        </a>
                        <a class="btn btn-block btn-social btn-facebook">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-flickr">
                            <i class="fa fa-flickr"></i> Sign in with Flickr
                        </a>
                        <a class="btn btn-block btn-social btn-github">
                            <i class="fa fa-github"></i> Sign in with GitHub
                        </a>
                        <a class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                        <a class="btn btn-block btn-social btn-instagram">
                            <i class="fa fa-instagram"></i> Sign in with Instagram
                        </a>
                        <a class="btn btn-block btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                        </a>
                        <a class="btn btn-block btn-social btn-pinterest">
                            <i class="fa fa-pinterest"></i> Sign in with Pinterest
                        </a>
                        <a class="btn btn-block btn-social btn-tumblr">
                            <i class="fa fa-tumblr"></i> Sign in with Tumblr
                        </a>
                        <a class="btn btn-block btn-social btn-twitter">
                            <i class="fa fa-twitter"></i> Sign in with Twitter
                        </a>
                        <a class="btn btn-block btn-social btn-vk">
                            <i class="fa fa-vk"></i> Sign in with VK
                        </a>

                        <hr>

                        <div class="text-center">
                            <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                            <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                            <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                            <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                            <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                            <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                            <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
























    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<!--
<script src="vendor/raphael/raphael.min.js"></script>
<script src="vendor/morrisjs/morris.min.js"></script>
<script src="vendor/startbootstrap-sb-admin-2/data/morris-data.js"></script>
//-->

<!-- Custom Theme JavaScript -->
<script src="vendor/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js"></script>




<script src="vendor/echarts.min.js"></script>
<script type="text/javascript">
    // based on prepared DOM, initialize echarts instance
    var myChart = echarts.init(document.getElementById('bar-chart'));
    // specify chart configuration item and data
    var option = {
        title: {
            text: 'ECharts entry example'
        },
        tooltip: {},
        legend: {
            data:['Sales']
        },
        xAxis: {
            data: ["shirt","cardign","chiffon shirt","pants","heels","socks"]
        },
        yAxis: {},
        series: [{
            name: 'Sales',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };
    // use configuration item and data specified to show chart
    myChart.setOption(option);



    var myChart = echarts.init(document.getElementById('donut-chart'));
    // specify chart configuration item and data
    option = {
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            x: 'left',
            data:['Test 1','Test 2','Test 3','Test 4','Test 5']
        },
        series: [
            {
                name:'Série',
                type:'pie',
                radius: ['50%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    normal: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        show: true,
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                },
                labelLine: {
                    normal: {
                        show: false
                    }
                },
                data:[
                    {value:335, name:'Test 1'},
                    {value:310, name:'Test 2'},
                    {value:234, name:'Test 3'},
                    {value:135, name:'Test 4'},
                    {value:1548, name:'Test 5'}
                ]
            }
        ]
    };
    // use configuration item and data specified to show chart
    myChart.setOption(option);





    var myChart = echarts.init(document.getElementById('area-chart'));
    // specify chart configuration item and data
    option = {
        title: {
            text: 'Test radar'
        },
        tooltip: {},
        legend: {
            data: ['S1（Allocated Budget）', 'S2（Actual Spending）']
        },
        radar: {
            // shape: 'circle',
            indicator: [
                { name: 'Dim1', max: 6500},
                { name: 'Dim2', max: 16000},
                { name: 'Dim3', max: 30000},
                { name: 'Dim4', max: 38000},
                { name: 'Dim5', max: 52000},
                { name: 'Dim6', max: 25000}
            ]
        },
        series: [{
            name: 'Budget vs spending）',
            type: 'radar',
            // areaStyle: {normal: {}},
            data : [
                {
                    value : [4300, 10000, 28000, 35000, 50000, 19000],
                    name : 'Allocated Budget'
                },
                {
                    value : [5000, 14000, 28000, 31000, 42000, 21000],
                    name : 'Actual Spending'
                }
            ]
        }]
    };
    // use configuration item and data specified to show chart
    myChart.setOption(option);


</script>






</body>

</html>
