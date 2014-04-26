<!DOCTYPE html>
<?php echo View::factory("layout/documentHeader")->bind("subTitle",$subTitle);?>
<body>
<?php echo View::factory("layout/headerNavigation");?>

       <!-- Team Member Profiles -->
       <!-- Our Customers -->
<div class="container">
     <?php if (isset($mainContent)) echo $mainContent;?>
</div>
            <div class="container">

                <hr>

                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; Ensofobi 2013</p>
                        </div>
                    </div>
                </footer>

            </div><!-- /.container -->

            <!-- Bootstrap core JavaScript -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="/js/jquery.js"></script>
            <script src="/js/bootstrap.js"></script>
            <script src="/js/modern-business.js"></script>
            <!-- SlidesJS Required: Link to jQuery -->
            <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
            <script src="/js/mvc.js"></script>
            <!-- End SlidesJS Required -->

            <!-- SlidesJS Required: Link to jquery.slides.js -->
            <script src="/js/jquery.slides.min.js"></script>
            <!-- End SlidesJS Required -->

            <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
            <script>
                $(function() {
                    $('#slides').slidesjs({
                        width: 940,
                        height: 528,
                        play: {
                            active: true,
                            auto: true,
                            interval: 4000,
                            swap: true
                        }
                    });
                });
            </script>
            <!-- End SlidesJS Required -->
</body>
</html>