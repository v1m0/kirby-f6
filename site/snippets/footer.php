    </div>
</div>

<div class="row footerrow">
    <div class="large-6 columns text-left">Copyright Residence Concept <?php echo date(Y); ?></div>
    <div class="large-6 columns text-right"><a href="<?php echo $pages->find('legal')->url() ?>"><?php echo $pages->find('legal')->title() ?></a></div>
</div>

<?php echo js('assets/js/motion-ui.min.js') ?>
<?php echo js('assets/js/jquery.min.js') ?>
<?php echo js('assets/js/foundation.min.js') ?>

<script>
    $(document).foundation();
</script>

</body>
</html>
