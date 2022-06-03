<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('/layout/header.php'); ?>
<main>
    <header>
        <div class="container">
            <h1>分类</h1>
            <p class="subtitle">这是<span class="count"><?php $this->archiveTitle(array('category' =>  _t('%s')), ''); ?></span>分类下所有的文章。</p>
        </div>
    </header>
    <section>
        <div class="container">
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
        </div>
        <?php $this->need('/layout/next.php'); ?>
    </section>
</main>
<?php $this->need('/layout/footer.php'); ?>