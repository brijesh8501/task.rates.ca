<?php  require_once 'template-parts/header.php'; 

$home_block_1 = [
    [
        'title' => 'Nice Mortage Rates',
        'description' => '<p>Come get the best mortgage rates at Jowestrates.ca</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'
    ],
    [
        'title' => 'Get best Car insurance',
        'description' => '<p>come get it at Ir.ca best car insurance.</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'Best Home insurance',
        'description' => '<p>Get your best car insruance. Get it now. Come get it. best best of the best.</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'Car loans car loans car loans!',
        'description' => '<p>Get ur carloans here. come come come</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'Some stuff u like',
        'description' => '<p>Stuff you like stuff you like</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'Wanna try lowestrates.ca? ',
        'description' => '<p>you will love it once you trying it you will love it once you trying it you will love it once you trying it you ·.\•ill love it once you trying it you will love it once you trying it you will love it once you tiying it you will love it once you trying it you will love it once you trying it you will love it once you trying it you will love it once you trying it you will love it once you trying it </p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'The Perfect Sandwich. A Real Classic',
        'description' => '<p>Just some random text lorem ipsum text praesent tincidunt ipsum lipsum.</p>',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ],
    [
        'title' => 'The classic!! ',
        'description' => 'Nice come get the classic classic ',
        'image' => SITE_PATH.'assets/hand-creditcard.jpg',
        'alt' => 'Hand'

    ]
]
?>
<section id="home-section">
    <div class="container">
        <div class="home-block-1">
            <div class="home-block-1-inner-wrapper">
                <?php foreach($home_block_1 as $key =>  $value){ 
                    $block_no = $key + 1;
                ?>
                    <div class="home-block-1-item" id="home-block-1-item-<?php echo $block_no; ?>">
                        <div class="home-block-1-item-img" id="home-block-1-item-<?php echo $block_no; ?>-1">
                            <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['alt']; ?>" class="img-fluid" />
                        </div>
                        <div class="home-block-1-item-body" id="home-block-1-item-<?php echo $block_no; ?>-2">
                            <h2><?php echo $value['title']; ?></h2>
                            <?php echo $value['description']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="home-block-1-pagination">
                    <div class="pagination-wrapper">
                        <img src="<?php echo SITE_PATH.'assets/icons/left.png'?>" alt="Previous" class="icon img-fluid" />
                        <ul class="pagination-list">
                            <li class="paginate-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                        <img src="<?php echo SITE_PATH.'assets/icons/right.png'?>" alt="Next" class="icon img-fluid" />
                    </div>
            </div>
        </div>
        <div class="home-block-2 text-center">
            <h2 class="mb-2">About Lowestrates</h2>
            <img src="<?php echo SITE_PATH.'assets/coin.jpg'; ?>" alt="Coin" class="about-img img-fluid" />
            <h2>What is lowestrates.ca?</h2>
            <p class="font-italic">You will love it once try it</p>
            <div class="about-description">
                <p>Come get it, best rate comparison site!! come get it, best rate comparison site!! come get it. best rate comparison site!!come get it, best rate comparison site!!come get it, best rate comparison site!!come get it, best rate comparison site!!come get it. best rate comparison site!!come get it, best rate comparison site!!come get it, best rate comparison site!! come get it, best rate comparison site!! come get it, best rate comparison site!!come get it, best rate comparison site!!come get it, best rate comparison site!!</p>
            </div>
        </div>
    </div>
</section>
<?php  require_once 'template-parts/footer.php'; ?>