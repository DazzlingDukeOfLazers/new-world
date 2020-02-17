<?php include template_dir() . "header.php"; ?>
    <div class="main-content" id="blog-content-<?php print CONTENT_ID; ?>">
        <?php
        $post = get_content_by_id(CONTENT_ID);
        $picture = get_picture(CONTENT_ID);

        if (!$picture) {
            $picture = '';
        }

        $itemData = content_data($post['id']);
        $itemTags = content_tags($post['id']);
        ?>

        <section class="section-19">
            <div class="container" data-parallax="">
                <div class="background-image-holder d-flex <?php if ($picture == ''): ?>bg-primary<?php endif; ?>" <?php if ($picture != ''): ?>style="background-image: url('<?php print $picture; ?>');"<?php endif; ?>>
                    <div class="row w-100 m-0 align-self-center">
                        <div class="col-lg-12">
                            <div class="d-flex w-100 h-100">
                                <div class="w-100 align-self-center text-left info-holder allow-drop">
                                    <h2 class="m-b-30"><?php echo $post['title']; ?></h2>
                                    <h4><?php echo date('d M Y', strtotime($post['updated_at'])); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
            <div class="container m-t-100 m-b-50">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="description edit dropcap typography-area" field="content" rel="content">
                            <?php
                            include(template_dir() . 'elements' . DS . 'paragraph-lead.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-2.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-3.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'blockquote.php');
                            include(template_dir() . 'elements' . DS . 'titles' . DS . 'title-2.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'ordered-list.php');
                            include(template_dir() . 'elements' . DS . 'paragraph.php');
                            include(template_dir() . 'elements' . DS . 'unordered-list.php');
                            ?>
                        </div>

                        <div class="border-top-bottom">
                            <div class="m-t-40 m-b-40 row">
                                <div class="col-sm-4">
                                    <?php if ($itemTags): ?>
                                        <div class="posts-tags">
                                            <?php foreach ($itemTags as $tag): ?>
                                                <span class="badge badge-primary"><?php echo $tag; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-8">
                                    <module type="sharer" id="post-bottom-sharer" template="skin-1" class="float-right" style="xwidth: calc(100% - 45px);"/>
                                    <div class="float-right">Share</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="edit safe-mode nodrop" field="blog-inner" rel="page">
            <module type="layouts" template="skin-14"/>
            <module type="layouts" template="skin-35"/>
        </div>
    </div>
<?php include template_dir() . "footer.php"; ?>