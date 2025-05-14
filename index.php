<?php
    include_once("templates/header.php");
?>

    <main id="main-container">
        <div id="title-container">
            <h1>The Beer Blog</h1>
            <p> O seu blog sobre cerveja</p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>images/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title">
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h2>
                    <p><?= $post['description'] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </main>

<?php
    include_once("templates/footer.php");
?>