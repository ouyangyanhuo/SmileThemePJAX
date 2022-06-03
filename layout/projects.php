<section>
        <h2>Projects</h2>
        <div class="projects">
            <?php if ($this->options->Project_1): ?>
            <div class="project">
                <div>
                    <?php if ($this->options->Project_1_URL): ?>
                    <a href="<?php $this->options->Project_1_URL() ?>" target="_blank" rel="noreferrer">
                    <?php else: ?>
                    <a href="#" target="_blank" rel="noreferrer">
                    <?php endif; ?>
                    <?php if ($this->options->Project_1_Icon): ?>
                            <div class="icon"><img src="<?php $this->options->Project_1_Icon() ?>" height="30px" width="30px"></div>
                    <?php else: ?>
                        <div class="icon"></div>
                    <?php endif; ?>
                    <?php if ($this->options->Project_1_Name): ?>
                        <h3><?php $this->options->Project_1_Name() ?></h3>
                    <?php else: ?>
                        <h3>Project</h3>
                    <?php endif; ?>
                    </a>
                    <?php if ($this->options->Project_1_Describe): ?>
                    <div class="description"><?php $this->options->Project_1_Describe() ?></div>
                    <?php else: ?>
                    <div class="description"></div>
                    <?php endif; ?>
                </div>
                <div class="flex">
                    <a href="<?php if ($this->options->Project_1_URL): ?><?php $this->options->Project_1_URL() ?><?php endif; ?>" class="button" target="_blank" rel="noreferrer">Source</a>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->options->Project_2): ?>
            <div class="project">
                <div>
                    <?php if ($this->options->Project_2_URL): ?>
                    <a href="<?php $this->options->Project_2_URL() ?>" target="_blank" rel="noreferrer">
                    <?php else: ?>
                    <a href="#" target="_blank" rel="noreferrer">
                    <?php endif; ?>
                    <?php if ($this->options->Project_2_Icon): ?>
                            <div class="icon"><img src="<?php $this->options->Project_2_Icon() ?>" height="30px" width="30px"></div>
                    <?php else: ?>
                        <div class="icon"></div>
                    <?php endif; ?>
                    <?php if ($this->options->Project_2_Name): ?>
                        <h3><?php $this->options->Project_2_Name() ?></h3>
                    <?php else: ?>
                        <h3>Project</h3>
                    <?php endif; ?>
                    </a>
                    <?php if ($this->options->Project_2_Describe): ?>
                    <div class="description"><?php $this->options->Project_2_Describe() ?></div>
                    <?php else: ?>
                    <div class="description"></div>
                    <?php endif; ?>
                </div>
                <div class="flex">
                    <a href="<?php if ($this->options->Project_2_URL): ?><?php $this->options->Project_2_URL() ?><?php endif; ?>" class="button" target="_blank" rel="noreferrer">Source</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>