



<hr/>
<h2 class="page-header withripple">Date picker</h2>
<div class="form-group label-floating">
    <label class="control-label">Date picker</label>
    <input class="form-control bienvenue-datePicker">
    <p class="help-block">You should really write something here</p>
</div>
<hr/>


<hr/>
<button class="customRipple" data-ripple-color="#FFF" style="padding: 8px;font-size: 22px; background-color: #89669b; border: none; color:#FFF">ça marche</button>
<div class="customRipple" style="padding: 8px;font-size: 22px; background-color: #444444; border: none; color:#FFF">div with custom ripple</div>
<hr/>














<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="row">




        <db-panel>
            <property name="title">Liste card panel (ça marche ?)</property>
            <property name="icon">fa-hand-pointer-o </property>
            <property name="content">


                <div class="col-lg-3 col-md-6">
                    <db-cardpanel>
                        <property name="color">primary</property>
                        <property name="title">Hélo</property>
                        <property name="subTitle">€ ici ça marche héhéhé</property>
                        <property name="icon">fa-bomb</property>
                    </db-cardpanel>
                </div>


                <div class="col-lg-3 col-md-6">
                    <db-cardpanel>
                        <property name="title">John</property>
                        <property name="subTitle">Doe</property>
                    </db-cardpanel>
                </div>


                <div class="col-lg-3 col-md-6">
                    <db-cardpanel>
                        <property name="color">yellow</property>
                        <property name="title">Hello</property>
                        <property name="subTitle">World</property>
                        <property name="icon">fa-shopping-cart</property>
                    </db-cardpanel>
                </div>


                <div class="col-lg-3 col-md-6">
                    <db-cardpanel>
                        <property name="color">red</property>
                        <property name="title">Hello

                        </property>
                        <property name="subTitle">World</property>
                        <property name="icon">fa-cubes</property>
                    </db-cardpanel>
                </div>



            </property>
        </db-panel>






    </div>
    <!-- /.row -->
    <div class="row">



        <div class="col-lg-8">



            <db-panel>
                <property name="title">Simple panel</property>
                <property name="icon">fa-hand-pointer-o </property>
                <property name="content">
                    Panel content
                    <db-barchart>
                        <property name="title">Exemple bar chart</property>
                        <property name="serie" type="json">
                            {
                            "name": "Yolo",
                            "captions": ["Test1","Test2","Test3","Test4","Test5","Test6"],
                            "values" : [5, 20, 36, 10, 10, 20]
                            }
                        </property>
                    </db-barchart>
                </property>
            </db-panel>



            <db-panel>
                <property name="title">
                    My Area Chart Example
                </property>
                <property name="icon">fa-bar-chart-o</property>

                <property name="content">
                    <div id="area-chart" style="height:300px"></div>
                </property>
            </db-panel>




            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                    <div class="pull-right">
                        <db-dropdownmenu>
                            <property  name="title">Menu</property>
                            <property  name="items" type="json">
                                [
                                    {"caption": "Test1", "url": "#"},
                                    {"caption": "Test2", "url": "#"},
                                    {"caption": "Test3", "url": "#"}
                                ]
                            </property>

                        </db-dropdownmenu>
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
                            <db-barchart>
                                <property name="title">Exemple bar chart</property>
                                <property name="serie" type="json">
                                    {
                                        "name": "Yolo",
                                        "captions": ["Test1","Test2","Test3","Test4","Test5","Test6"],
                                        "values" : [5, 20, 36, 10, 10, 20]
                                    }

                                </property>
                            </db-barchart>
                            <!--<div id="bar-chart" style="height: 500px;"></div>//-->
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






            <db-panel>
                <property name="title">Imbrication                    <div class="pull-right">

                        <db-dropdownmenu>
                            <property  name="title">DROPDOWNMENU</property>
                        </db-dropdownmenu>
                    </div></property>



                <property name="content">



                    <db-cardpanel>
                        <property name="color">primary</property>
                        <property name="title">Hello</property>
                        <property name="subTitle">
                            <db-dropdownmenu>
                                <property  name="title">DROPDOWNMENU</property>
                            </db-dropdownmenu>
                        </property>
                        <property name="icon">fa-bomb</property>
                    </db-cardpanel>


                    <div class="pull-right">
                        <db-dropdownmenu>
                            <property  name="title">DROPDOWNMENU</property>
                        </db-dropdownmenu>
                    </div>

                    <db-cardpanel>
                        <property name="color">primary</property>
                        <property name="title">Hello</property>
                        <property name="subTitle">CardPanel</property>
                        <property name="icon">fa-bomb</property>
                    </db-cardpanel>



                    <div class="pull-right">
                        <db-dropdownmenu>
                            <property  name="title">DROPDOWNMENU</property>
                        </db-dropdownmenu>
                    </div>

                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>

                </property>
            </db-panel>





            <db-panel>
                <property name="title">Hello</property>
                <property name="content">

                    <db-list>
                        <property name="items" type="json">
                            [
                                {"icon" : "fa-fw", "caption" : "3 New Followers", "legend" : "12 minutes ago"},
                                {"icon" : "fa-fw", "caption" : "3 New Followers", "legend" : "12 minutes ago"},
                                {"icon" : "fa-fw", "caption" : "3 New Followers", "legend" : "12 minutes ago"},
                                {"icon" : "fa-fw", "caption" : "3 New Followers", "legend" : "12 minutes ago"},
                                {"icon" : "fa-fw", "caption" : "3 New Followers", "legend" : "12 minutes ago"}
                            ]
                        </property>

                    </db-list>



                </property>

            </db-panel>





            <db-panel>
                <property name="title">Donut Chart Example</property>
                <property name="icon">fa-bolt </property>
                <property name="content">
                    <div id="donut-chart" style="height: 500px"></div>
                    <a href="#" class="btn btn-default btn-block">View Details</a>
                </property>
            </db-panel>




            <!-- /.panel -->
            <div class="chat-panel panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i> Chat
                    <div class="pull-right">
                        <db-dropdownmenu>
                            <property  name="title">DROPDOWNMENU</property>
                        </db-dropdownmenu>
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


































    <script type="text/javascript">


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
