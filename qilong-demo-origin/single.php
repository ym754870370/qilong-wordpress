<?php get_header(); ?>



    <div class="catePage">
    
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <div class="singlePage">
                <div class="singleBox">
                    <div class="artContent">
                        <h3 class="title"><?php the_title(); ?></h3>  
                        <div class="artAT">作者：<?php the_author(); ?>&nbsp&nbsp&nbsp 时间：<?php the_time('Y-m-d') ?></div>                   
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
                输出找不到文章提示
            <?php endif; ?>
        </div>
            


                <?php get_footer(); ?>