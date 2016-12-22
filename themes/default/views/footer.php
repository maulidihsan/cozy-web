</div>

<footer>
    <div class="container">
        <nav>
            <?php page_loop(0, 'class="nav nav-center"');?>
        </nav>

        <div class="credits">
            © 2016 <a href="<?php echo base_url() ?>">cetakmurah.id</a>| 
            Powered by <a href="http://gocartdv.com" target="_blank">GoCart</a>
        </div>
    </div>
</footer>

<script>
setInterval(function(){
    resizeCategories();
}, 200);

function updateItemCount(items)
{
    $('#itemCount').text(items);
}

function resizeCategories()
{
    $('.categoryItem').each(function(){
        $(this).height($(this).width());
        var look = $(this).find('.look');
        var margin = 0-look.height()/2;
        look.css('margin-top', margin);
    });
}
</script>

</body>
</html>