<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <nav class="header-nav" ><?php wp_nav_menu(['theme_location' => 'main-menu']); ?></nav>
</header>

<!--<main>-->
<!--    --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--        <article>-->
<!--            <h2><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!--            <div>--><?php //the_content(); ?><!--</div>-->
<!--        </article>-->
<!--    --><?php //endwhile; else : ?>
<!--        <p>No content found.</p>-->
<!--    --><?php //endif; ?>
<!--</main>-->

<div id="main">

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Magna sed adipiscing</a></h2>
                <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-11-01">November 1, 2015</time>
                <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
            </div>
        </header>
        <a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <footer>
            <ul class="actions">
                <li><a href="single.html" class="button large">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon solid fa-heart">28</a></li>
                <li><a href="#" class="icon solid fa-comment">128</a></li>
            </ul>
        </footer>
    </article>

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
                <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-10-25">October 25, 2015</time>
                <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
            </div>
        </header>
        <a href="single.html" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
        <footer>
            <ul class="actions">
                <li><a href="single.html" class="button large">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon solid fa-heart">28</a></li>
                <li><a href="#" class="icon solid fa-comment">128</a></li>
            </ul>
        </footer>
    </article>

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="single.html">Euismod et accumsan</a></h2>
                <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-10-22">October 22, 2015</time>
                <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
            </div>
        </header>
        <a href="single.html" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
        <footer>
            <ul class="actions">
                <li><a href="single.html" class="button large">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon solid fa-heart">28</a></li>
                <li><a href="#" class="icon solid fa-comment">128</a></li>
            </ul>
        </footer>
    </article>

    <!-- Pagination -->
    <ul class="actions pagination">
        <li><a href="" class="disabled button large previous">Previous Page</a></li>
        <li><a href="#" class="button large next">Next Page</a></li>
    </ul>

</div>

<footer>
    <p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>