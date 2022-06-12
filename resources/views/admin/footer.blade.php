<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2014 - Alvarez.is
        <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/admin/js/jquery.js"></script>
<script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="{{asset('assets')}}/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('assets')}}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{asset('assets')}}/admin/js/common-scripts.js"></script>


<script type="text/javascript" src="{{asset('assets')}}/admin/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("{{asset('assets')}}/admin/img/login-bg.jpg", {speed: 500});
</script>
<!--script for this page-->

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>
