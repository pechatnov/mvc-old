        <footer id="footer"><!--Footer-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2015</p>
                        <p class="pull-right">Курс PHP Start</p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->



        <script src="/template/js/jquery.js"></script>
        <script src="/template/js/jquery.cycle2.min.js"></script>
        <script src="/template/js/jquery.cycle2.carousel.min.js"></script>
        <script src="/template/js/bootstrap.min.js"></script>
        <script src="/template/js/jquery.scrollUp.min.js"></script>
        <script src="/template/js/price-range.js"></script>
        <script src="/template/js/jquery.prettyPhoto.js"></script>
        <script src="/template/js/main.js"></script>
        <script>
            $(document).ready(function(){
                $('.add-to-cart').on('click', function(e){
                    e.preventDefault();

                    var id = $(this).attr('data-id');
                    console.log(id);
                    $.post("/cart/addAjax/"+id, {}, function(data){
                        $('#cart-count').html(data);
                    });
                });
                /*$('.del-to-cart').on('click', function(e){
                    e.preventDefault();

                    var id = $(this).attr('data-id');
                    var tr = $(this).parents('tr');
                    console.log(id);
                    $.post("/cart/delAjax/"+id, {}, function(data){
                        tr.remove();
                        $('#cart-count').html(data);
                        $('#totalPrice')
                    });
                });*/
            });
        </script>
    </body>
</html>