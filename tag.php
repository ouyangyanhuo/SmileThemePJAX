<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
/*
 * @Author: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @Date: 2022-05-28 18:42:58
 * @LastEditors: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @LastEditTime: 2022-06-03 08:41:29
 * @FilePath: \SmileThemePJAX\tag.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
<?php $this->need('/layout/header.php'); ?>
<main>
    <header>
        <div class="container">
            <h1>标签</h1>
            <p class="subtitle">这是<span class="count"><?php $this->archiveTitle(array('tag' => _t('%s'),), ''); ?></span>标签下所有的文章。</p>
        </div>
    </header>
    <section>
        <div class="container">
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