<?php

$footer_blog_item = [
    [
        'title' => 'Article 1',
        'thumbnail' => SITE_PATH.'assets/coin.jpg',
        'image' =>  SITE_PATH.'assets/coin.jpg',
        'alt' => 'Coin',
        'link' => '#',
        'excerpt' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots 
                    in a piece of classical Latin literature from 45 BC, making it over 2000 years 
                    old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum 
                    passage, and going through the cites of the word in classical literature, 
                    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) 
                    by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, 
                    very popular during the Renaissance.',
        'body' => '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots 
                    in a piece of classical Latin literature from 45 BC, making it over 2000 years 
                    old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum 
                    passage, and going through the cites of the word in classical literature, 
                    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 
                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) 
                    by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, 
                    very popular during the Renaissance.</p>'
    ],
    [
        'title' => 'Article 2',
        'thumbnail' => SITE_PATH.'assets/coin.jpg',
        'image' =>  SITE_PATH.'assets/coin.jpg',
        'alt' => 'Coin',
        'link' => '#',
        'excerpt' => 'There are many variations of passages of Lorem Ipsum available, but the majority 
                    have suffered alteration in some form, by injected humour, or randomised words which don\'t 
                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to 
                    be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum 
                    generators on the Internet tend to repeat predefined chunks as necessary, making this the first 
                    true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a 
                    handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.',
        'body' => '<p>There are many variations of passages of Lorem Ipsum available, but the majority 
                    have suffered alteration in some form, by injected humour, or randomised words which don\'t 
                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to 
                    be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum 
                    generators on the Internet tend to repeat predefined chunks as necessary, making this the first 
                    true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a 
                    handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>'
    ],
    [
        'title' => 'Article 3',
        'thumbnail' => SITE_PATH.'assets/coin.jpg',
        'image' =>  SITE_PATH.'assets/coin.jpg',
        'alt' => 'Coin',
        'link' => '#',
        'excerpt' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer 
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                    like Aldus PageMaker including versions of Lorem Ipsum.',
        'body' => '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer 
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but 
                    also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                    like Aldus PageMaker including versions of Lorem Ipsum.</p>'
    ]
];

$footer_insurance_type_item = [
    [
        'title' => 'Home',
    ],
    [
        'title' => 'Auto',
    ],
    [
        'title' => 'Car',
    ],
    [
        'title' => 'Toronto',
    ],
    [
        'title' => 'Ontario',
    ],
    [
        'title' => 'Mortgage',
    ],
    [
        'title' => 'Insurance',
    ],
    [
        'title' => 'Car loans',
    ],
    [
        'title' => 'Life insurance',
    ],
    [
        'title' => 'Snow bird travel insurance',
    ],
    [
        'title' => 'Some long category test list list list list',
    ],
    [
        'title' => 'Finance',
    ],
    [
        'title' => 'Lowestrates.ca',
    ],
    [
        'title' => 'Credit cards',
    ]
];
?>
<footer class="page-footer">
    <div class="container footer-inner-wrapper">
        <div class="footer-item footer-item-1">
            <div class="footer-item-wrapper">
                <img src="<?php echo SITE_PATH; ?>assets/icons/Ratesdotca.png" alt="Ratesdotca logo" class="footer-logo img-fluid"/> 
                <h2 class="footer-title">Task</h2> 
                <p id="dsktp-footer-text">&copy;&nbsp;<?php echo date('Y'); ?> Lowestrates.ca All Rights Reserved</p>       
            </div>
        </div>
        <div class="footer-item footer-item-2">
            <div class="footer-item-wrapper">
                <h2 class="footer-title mb-2">Blogs and Articles</h2>  
                <div class="footer-blog">
                    <?php foreach( $footer_blog_item as $key => $value){?>
                        <div class="footer-blog-item">
                            <div class="footer-blog-header">
                                <img src="<?php echo $value['thumbnail']; ?>" alt="<?php echo $value['alt']; ?>" class="blog-footer-img img-fluid"/>
                                <h3><?php echo $value['title']; ?></h3>
                            </div>
                            <div class="footer-blog-body">
                                <?php $excerpt_break = substr_replace($value['excerpt'], "...readmore", 100); ?>
                                <p><?php 
                                        $regex_pattern = '/\s?...readmore/';
                                        echo preg_replace(  $regex_pattern, " <a href='".$value['link']."' class='text-decoration-underline'>readmore</a>",  $excerpt_break); 
                                    ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="footer-item footer-item-3">
            <div class="footer-item-wrapper">
                <h2 class="footer-title mb-2">Insurance Types</h2>  
                <div class="footer-insurance-type">
                    <?php foreach( $footer_insurance_type_item as $key => $value){?>
                    <div class="footer-badge"><?php echo $value['title']; ?></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none" id="mb-footer-text">
        <p class="text-center mt-2 mb-0">&copy;&nbsp;<?php echo date('Y'); ?> Lowestrates.ca All Rights Reserved</p>   
    </div>
</footer>
    <script>
        var siteUrlJs = "<?php echo SITE_PATH; ?>";
    </script>
    <script type="text/javascript" src="<?php echo SITE_PATH; ?>js/main.js?v=<?= date('YmdHis'); ?>"></script>
    </body>
</html>