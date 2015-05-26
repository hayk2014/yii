<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row all-items">
            <?php // for($i=0;$i<9;$i++):?>
            <!--            <div class=" col-md-3 col-lg-3 index-item ">
                            <h2>Heading</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.</p>
            
                            <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
                        </div>  -->
            <?php // endfor;?>

            <div class=" col-md-4 col-lg-4 index-item ">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <div class="most-popular">
                        <img src="images/serj.jpg" alt="03" />
                        <div class="post-title">
                            <p>Headdfgsdfgs dfgsdsdfjgh jkh jkhjklhkj sdf sdf sdf fging</p>
                        </div>
                        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat.
                        </p>
                    </div>
                <?php endfor; ?>
            </div>

            <div class=" col-md-7 col-lg-7 ">                

                <div id="showcase" class="showcase">
                    <div class="showcase-slide">
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content">
                            <img src="images/01.jpg" alt="01" />
                        </div>
                    </div>                    
                    <div class="showcase-slide">
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content">
                            <img src="images/03.jpg" alt="03" />
                        </div>
                        <!-- Put the caption content in a div with the class .showcase-caption -->
                        <div class="showcase-caption">
                            It's a flying wasp. <a href="http://www.flickr.com/photos/14516334@N00/345009210/">Photo from flickr</a>
                        </div>
                    </div>                    
                    <div class="showcase-slide">
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content">
                            <img src="images/02.jpg" alt="02" />
                        </div>
                        <!-- Put the tooltips in a div with the class .showcase-tooltips. -->
                        <div class="showcase-tooltips">
                            <!-- Each anchor in .showcase-tooltips represents a tooltip. The coords attribute represents the position of the tooltip. -->
                            <a href="http://www.awkward.se" coords="634,130">
                                <!-- The content of the anchor-tag is displayed in the tooltip. -->
                                This is a tooltip that displays the anchor html in a nice way.
                            </a>
                            <a href="http://www.awkward.se" coords="200,440">
                                This is a tooltip that displays the anchor html in a nice way.
                            </a>
                            <a href="http://www.awkward.se" coords="600,440">
                                This is a tooltip that displays the anchor html in a nice way.
                            </a>
                            <a href="http://www.awkward.se" coords="356, 172">
                                <!-- You can add multiple elements to the anchor-tag which are displayed in the tooltip. -->
                                <img src="images/glasses.png" />
                                <span style="display: block; font-weight: bold; padding: 3px 0 3px 0; text-align: center;">
                                    White Glasses: 500$
                                </span>
                            </a>
                        </div>
                    </div>                    
                    <div class="showcase-slide">
                        <!-- Put the slide content in a div with the class .showcase-content. -->
                        <div class="showcase-content">
                            <iframe src="http://player.vimeo.com/video/1185346?title=0&amp;byline=0&amp;portrait=0" width="700" height="470" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-7 col-lg-7 index-item ">
                <?php for ($i = 0; $i < 7; $i++): ?>
                    <h3>Heading</h3>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</div>