<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('/layout/header.php'); ?>
<main>
    <header>
        <div class="container">
            <h1>搜索</h1>
            <p class="subtitle">包含关键字<span class="count"><?php $this->archiveTitle(array('search' =>  _t('%s')), ''); ?></span>的所有文章。</p>
        </div>
    </header>
    <section>
        <div class="container">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <input id="search-query" type="text" id="s" name="s" class="text"  placeholder="Search for anything...">
            </form>
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
        <?php $this->need('/layout/next.php'); ?>
    </section>
</main>
<?php $this->need('/layout/footer.php'); ?>