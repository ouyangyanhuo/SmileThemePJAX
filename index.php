<?php
/*
 * @Author: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @Date: 2022-05-28 18:43:08
 * @LastEditors: ouyangyanhuo ouyangyanhuo@vip.qq.com
 * @LastEditTime: 2022-07-23 20:04:13
 * @FilePath: \SmileThemePJAX\index.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
/**
 * 移植自<a href="https://limxw.com/" target="_blank">WingLim</a>的<a href="https://github.com/WingLim/hugo-tania" target="_blank">hugo-tania</a>主题，在其基础上进行了深度修改的Smiletheme或许是你在Typecho上最好的选择
 * 
 * @package Smile Theme
 * @author Magneto
 * @version Build
 * @link https://www.fmcf.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('/layout/header.php');
 ?>
<main>
    <div class="container">
    <section class="my">
        <div class="content">
            <p>
            <?php if ($this->options->Notice): ?>
            <?php $this->options->Notice() ?>
            <?php else: ?>
            <?php $this->options->description() ?>
            <?php endif; ?>
            </p>
            <?php if ($this->options->Icons): ?>
            <div class="bio-social">
            <a href="<?php if ($this->options->icon_1_URL): ?><?php $this->options->icon_1_URL() ?><?php else: ?><?php $this->options->siteUrl(); ?><?php endif; ?>" target="_blank"><?php if ($this->options->icon_1): ?><?php $this->options->icon_1() ?><?php endif; ?></a>
            <a href="<?php if ($this->options->icon_2_URL): ?><?php $this->options->icon_2_URL() ?><?php else: ?><?php $this->options->siteUrl(); ?><?php endif; ?>" target="_blank"><?php if ($this->options->icon_2): ?><?php $this->options->icon_2() ?><?php endif; ?></a>
            <a href="<?php if ($this->options->icon_3_URL): ?><?php $this->options->icon_3_URL() ?><?php else: ?><?php $this->options->siteUrl(); ?><?php endif; ?>" target="_blank"><?php if ($this->options->icon_2): ?><?php $this->options->icon_3() ?><?php endif; ?></a>
            </div>
            <?php endif; ?>
    </section>
    </div>
 <div class="container">
     <section>
         <h2>Latest Articles<?php if ($this->options->articles): ?><a class=section-button href="<?php $this->options->articles() ?>">View all</a><?php endif; ?></h2>
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
    <?php if ($this->options->Projects): ?>
        <?php $this->need('/layout/projects.php'); ?>
    <?php endif; ?>
 </div>
</main>
<?php $this->need('/layout/footer.php'); ?>