<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12 mt-5">
                <h3 class="page-title mt-3">Welcome!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <div class="box a">
            <img src="dashbaord_hotel\assets\img\product\pexels-andrea-piacquadio-3768095.jpg" width="600px">
        </div>
        <div class="box b">
            <img src="dashbaord_hotel\assets\img\product\pexels-carmen-cobo-1103808.jpg" width="500px">
        </div>
        <div class="box c">
            <img src="dashbaord_hotel\assets\img\product\pexels-ron-lach-8922189.jpg" width="400px">
        </div>
        <div class="box d">
            <img src="dashbaord_hotel\assets\img\product\pexels-engin-akyurt-2736388.jpg" width="400px">
        </div>

    </div>

</div>

    <style>
        .wrapper {
            height: 500px;
            width: 1000px;
            display: grid;
            grid-gap: 5px;
            grid-template-columns: [col1-start] auto  [col2-start] auto  [col3-start] auto [col3-end];
            grid-template-rows: [row1-start] auto [row2-start] auto [row2-end];
            background-color: #fff;
            color: #fff;
        }
        .box {
            margin-left: auto;
            margin-right: auto;
            background-color: #fff;
            color: #fff;
            border-radius: 5px;
        }
        .a {
            grid-column: col1-start / col3-start;
            grid-row: row1-start ;
        }
        .b {
            grid-column: col3-start ;
            grid-row: row1-start / row2-end;
        }
        .c {
            grid-column: col1-start;
            grid-row: row2-start ;
        }
        .d {
            grid-column: col2-start ;
            grid-row: row2-start ;
        }
    </style>

</div>
