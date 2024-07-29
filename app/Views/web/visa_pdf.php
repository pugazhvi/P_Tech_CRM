<html>

<head>
    <meta http-equiv="Content-Type" content="charset=utf-8" />
    <style type="text/css">
        @page {
            margin: 100px 100px;
        }

        @font-face {
            font-family: "Muli";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }

        body {
            font-family: "Muli", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            color: #004879;
            text-align: center;
            line-height: 35px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            color: #004879;
            text-align: center;
            line-height: 35px;
        }

        h3 {
            color: #004879;
            font-size: 20px;
/*            margin-top: 50px;*/
        }

        h4 {
/*            font-family: "source_sans_proregular", Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;*/
            color: #004879;
            margin-top: 25px;
            /*            justify-content: space-between;*/
            align-items: center;
            font-size: 17px;
            font-weight: bold;
        }

        .vi-ico img {
            vertical-align: middle;
            width: 24px;
            /*            padding-top:5px;*/
        }

        ul {
            /*            list-style-image: url('../../assets/bullet.png');*/
            /*            margin: 0;*/
            /*            list-style-position: inside;*/
            /*            display: block;*/
/*            line-height: 1;*/
        }

        ul {
            list-style: none;
        }

        ul li:before {
            color: #1aa79c;
/*
            content: '.';
            margin-left: -20px;
            margin-right: 10px;
            
*/
/*  margin-top: -5px;*/
  margin-right: 10px;
  height: 5px;
  width: 5px;
  background-color: #1aa79c;
  border-radius: 50%;
  display: inline-block;
        }


        ul{
/*            line-height: 1;*/
        }
        
/*
        ul li {
            vertical-align:middle;
            color: #1aa79c;
        }
*/

        .points {
            color: black;
            margin-top: -10px;
/*            margin-left: 15px;*/
            line-height: 15px;
/*
            margin: 0;
            position: relative;
            top: -10px;
*/
        }


        /*        ul li:before{ position:absolute; font-weight: bold; translate(0px, 7px) }*/

    </style>
</head>

<body>
    <header style="float:right">
        <img width="125" src="<?php echo base_url('assets/images/logo.png'); ?>" />
    </header>

    <footer>
        UVS Confidential
    </footer>
    <main>
        <?php
    foreach($cinfo->result() as $sinfo){
        $cname = $sinfo->country;
     }?>
        <div>
            <div>
                <h3><?php echo $cname.' - '.$vtype.' Requirement'; ?></h3>
            </div>
            <div>
                <?php
          $h_ary = array();
          foreach($visainfo->result() as $vinfo){
             if(!in_array(trim($vinfo->vhm_header),$h_ary))
             {
                 if(!empty($h_ary)){
                     echo '</div>';
                 }
                $h_ary[] = trim($vinfo->vhm_header);
            ?>

                <h4>
                    <span class="vi-ico">
                        <img src="<?php echo base_url('assets/images/vicons_n/'.str_replace('svg','png',$vinfo->vhm_icon)); ?>" />
                    </span>
                    <span class="vi-title">
                        <?php echo $vinfo->vhm_header; ?>
                    </span>
                </h4>
                <!--          <div>-->
                <div>
                    <?php
             echo '<p class="points"><span><img width="5" style="margin-left:40px;margin-right:10px;margin-top:-3px;" src="'.base_url('assets/bullet.png').'" /></span><span>'.$vinfo->vc_requirement.'</span></p>';
             }
              else { 
            echo '<p class="points"><span><img width="5" style="margin-left:40px;margin-right:10px;margin-top:-3px;" src="'.base_url('assets/bullet.png').'" /></span><span>'.$vinfo->vc_requirement.'</span></p>';
            } ?>

                    <?php } ?>
                </div>
                <!--                </div>-->
            </div>
        </div>
    </main>
</body>

</html>
