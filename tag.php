<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main>
    <header>
        <div class="container" id="#pjax-load">
            <h1>标签</h1>
            <p class="subtitle">这是<span class="count"><?php $this->archiveTitle(array('tag' => _t('%s'),), ''); ?></span>标签下所有的文章。</p>
        </div>
    </header>
    <section>
        <div class="container" id="#pjax-load">
            <section>
                <section>
                    <div class="posts">
                        <?php while($this->next()): ?>
                        <div class="post">
                            <a href="<?php $this->permalink() ?>">
                                <div class="post-row">
                                    <time><?php $this->date('M j'); ?></time>
                                    <h3><?php $this->title() ?></h3>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            </section>
        </div>
        <div class="container" id="#pjax-load">
            <nav class="flex container suggested">
                    <?php $this->pageLink('上一页','prev'); ?>
                    <?php $this->pageLink('下一页','next'); ?>
            </nav>
        </div>
    </section>
</main>
<?php $this->need('footer.php'); ?>