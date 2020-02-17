<?php include template_dir() . "header.php"; ?>


<?php
$keywords = '';
if (isset($_GET['keywords'])) {
    $keywords = htmlspecialchars($_GET['keywords']);
}

$searchType = '';
if (isset($_GET['search-type'])) {
    $searchType = htmlspecialchars($_GET['search-type']);
}
?>
<?php if ($searchType == 'blog' OR $searchType == ''): ?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="m-auto allow-drop" style="max-width: 800px;">
                        <h1 class="hr">Results found<span class="text-primary">.</span></h1>
                        <p class="lead"><em><?php _e('Mentioning'); ?></em> &ldquo;<?php print $keywords; ?>&rdquo;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section>
    <div class="container">
        <?php if ($searchType == 'blog' OR $searchType == ''): ?>

            <module type="posts" limit="18" keyword="<?php print $keywords; ?>" description-length="70"/>
        <?php endif; ?>
    </div>
</section>


<?php include template_dir() . "footer.php"; ?>
